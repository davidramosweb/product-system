FROM php:7.4.20-fpm-alpine

LABEL Maintainer="David Ramos <info@davidramosweb.com>"

RUN apk update && apk add --no-cache --virtual .build-deps \
    g++ make autoconf yaml-dev \
    openssl openssl-dev

RUN apk add --no-cache libpng libpng-dev libjpeg-turbo-dev libwebp-dev zlib-dev libxpm-dev gd \
    libzip-dev zip

RUN pecl install mongodb && docker-php-ext-enable mongodb

RUN docker-php-ext-install gd

RUN docker-php-ext-install zip

RUN apk del --purge .build-deps

COPY --from=composer /usr/bin/composer /usr/bin/composer

USER www-data

WORKDIR /var/www/app

COPY --chown=www-data:www-data app /var/www/app

RUN composer install --no-scripts -n

CMD ["php-fpm", "-F"]
