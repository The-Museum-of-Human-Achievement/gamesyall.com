#!/bin/bash
# Script to deploy to staging server

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
# Get the project root (two levels up from deploy/scripts/)
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

# Load environment variables from deploy folder
source "$PROJECT_ROOT/deploy/.env"

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}Starting deployment to staging...${NC}"
echo -e "${YELLOW}Project root: $PROJECT_ROOT${NC}"

# Install required packages if not already installed
if ! command -v lftp &> /dev/null; then
    echo -e "${YELLOW}Installing lftp...${NC}"
    sudo apt-get update && sudo apt-get install -y lftp
fi

if ! command -v pip3 &> /dev/null; then
    echo -e "${YELLOW}Installing Python3 and pip...${NC}"
    sudo apt-get update && sudo apt-get install -y python3 python3-pip
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

# Build the Jekyll site
echo -e "${YELLOW}Building Jekyll site...${NC}"
cd "$TEMP_DIR/games_yall_site"
bundle install
JEKYLL_ENV=staging bundle exec jekyll build

# Deploy to staging server using lftp
echo -e "${YELLOW}Deploying to staging server...${NC}"
lftp -c "
open -u $STAGING_USERNAME,$STAGING_PASSWORD $STAGING_HOST;
set ssl:verify-certificate no;
mirror -R $TEMP_DIR/games_yall_site/_site/ /;
bye;
"

# Check if deployment was successful
if [ $? -eq 0 ]; then
    echo -e "${GREEN}Deployment to staging completed successfully!${NC}"
    echo -e "${GREEN}Visit https://dev.gamesyall.com to review the changes.${NC}"
else
    echo -e "${RED}Deployment to staging failed!${NC}"
fi

# Clean up temporary directory
echo -e "${YELLOW}Cleaning up...${NC}"
rm -rf "$TEMP_DIR"

echo -e "${GREEN}Staging deployment process completed!${NC}"