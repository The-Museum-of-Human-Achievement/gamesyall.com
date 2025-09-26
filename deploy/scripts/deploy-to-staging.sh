#!/bin/bash
# Cross-platform script to deploy to staging server
# Supports macOS, Linux, and Windows (via Git Bash/WSL)

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
# Get the project root (two levels up from deploy/scripts/)
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

# Load environment variables from deploy folder
if [ -f "$PROJECT_ROOT/deploy/.env" ]; then
    source "$PROJECT_ROOT/deploy/.env"
else
    echo "ERROR: .env file not found at $PROJECT_ROOT/deploy/.env"
    exit 1
fi

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}Starting deployment to staging...${NC}"
echo -e "${YELLOW}Project root: $PROJECT_ROOT${NC}"

# Platform detection
detect_platform() {
    if [[ "$OSTYPE" == "darwin"* ]]; then
        echo "macos"
    elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
        echo "linux"
    elif [[ "$OSTYPE" == "msys" || "$OSTYPE" == "cygwin" ]]; then
        echo "windows"
    elif [[ -n "$WSL_DISTRO_NAME" ]]; then
        echo "wsl"
    else
        echo "unknown"
    fi
}

PLATFORM=$(detect_platform)
echo -e "${YELLOW}Detected platform: $PLATFORM${NC}"

# Install dependencies based on platform
install_dependencies() {
    case $PLATFORM in
        "macos")
            echo -e "${YELLOW}Installing dependencies for macOS...${NC}"
            
            # Check if Homebrew is installed
            if ! command -v brew &> /dev/null; then
                echo -e "${RED}Homebrew is required but not installed.${NC}"
                echo -e "${YELLOW}Install Homebrew by running:${NC}"
                echo '/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"'
                exit 1
            fi
            
            # Install lftp if not present
            if ! command -v lftp &> /dev/null; then
                echo -e "${YELLOW}Installing lftp...${NC}"
                brew install lftp
            fi
            ;;
            
        "linux")
            echo -e "${YELLOW}Installing dependencies for Linux...${NC}"
            
            # Install required packages if not already installed
            if ! command -v lftp &> /dev/null; then
                echo -e "${YELLOW}Installing lftp...${NC}"
                sudo apt-get update && sudo apt-get install -y lftp
            fi
            
            if ! command -v pip3 &> /dev/null; then
                echo -e "${YELLOW}Installing Python3 and pip...${NC}"
                sudo apt-get update && sudo apt-get install -y python3 python3-pip
            fi
            ;;
            
        "windows"|"wsl")
            echo -e "${YELLOW}Installing dependencies for Windows/WSL...${NC}"
            
            if [[ "$PLATFORM" == "wsl" ]]; then
                # WSL - use Linux commands
                if ! command -v lftp &> /dev/null; then
                    echo -e "${YELLOW}Installing lftp...${NC}"
                    sudo apt-get update && sudo apt-get install -y lftp
                fi
            else
                # Git Bash on Windows
                if ! command -v lftp &> /dev/null; then
                    echo -e "${RED}lftp is not installed.${NC}"
                    echo -e "${YELLOW}For Windows, you have several options:${NC}"
                    echo -e "${YELLOW}1. Install using Chocolatey: choco install lftp${NC}"
                    echo -e "${YELLOW}2. Install using Scoop: scoop install lftp${NC}"
                    echo -e "${YELLOW}3. Use WSL (Windows Subsystem for Linux)${NC}"
                    echo -e "${YELLOW}4. Use an alternative FTP client${NC}"
                    
                    # Check if chocolatey is available
                    if command -v choco &> /dev/null; then
                        read -p "Install lftp using Chocolatey? (y/n): " -n 1 -r
                        echo
                        if [[ $REPLY =~ ^[Yy]$ ]]; then
                            choco install lftp -y
                        else
                            exit 1
                        fi
                    else
                        exit 1
                    fi
                fi
            fi
            ;;
            
        *)
            echo -e "${RED}Unsupported platform: $PLATFORM${NC}"
            echo -e "${YELLOW}This script supports macOS, Linux, and Windows (Git Bash/WSL)${NC}"
            exit 1
            ;;
    esac
}

# Install dependencies
install_dependencies

# Install Python dependencies from project root
echo -e "${YELLOW}Installing Python dependencies...${NC}"
if command -v pip3 &> /dev/null; then
    pip3 install -r "$PROJECT_ROOT/requirements.txt"
elif command -v pip &> /dev/null; then
    pip install -r "$PROJECT_ROOT/requirements.txt"
else
    echo -e "${RED}Python pip not found. Please install Python and pip.${NC}"
    exit 1
fi

# Create a temporary directory for the build
if [[ "$PLATFORM" == "windows" ]]; then
    # Use Windows-compatible temp directory
    TEMP_DIR=$(mktemp -d -t gamesyall-XXXXXXXXXX)
else
    TEMP_DIR=$(mktemp -d)
fi

echo -e "${YELLOW}Created temporary directory: $TEMP_DIR${NC}"

# Copy files to temp directory
echo -e "${YELLOW}Copying files to temp directory...${NC}"
cp -R "$PROJECT_ROOT"/* "$TEMP_DIR"
cp -R "$PROJECT_ROOT"/.[^.]* "$TEMP_DIR" 2>/dev/null || :

# Navigate to the Jekyll site directory
JEKYLL_DIR="$TEMP_DIR/games_yall_site"
if [ ! -d "$JEKYLL_DIR" ]; then
    echo -e "${RED}Jekyll site directory not found: $JEKYLL_DIR${NC}"
    exit 1
fi

# Build the Jekyll site
echo -e "${YELLOW}Building Jekyll site...${NC}"
cd "$JEKYLL_DIR"

# Install Jekyll dependencies
if [ -f "Gemfile" ]; then
    echo -e "${YELLOW}Installing Jekyll dependencies...${NC}"
    
    # Check if bundle is available
    if ! command -v bundle &> /dev/null; then
        echo -e "${YELLOW}Installing bundler...${NC}"
        gem install bundler
    fi
    
    bundle install
else
    echo -e "${RED}Gemfile not found in $JEKYLL_DIR${NC}"
    exit 1
fi

# Build the site for staging
JEKYLL_ENV=staging bundle exec jekyll build

# Check if build was successful
if [ ! -d "_site" ]; then
    echo -e "${RED}Jekyll build failed - _site directory not found${NC}"
    exit 1
fi

# Verify required environment variables
if [ -z "$STAGING_HOST" ] || [ -z "$STAGING_USERNAME" ] || [ -z "$STAGING_PASSWORD" ]; then
    echo -e "${RED}Missing required environment variables:${NC}"
    echo -e "${RED}STAGING_HOST, STAGING_USERNAME, and STAGING_PASSWORD must be set in .env${NC}"
    echo -e "${RED}Make sure passwords with spaces are in quotes!${NC}"
    exit 1
fi

# Deploy to staging server using lftp
echo -e "${YELLOW}Deploying to staging server...${NC}"
echo -e "${YELLOW}Host: $STAGING_HOST${NC}"
echo -e "${YELLOW}User: $STAGING_USERNAME${NC}"

# Create lftp script to handle special characters in passwords
LFTP_SCRIPT=$(cat << EOF
open sftp://$STAGING_HOST
user $STAGING_USERNAME $STAGING_PASSWORD
set ssl:verify-certificate no
set sftp:auto-confirm yes
mirror -R $JEKYLL_DIR/_site/ /
bye
EOF
)

echo "$LFTP_SCRIPT" | lftp

# Check if deployment was successful
if [ $? -eq 0 ]; then
    echo -e "${GREEN}Deployment to staging completed successfully!${NC}"
    echo -e "${GREEN}Visit https://dev.gamesyall.com to review the changes.${NC}"
else
    echo -e "${RED}Deployment to staging failed!${NC}"
    echo -e "${YELLOW}Check your credentials and server settings in .env${NC}"
fi

# Clean up temporary directory
echo -e "${YELLOW}Cleaning up...${NC}"
rm -rf "$TEMP_DIR"

echo -e "${GREEN}Staging deployment process completed!${NC}"