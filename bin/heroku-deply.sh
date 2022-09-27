#!/usr/bin/env bash

set -e

spinner() {
  local i sp n
  sp='/-\|'
  n=${#sp}
  while sleep 0.1; do
    printf "%s\b" "${sp:i++%n:1}"
  done
}

killSpinner() {
  kill "$!" 2>/dev/null
}

GREEN='\033[0;32m'
NC='\033[0m' # No Color

spinner &

if [ ! -f "composer.json" ]; then
  echo "Please run this script from the root of the project"
  killSpinner
  exit 1
fi

if ! command -v heroku &>/dev/null; then
  killSpinner
  echo "Heroku CLI could not be found"
  echo "Installing Heroku CLI..."
  wget -qO- https://cli-assets.heroku.com/install.sh | sh
  spinner &
fi

killSpinner

if [ -z "$(heroku auth:whoami)" ]; then
  heroku login -i
  spinner &
  sleep 1
  killSpinner
else
  spinner &
  sleep 1
  HEROKU_EMAIL="$(heroku auth:whoami)"
  printf "Logged in as ${GREEN}$HEROKU_EMAIL${NC}\n"
fi

killSpinner

read -p "Enter Heroku app name: " HEROKU_APP_NAME
spinner &

heroku apps:info $HEROKU_APP_NAME &>/dev/null
if [ $? -ne 0 ]; then
  echo "Heroku app $HEROKU_APP_NAME does not exist."
  exit 1
fi

TMP_DIR=$(mktemp -d)
cp -r . $TMP_DIR
cd $TMP_DIR && git init

if [ -z "$(git config --global user.name)" ]; then
  git config --global user.email $HEROKU_EMAIL
  git config --global user.name $HEROKU_EMAIL
fi

git add .
sed -i '/\.env/d' .gitignore
git add .env
git commit -m "Add .env file"
heroku git:remote -a $HEROKU_APP_NAME
git push heroku master --force
rm -rf $TMP_DIR

killSpinner

printf "\n\nDeployed ${GREEN}$HEROKU_APP_NAME${NC} to Heroku!\n"
printf "Visit https://$HEROKU_APP_NAME.herokuapp.com\n\n"