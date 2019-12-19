FROM php:7.4-apache
LABEL Name=ip-toolbox_dev
# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
# Enable url rewrite to hide .php extension
RUN a2enmod rewrite
