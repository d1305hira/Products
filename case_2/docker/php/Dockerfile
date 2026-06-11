FROM php:8.1-fpm

# 必要な拡張
RUN apt-get update && apt-get install -y \
    zip unzip git libicu-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql intl pcntl \
    && pecl install redis \
    && docker-php-ext-enable redis

# Composer インストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
