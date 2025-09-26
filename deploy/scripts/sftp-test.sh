#!/bin/bash
# Simple script to test SFTP connection before deployment

# Get the project root (assuming this script is in deploy/scripts/)
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(cd "$SCRIPT_DIR/../.." && pwd)"

# Load environment variables
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

echo -e "${YELLOW}Testing SFTP connection...${NC}"
echo -e "${YELLOW}Host: $STAGING_HOST${NC}"
echo -e "${YELLOW}User: $STAGING_USERNAME${NC}"

# Check if required variables are set
if [ -z "$STAGING_HOST" ] || [ -z "$STAGING_USERNAME" ] || [ -z "$STAGING_PASSWORD" ]; then
    echo -e "${RED}ERROR: Missing environment variables${NC}"
    echo "Required variables: STAGING_HOST, STAGING_USERNAME, STAGING_PASSWORD"
    exit 1
fi

# Test 1: LFTP with quoted password
echo -e "\n${YELLOW}Test 1: LFTP with quoted password${NC}"
TEMP_SCRIPT=$(mktemp)
cat > "$TEMP_SCRIPT" << 'EOF'
set sftp:auto-confirm yes
set ssl:verify-certificate no
set ftp:ssl-allow no
EOF

printf "open sftp://%s\n" "$STAGING_HOST" >> "$TEMP_SCRIPT"
printf "user %s \"%s\"\n" "$STAGING_USERNAME" "$STAGING_PASSWORD" >> "$TEMP_SCRIPT"
echo "ls" >> "$TEMP_SCRIPT"
echo "bye" >> "$TEMP_SCRIPT"

echo "Script contents (password masked):"
sed "s/$STAGING_PASSWORD/***MASKED***/g" "$TEMP_SCRIPT"
echo ""

if lftp -f "$TEMP_SCRIPT" 2>/dev/null; then
    echo -e "${GREEN}✅ Test 1 PASSED: Quoted password method works!${NC}"
    rm -f "$TEMP_SCRIPT"
    exit 0
else
    echo -e "${RED}❌ Test 1 FAILED: Quoted password method failed${NC}"
fi
rm -f "$TEMP_SCRIPT"

# Test 2: LFTP with login command
echo -e "\n${YELLOW}Test 2: LFTP with login command${NC}"
TEMP_SCRIPT2=$(mktemp)
cat > "$TEMP_SCRIPT2" << 'EOF'
set sftp:auto-confirm yes
set ssl:verify-certificate no
set ftp:ssl-allow no
EOF

printf "open sftp://%s\n" "$STAGING_HOST" >> "$TEMP_SCRIPT2"
printf "login %s %s\n" "$STAGING_USERNAME" "$STAGING_PASSWORD" >> "$TEMP_SCRIPT2"
echo "ls" >> "$TEMP_SCRIPT2"
echo "bye" >> "$TEMP_SCRIPT2"

if lftp -f "$TEMP_SCRIPT2" 2>/dev/null; then
    echo -e "${GREEN}✅ Test 2 PASSED: Login command works!${NC}"
    rm -f "$TEMP_SCRIPT2"
    exit 0
else
    echo -e "${RED}❌ Test 2 FAILED: Login command failed${NC}"
fi
rm -f "$TEMP_SCRIPT2"

# Test 3: Settings-based authentication
echo -e "\n${YELLOW}Test 3: Settings-based authentication${NC}"
TEMP_SCRIPT3=$(mktemp)
cat > "$TEMP_SCRIPT3" << 'EOF'
set sftp:auto-confirm yes
set ssl:verify-certificate no
set ftp:ssl-allow no
EOF

printf "set ftp:user %s\n" "$STAGING_USERNAME" >> "$TEMP_SCRIPT3"
printf "set ftp:password %s\n" "$STAGING_PASSWORD" >> "$TEMP_SCRIPT3"
printf "open sftp://%s\n" "$STAGING_HOST" >> "$TEMP_SCRIPT3"
echo "ls" >> "$TEMP_SCRIPT3"
echo "bye" >> "$TEMP_SCRIPT3"

if lftp -f "$TEMP_SCRIPT3" 2>/dev/null; then
    echo -e "${GREEN}✅ Test 3 PASSED: Settings-based authentication works!${NC}"
    rm -f "$TEMP_SCRIPT3"
    exit 0
else
    echo -e "${RED}❌ Test 3 FAILED: Settings-based authentication failed${NC}"
fi
rm -f "$TEMP_SCRIPT3"

# All automated tests failed
echo -e "\n${RED}❌ ALL AUTOMATED TESTS FAILED${NC}"
echo ""
echo -e "${YELLOW}Manual testing suggestion:${NC}"
echo "Try connecting manually with:"
echo "  sftp $STAGING_USERNAME@$STAGING_HOST"
echo "  Password: $STAGING_PASSWORD"
echo ""
echo "If manual connection works but lftp doesn't, the issue may be:"
echo "1. lftp version compatibility"
echo "2. Server-specific SFTP requirements"
echo "3. Need for key-based authentication"
echo ""
echo "Contact your hosting provider about SFTP requirements."

exit 1