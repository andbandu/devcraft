#!/bin/sh
set -e

echo "==> Preparing application environment..."

# Ensure SQLite database file exists if sqlite is in use
if [ "${DB_CONNECTION}" = "sqlite" ] || [ -z "${DB_CONNECTION}" ]; then
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
    chown -R www-data:www-data /var/www/html/database
fi

# Run database migrations to set tables on live environment
echo "==> Running database migrations..."
php artisan migrate --force --no-interaction

# Seed mock data into the live environment
echo "==> Seeding database mock data..."
php artisan db:seed --force --no-interaction

# Clear stale caches
echo "==> Clearing cache..."
php artisan config:clear
php artisan cache:clear

# Execute CMD / start server
exec "$@"
