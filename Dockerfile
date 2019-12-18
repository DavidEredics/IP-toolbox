FROM php:7.4-apache
LABEL Name=ip-toolbox
# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
# Copy php files
COPY src/ /var/www/html/
