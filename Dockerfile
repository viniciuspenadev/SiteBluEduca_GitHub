FROM php:8.2-apache

# Enable mod_rewrite for .htaccess
RUN a2enmod rewrite

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Copy application files to the container
COPY . /var/www/html/

# Set permissions for the Apache user
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
