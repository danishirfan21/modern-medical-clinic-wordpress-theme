#!/bin/bash

# Deployment script for Modern Medical Clinic theme to Pantheon
# This script automates the process of pushing your local theme to Pantheon's Git repository.

# Configuration - Update these if necessary
PANTHEON_REPO_URL="ssh://codeserver.dev.a05f1923-3289-4741-bfdf-db18e9527f50@codeserver.dev.a05f1923-3289-4741-bfdf-db18e9527f50.drush.in:2222/~/repository.git"
THEME_SLUG="modern-medical-clinic"
TEMP_DIR=".pantheon_deploy_cache"

echo "Starting deployment to Pantheon..."

# Create temporary directory for the Pantheon repo clone
mkdir -p "$TEMP_DIR"

# Clone the Pantheon repository into the temp directory if it doesn't exist
if [ ! -d "$TEMP_DIR/.git" ]; then
    echo "Cloning Pantheon repository..."
    git clone "$PANTHEON_REPO_URL" "$TEMP_DIR"
else
    echo "Updating local clone of Pantheon repository..."
    cd "$TEMP_DIR" && git pull origin master && cd ..
fi

# Ensure theme directory exists in the Pantheon repo
mkdir -p "$TEMP_DIR/wp-content/themes/$THEME_SLUG"

# Sync local theme files to the Pantheon repo
# We sync the current directory (.) to the theme folder
echo "Syncing theme files..."
rsync -av --delete \
    --exclude ".git/" \
    --exclude "$TEMP_DIR/" \
    --exclude "pantheon-deploy.sh" \
    --exclude "node_modules/" \
    --exclude "*.log" \
    --exclude ".DS_Store" \
    . "$TEMP_DIR/wp-content/themes/$THEME_SLUG/"

# Commit and push changes
echo "Committing and pushing to Pantheon..."
cd "$TEMP_DIR"
git add "wp-content/themes/$THEME_SLUG"
if git diff-index --quiet HEAD --; then
    echo "No changes to deploy."
else
    git commit -m "Update theme: $THEME_SLUG (deployed via script)"
    git push origin master
fi
cd ..

echo "--------------------------------------------------"
echo "Deployment complete!"
echo "Site URL: https://dev-modern-medical-clinic.pantheonsite.io/"
echo ""
echo "Important Notes:"
echo "1. If this is your first deploy, activate the theme in WordPress Admin."
echo "2. If changes don't appear, clear your browser cache or click 'Clear Caches' in Pantheon."
echo "3. The '$TEMP_DIR' directory is kept to speed up future deployments. You can safely delete it."
echo "--------------------------------------------------"
