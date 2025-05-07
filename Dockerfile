FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo_pgsql

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy your application files to the container
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html
