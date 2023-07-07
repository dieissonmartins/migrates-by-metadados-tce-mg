FROM php:8.1-fpm-alpine

LABEL maintainer="Dieisson <dieisson.martins.santos@gmail.com>"

RUN apk update
RUN apk add wget

RUN apk add --no-cache --virtual .phpize_deps $PHPIZE_DEPS

# Install system dependencies
RUN apk add git
RUN apk add zip
RUN apk add unzip
RUN apk add curl
RUN apk add procps
RUN apk add net-tools
RUN apk add nginx
RUN apk add libpng-dev
RUN apk add libmcrypt-dev
RUN apk add libzip-dev
RUN apk add libxml2-dev
RUN apk add libaio-dev
RUN apk add libpq-dev
RUN apk add libsodium-dev

RUN docker-php-ext-install pdo pdo_mysql mysqli zip exif

RUN docker-php-ext-install bcmath

RUN echo "@v3.4 http://nl.alpinelinux.org/alpine/v3.4/main" >> /etc/apk/repositories && \
    apk update

RUN docker-php-ext-install gd
RUN apk add jq git

RUN ln -s /var/www/desif/artisan /usr/local/bin/artisan

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pcntl

RUN apk add openjdk8
RUN apk add ttf-dejavu

RUN apk add --update npm

RUN addgroup -g 1000 -S www
RUN adduser -u 1000 -S www -G www

RUN mkdir -p /home/www/.composer
RUN chown -R www:www /home/www

RUN composer self-update

RUN apk del .phpize_deps
