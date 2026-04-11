#!/bin/bash
set -e

# Cache configuration
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Link storage
php artisan storage:link --force

# Wait for DB connection if using MySQL
if [ "$DB_CONNECTION" = "mysql" ]; then
    echo "Waiting for MySQL to be ready..."
    max_tries=30
    count=0
    until php -r "try { new PDO('mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_DATABASE', '$DB_USERNAME', '$DB_PASSWORD'); } catch (Exception \$e) { exit(1); }" > /dev/null 2>&1; do
        sleep 2
        count=$((count + 1))
        if [ $count -gt $max_tries ]; then
            echo "Error: MySQL not ready after 60 seconds."
            exit 1
        fi
    done
    echo "MySQL is ready!"
fi

# Run migrations
echo "Running migrations..."
php artisan migrate --force --no-interaction

# Set the correct port for Render
PORT=${PORT:-80}
sed -ri -e "s!80!$PORT!g" /etc/apache2/ports.conf
sed -ri -e "s!:80!:$PORT!g" /etc/apache2/sites-available/*.conf

# Execute CMD from Dockerfile
exec "$@"
