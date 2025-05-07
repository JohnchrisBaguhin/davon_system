# Use an official PHP image with Apache
FROM php:8.1-apache

# Copy app files into the Apache directory
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
