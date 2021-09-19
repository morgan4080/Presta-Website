#!/bin/sh

sudo find /usr/share/laravel/ -type f -exec chmod 644 {} \;

sudo find /usr/share/laravel/ -type d -exec chmod 755 {} \;

sudo chown -R www-data:www-data /usr/share/laravel/

sudo chgrp -R www-data storage bootstrap/cache

sudo chmod -R ug+rwx storage bootstrap/cache

set -e

echo "Deploying application ..."

# Enter maintenance mode
(php artisan down --render="errors::503" || true
# Update codebase
git fetch origin deploy

git reset --hard origin/deploy
#place correct env
cp .env.ci .env
# Install dependencies based on lock file
sudo composer install --no-interaction --prefer-dist --optimize-autoloader
# Clear cache
php artisan optimize
# Reload PHP to update opcache
echo "" | sudo -S service php7.4-fpm reload
# Exit maintenance mode
php artisan up
# Link Storage
php artisan storage:link

echo "Application deployed!"
