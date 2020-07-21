FROM php:7.4.8-zts-alpine3.12

RUN docker-php-ext-install pdo pdo_mysql \
    && curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

EXPOSE 8000

ENTRYPOINT [ "./entrypoint.sh" ]
