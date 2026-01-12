#!/bin/bash
# Script to deploy to production server using rsync (requires SSH key authentication)
# This is the FASTEST option when SSH keys are configured - uses checksum comparison

set -e

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
# Get the project root (two levels up from deploy/scripts/)
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

# Load environment variables from deploy folder
if [ -f "$PROJECT_ROOT/deploy/.env" ]; then
    source "$PROJECT_ROOT/deploy/.env"

    # Strip quotes from variables if present
    PRODUCTION_HOST="${PRODUCTION_HOST%\"}"
    PRODUCTION_HOST="${PRODUCTION_HOST#\"}"
    PRODUCTION_USERNAME="${PRODUCTION_USERNAME%\"}"
    PRODUCTION_USERNAME="${PRODUCTION_USERNAME#\"}"
    PRODUCTION_PATH="${PRODUCTION_PATH%\"}"
    PRODUCTION_PATH="${PRODUCTION_PATH#\"}"
else
    echo "ERROR: .env file not found at $PROJECT_ROOT/deploy/.env"
    exit 1
fi

# Colors for output
GREEN='\033[0;32m'
RED='\033[0;31m'
YELLOW='\033[0;33m'
CYAN='\033[0;36m'
NC='\033[0m' # No Color

# Parse command line arguments
SKIP_BUILD=false
DRY_RUN=false
DELETE_REMOVED=false
IMAGES_ONLY=false
HTML_ONLY=false

while [[ $# -gt 0 ]]; do
    case $1 in
        --skip-build)
            SKIP_BUILD=true
            shift
            ;;
        --dry-run)
            DRY_RUN=true
            shift
            ;;
        --delete)
            DELETE_REMOVED=true
            shift
            ;;
        --images-only)
            IMAGES_ONLY=true
            shift
            ;;
        --html-only)
            HTML_ONLY=true
            shift
            ;;
        --help)
            echo "Usage: $0 [options]"
            echo ""
            echo "Rsync-based deployment (requires SSH key authentication)"
            echo ""
            echo "Options:"
            echo "  --skip-build   Skip Jekyll build (use existing _site)"
            echo "  --dry-run      Show what would be synced without uploading"
            echo "  --delete       Delete files on server that don't exist locally"
            echo "  --images-only  Only sync images"
            echo "  --html-only    Only sync HTML/CSS/JS (exclude images)"
            echo "  --help         Show this help message"
            echo ""
            echo "Setup: Add your SSH public key to ~/.ssh/authorized_keys on the server"
            echo "       ssh-copy-id ${PRODUCTION_USERNAME}@${PRODUCTION_HOST}"
            exit 0
            ;;
        *)
            echo -e "${RED}Unknown option: $1${NC}"
            exit 1
            ;;
    esac
done

echo -e "${CYAN}======================================${NC}"
echo -e "${CYAN}  Games Y'all Rsync Deployment${NC}"
echo -e "${CYAN}======================================${NC}"
echo -e "${YELLOW}Project root: $PROJECT_ROOT${NC}"

# Check if rsync is available
if ! command -v rsync &> /dev/null; then
    echo -e "${RED}ERROR: rsync is not installed${NC}"
    exit 1
fi

# Validate environment variables
if [ -z "$PRODUCTION_HOST" ] || [ -z "$PRODUCTION_USERNAME" ]; then
    echo -e "${RED}ERROR: Missing required environment variables${NC}"
    echo -e "${RED}Required: PRODUCTION_HOST, PRODUCTION_USERNAME${NC}"
    exit 1
fi

# Check SSH connectivity
echo -e "${YELLOW}Testing SSH connection...${NC}"
if ! ssh -o BatchMode=yes -o ConnectTimeout=10 "${PRODUCTION_USERNAME}@${PRODUCTION_HOST}" "echo 'SSH OK'" 2>/dev/null; then
    echo -e "${RED}ERROR: SSH connection failed. Make sure your SSH key is configured.${NC}"
    echo -e "${YELLOW}Run: ssh-copy-id ${PRODUCTION_USERNAME}@${PRODUCTION_HOST}${NC}"
    echo -e "${YELLOW}Or use deploy-to-production.sh for password-based deployment${NC}"
    exit 1
fi
echo -e "${GREEN}SSH connection successful${NC}"

# Determine the site directory
if [ "$SKIP_BUILD" = true ]; then
    SITE_DIR="$PROJECT_ROOT/games_yall_site/_site"
    if [ ! -d "$SITE_DIR" ]; then
        echo -e "${RED}ERROR: _site directory not found. Run without --skip-build first.${NC}"
        exit 1
    fi
    echo -e "${YELLOW}Using existing _site directory (skipping build)${NC}"
else
    # Create a temporary directory for the build
    TEMP_DIR=$(mktemp -d)
    echo -e "${YELLOW}Created temporary directory: $TEMP_DIR${NC}"

    # Cleanup function
    cleanup() {
        if [ -n "$TEMP_DIR" ] && [ -d "$TEMP_DIR" ]; then
            echo -e "${YELLOW}Cleaning up temporary directory...${NC}"
            rm -rf "$TEMP_DIR"
        fi
    }
    trap cleanup EXIT

    # Copy files to temp directory
    echo -e "${YELLOW}Copying files to temp directory...${NC}"
    cp -R "$PROJECT_ROOT"/* "$TEMP_DIR"
    cp -R "$PROJECT_ROOT"/.[^.]* "$TEMP_DIR" 2>/dev/null || :

    # Change to the Jekyll site directory
    cd "$TEMP_DIR/games_yall_site"

    if [ ! -f "Gemfile" ]; then
        echo -e "${RED}ERROR: Gemfile not found${NC}"
        exit 1
    fi

    echo -e "${YELLOW}Installing Jekyll dependencies...${NC}"
    bundle install --quiet

    echo -e "${YELLOW}Building Jekyll site...${NC}"
    JEKYLL_ENV=production bundle exec jekyll build

    if [ ! -d "_site" ]; then
        echo -e "${RED}ERROR: Jekyll build failed${NC}"
        exit 1
    fi

    SITE_DIR="$TEMP_DIR/games_yall_site/_site"
fi

echo -e "${CYAN}======================================${NC}"
echo -e "${CYAN}  Syncing with rsync${NC}"
echo -e "${CYAN}======================================${NC}"

# Build rsync options
RSYNC_OPTS="-avz --checksum --progress"

# Add exclude patterns
RSYNC_OPTS="$RSYNC_OPTS --exclude='.DS_Store' --exclude='.git*'"

# Handle selective sync modes
if [ "$IMAGES_ONLY" = true ]; then
    echo -e "${YELLOW}Mode: Images only${NC}"
    RSYNC_OPTS="$RSYNC_OPTS --include='*/' --include='*.jpg' --include='*.jpeg' --include='*.png' --include='*.gif' --include='*.webp' --include='*.svg' --include='*.ico' --exclude='*'"
elif [ "$HTML_ONLY" = true ]; then
    echo -e "${YELLOW}Mode: HTML/CSS/JS only (excluding images)${NC}"
    RSYNC_OPTS="$RSYNC_OPTS --exclude='images/' --exclude='*.jpg' --exclude='*.jpeg' --exclude='*.png' --exclude='*.gif' --exclude='*.webp'"
else
    echo -e "${YELLOW}Mode: Full site${NC}"
fi

# Add delete flag if requested
if [ "$DELETE_REMOVED" = true ]; then
    RSYNC_OPTS="$RSYNC_OPTS --delete"
    echo -e "${YELLOW}Will delete removed files from server${NC}"
fi

# Add dry-run flag if requested
if [ "$DRY_RUN" = true ]; then
    RSYNC_OPTS="$RSYNC_OPTS --dry-run"
    echo -e "${CYAN}DRY RUN - showing what would be synced${NC}"
fi

echo -e "${YELLOW}Host: $PRODUCTION_HOST${NC}"
echo -e "${YELLOW}Path: ${PRODUCTION_PATH:-/}${NC}"

# Run rsync with checksum-based comparison (ignores timestamps!)
rsync $RSYNC_OPTS \
    "${SITE_DIR}/" \
    "${PRODUCTION_USERNAME}@${PRODUCTION_HOST}:${PRODUCTION_PATH:-/}"

if [ $? -eq 0 ]; then
    echo -e "${GREEN}======================================${NC}"
    echo -e "${GREEN}  Deployment Complete!${NC}"
    echo -e "${GREEN}======================================${NC}"
    echo -e "${GREEN}Visit https://gamesyall.com to review the changes.${NC}"
else
    echo -e "${RED}Deployment failed!${NC}"
    exit 1
fi
