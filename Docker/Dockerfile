FROM php:8.3-fpm

RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev curl git unzip \
    && docker-php-ext-install mysqli gd mbstring \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html


