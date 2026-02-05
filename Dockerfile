# --- Stage 1: Build Assets (Node.js) ---
FROM node:22-alpine AS builder

WORKDIR /app

# Copy package files and install dependencies
COPY package*.json ./
RUN npm ci

# Copy source files for Tailwind scanning
COPY . .

# Build Tailwind CSS
RUN npm run build

# --- Stage 2: Production Image (PHP) ---
FROM php:8.2-apache

# Enable mod_rewrite for .htaccess
RUN a2enmod rewrite

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# custom php settings (optional, good practice)
# RUN echo "memory_limit=256M" > /usr/local/etc/php/conf.d/memory-limit.ini

# Copy application files (excluding those in .dockerignore)
COPY . /var/www/html/

# Copy built assets from builder stage
COPY --from=builder /app/assets/css/styles.css /var/www/html/assets/css/styles.css

# Set permissions for the Apache user
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
