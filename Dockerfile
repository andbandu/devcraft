FROM php:8.4-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libpq-dev \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files first so artisan is present for composer post-autoload-dump scripts
COPY . .

# Install PHP dependencies without dev packages
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Ensure storage directories exist and have proper permissions
RUN mkdir -p storage/framework/sessions storage/framework/views storage/framework/cache storage/logs bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Set up entrypoint script for automatic migrations and seeding
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN sed -i 's/\r$//' /usr/local/bin/docker-entrypoint.sh && chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose default port
EXPOSE 10000

# Run entrypoint script and start server using Render's PORT environment variable
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
CMD ["sh", "-c", "php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]