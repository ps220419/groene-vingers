# Use an official PHP runtime as a parent image
FROM php:8.2-fpm

# Set the working directory to /var/www
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Install composer
RUN apt-get install curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the rest of the application code
COPY . .

# Install PHP dependencies
RUN composer install

# Expose port 9000 and start PHP-FPM server
EXPOSE 8000
CMD ["php","artisan","serve","--host=0.0.0.0"]
