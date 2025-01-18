# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the local directory contents to the container's /var/www/html directory
COPY ./website/ /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]