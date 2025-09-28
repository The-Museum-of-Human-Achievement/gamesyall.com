#!/bin/bash
# Script to deploy to staging server

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
# Get the project root (two levels up from deploy/scripts/)
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

# Load environment variables from deploy folder
if [ -f "$PROJECT_ROOT/deploy/.env" ]; then
    source "$PROJECT_ROOT/deploy/.env"
    
    # Strip quotes from variables if present using bash parameter expansion
    STAGING_HOST="${STAGING_HOST%\"}"
    STAGING_HOST="${STAGING_HOST#\"}"
    STAGING_USERNAME="${STAGING_USERNAME%\"}"
    STAGING_USERNAME="${STAGING_USERNAME#\"}"
    STAGING_PASSWORD="${STAGING_PASSWORD%\"}"
    STAGING_PASSWORD="${STAGING_PASSWORD#\"}"
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

# Detect platform
if [[ "$OSTYPE" == "darwin"* ]]; then
    PLATFORM="macos"
elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
    PLATFORM="linux"
else
    PLATFORM="unknown"
fi

echo -e "${YELLOW}Detected platform: $PLATFORM${NC}"

# Install required packages based on platform
if [ "$PLATFORM" = "macos" ]; then
    echo -e "${YELLOW}Installing dependencies for macOS...${NC}"
    # Check if Homebrew is installed
    if ! command -v brew &> /dev/null; then
        echo -e "${RED}Homebrew not found. Please install it first: https://brew.sh${NC}"
        exit 1
    fi
    
    # Install lftp if not present
    if ! command -v lftp &> /dev/null; then
        echo -e "${YELLOW}Installing lftp via Homebrew...${NC}"
        brew install lftp
    fi
elif [ "$PLATFORM" = "linux" ]; then
    echo -e "${YELLOW}Installing dependencies for Linux...${NC}"
    # Install required packages if not already installed
    if ! command -v lftp &> /dev/null; then
        echo -e "${YELLOW}Installing lftp...${NC}"
        sudo apt-get update && sudo apt-get install -y lftp
    fi
fi

if ! command -v pip3 &> /dev/null; then
    if [ "$PLATFORM" = "macos" ]; then
        echo -e "${YELLOW}Installing Python3 and pip via Homebrew...${NC}"
        brew install python
    else
        echo -e "${YELLOW}Installing Python3 and pip...${NC}"
        sudo apt-get update && sudo apt-get install -y python3 python3-pip
    fi
fi

# Install Python dependencies from project root
echo -e "${YELLOW}Installing Python dependencies...${NC}"
pip3 install -r "$PROJECT_ROOT/requirements.txt"

# Create a temporary directory for the build
TEMP_DIR=$(mktemp -d)
echo -e "${YELLOW}Created temporary directory: $TEMP_DIR${NC}"

# Copy files to temp directory
echo -e "${YELLOW}Copying files to temp directory...${NC}"
cp -R "$PROJECT_ROOT"/* "$TEMP_DIR"
cp -R "$PROJECT_ROOT"/.[^.]* "$TEMP_DIR" 2>/dev/null || :

# Change to the Jekyll site directory
cd "$TEMP_DIR/games_yall_site"

# Check if Gemfile exists
if [ ! -f "Gemfile" ]; then
    echo -e "${RED}ERROR: Gemfile not found in $TEMP_DIR/games_yall_site${NC}"
    echo -e "${RED}Please ensure the Jekyll site is in the correct directory structure.${NC}"
    rm -rf "$TEMP_DIR"
    exit 1
fi

# Install Ruby dependencies and build the Jekyll site
echo -e "${YELLOW}Installing Jekyll dependencies...${NC}"
bundle install

echo -e "${YELLOW}Building Jekyll site...${NC}"
JEKYLL_ENV=staging bundle exec jekyll build

# Check if the build was successful
if [ ! -d "_site" ]; then
    echo -e "${RED}ERROR: Jekyll build failed - _site directory not found${NC}"
    rm -rf "$TEMP_DIR"
    exit 1
fi

# Debug: Show what we're about to deploy
echo -e "${YELLOW}Debug: Contents of _site directory:${NC}"
ls -la _site/ | head -10

# Validate environment variables
if [ -z "$STAGING_HOST" ] || [ -z "$STAGING_USERNAME" ] || [ -z "$STAGING_PASSWORD" ]; then
    echo -e "${RED}ERROR: Missing required environment variables in .env file${NC}"
    echo -e "${RED}Required: STAGING_HOST, STAGING_USERNAME, STAGING_PASSWORD${NC}"
    rm -rf "$TEMP_DIR"
    exit 1
fi

echo -e "${YELLOW}Deploying to staging server...${NC}"
echo -e "${YELLOW}Host: $STAGING_HOST${NC}"
echo -e "${YELLOW}User: $STAGING_USERNAME${NC}"
echo -e "${YELLOW}Password length: ${#STAGING_PASSWORD} characters${NC}"

# Create lftp script using the WORKING quoted password method
cat > "$TEMP_DIR/lftp_script.txt" << 'LFTP_EOF'
set sftp:auto-confirm yes
set ssl:verify-certificate no
set ftp:ssl-allow no

# Dreamhost-specific connection limits to avoid rate limiting
set net:max-retries 2
set net:reconnect-interval-base 10
set net:reconnect-interval-multiplier 2
set net:reconnect-interval-max 120

# Single connection only - Dreamhost has strict concurrent limits
set cmd:parallel 1
set cmd:queue-parallel 1
set sftp:max-packets-in-flight 1

# Rate limiting to be gentler on server
set net:limit-rate 512000

# Connection timeouts
set net:timeout 60
set net:persist-retries 1

# SSH connection settings optimized for Dreamhost
set sftp:connect-program "ssh -o ConnectTimeout=30 -o ServerAliveInterval=60 -o ServerAliveCountMax=2 -o TCPKeepAlive=yes"

# Disable concurrent operations that might trigger limits  
set ftp:sync-mode off
set mirror:parallel-directories 1
set mirror:parallel-transfer-count 1
LFTP_EOF

# Add the dynamic parts using printf - this is the method that WORKS
printf "open sftp://%s\n" "$STAGING_HOST" >> "$TEMP_DIR/lftp_script.txt"
printf "user %s \"%s\"\n" "$STAGING_USERNAME" "$STAGING_PASSWORD" >> "$TEMP_DIR/lftp_script.txt"
echo "mirror -R _site/ dev.gamesyall.com/" >> "$TEMP_DIR/lftp_script.txt"
echo "bye" >> "$TEMP_DIR/lftp_script.txt"

# Debug: Show the script contents (with password masked)
echo -e "${YELLOW}Debug: LFTP script contents (password masked):${NC}"
sed "s/$STAGING_PASSWORD/***MASKED***/g" "$TEMP_DIR/lftp_script.txt"
echo ""

# Deploy using lftp with the script file to avoid shell escaping issues
cd "$TEMP_DIR/games_yall_site"
lftp -f "$TEMP_DIR/lftp_script.txt"

# Check if deployment was successful
if [ $? -eq 0 ]; then
    echo -e "${GREEN}Deployment to staging completed successfully!${NC}"
    echo -e "${GREEN}Visit https://dev.gamesyall.com to review the changes.${NC}"
else
    echo -e "${RED}Deployment to staging failed!${NC}"
    echo -e "${RED}Check your credentials and server settings in .env${NC}"
    
    # Clean up and exit with error
    rm -rf "$TEMP_DIR"
    exit 1
fi

# Clean up temporary directory
echo -e "${YELLOW}Cleaning up...${NC}"
rm -rf "$TEMP_DIR"

echo -e "${GREEN}Staging deployment process completed!${NC}"