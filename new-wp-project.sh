#!/bin/bash
# new-wp-project.sh
# Usage: bash new-wp-project.sh mein-projekt

PROJECT_NAME=$1
THEMES_DIR="C:/xampp/htdocs/wp-content/themes"   # Passe diesen Pfad an

if [ -z "$PROJECT_NAME" ]; then
    echo "Fehler: Projektname fehlt."
    echo "Usage: bash new-wp-project.sh mein-projekt"
    exit 1
fi

TARGET="$THEMES_DIR/$PROJECT_NAME"

echo "Klone wp-starter als $PROJECT_NAME..."
git clone https://github.com/DEIN-USERNAME/wp-starter.git "$TARGET"

cd "$TARGET"

echo "Entferne Git-History (frisches Repo)..."
rm -rf .git
git init
git add .
git commit -m "Initial commit from wp-starter"

echo "Installiere Node-Abhängigkeiten..."
npm install

echo "Fertig! Nächste Schritte:"
echo "  1. cd $TARGET"
echo "  2. npm run dev"
echo "  3. Theme in WordPress Admin aktivieren: $PROJECT_NAME"
