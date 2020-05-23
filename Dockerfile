FROM php:7.4-apache

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/
RUN ln -s /var/www/html /var/www/html/unity-2d-config-util
