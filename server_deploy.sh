#!/bin/sh
set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --message 'The app is being (quickly!) updated. Please try again in a minute.') || true
# Update codebase
git fetch origin deploy
git reset --hard origin/deploy
#place correct env
cp .env.ci .env
# Install dependencies based on lock file
composer install --no-interaction --prefer-dist --optimize-autoloader
# Clear cache
php artisan optimize
# Reload PHP to update opcache
echo "" | sudo -S service php7.4-fpm reload
# Exit maintenance mode
php artisan up
echo "Application deployed!"
