FROM php:8.5-cli-alpine

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/
RUN ln -s /var/www/html /var/www/html/unity-2d-config-util

WORKDIR /var/www/html
EXPOSE 80

CMD ["php", "-S", "0.0.0.0:80"]
