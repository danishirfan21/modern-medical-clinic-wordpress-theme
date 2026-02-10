#!/bin/bash

# Deployment script for Pantheon
# Usage: ./deploy.sh <pantheon_git_url>

set -e

PANTHEON_URL=$1

if [ -z "$PANTHEON_URL" ]; then
    echo "Usage: ./deploy.sh <pantheon_git_url>"
    exit 1
fi

TEMP_DIR="pantheon_deploy_temp"
THEME_NAME="modern-medical-clinic"

# Ensure cleanup on exit, even if there's an error
cleanup() {
    if [ -d "$TEMP_DIR" ]; then
        echo "Cleaning up temporary directory..."
        rm -rf "$TEMP_DIR"
    fi
}
trap cleanup EXIT

echo "Cloning Pantheon repository..."
GIT_SSH_COMMAND="ssh -o StrictHostKeyChecking=no" git clone "$PANTHEON_URL" "$TEMP_DIR"

THEME_DIR="$TEMP_DIR/wp-content/themes/$THEME_NAME"

echo "Preparing theme directory at $THEME_DIR..."
mkdir -p "$THEME_DIR"

echo "Copying theme files..."
# Sync all files except the deployment script, the temp directory, and git files
rsync -av --exclude='.git/' --exclude="$TEMP_DIR/" --exclude='deploy.sh' ./ "$THEME_DIR/"

cd "$TEMP_DIR"

# Check if there are changes
if [ -z "$(git status --porcelain)" ]; then
    echo "No changes to deploy."
else
    echo "Committing and pushing changes..."
    git add .
    git commit -m "Deploy theme: $(date)"
    # Determine the remote branch (usually master on Pantheon)
    REMOTE_BRANCH=$(git remote show origin | grep 'HEAD branch' | cut -d' ' -f5)
    GIT_SSH_COMMAND="ssh -o StrictHostKeyChecking=no" git push origin "$REMOTE_BRANCH"
    echo "Deployment complete!"
fi
