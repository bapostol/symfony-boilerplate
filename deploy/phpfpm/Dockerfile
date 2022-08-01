FROM php:8.1.8-fpm-alpine3.16

WORKDIR /var/www/html

RUN apk update
RUN apk add git
RUN apk add bash
RUN apk add curl

RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --version=2.3.10 --install-dir=/usr/local/bin --filename=composer
RUN composer --version

RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

EXPOSE 9000

CMD ["php-fpm"]