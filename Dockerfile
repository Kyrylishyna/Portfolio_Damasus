FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install bcmath

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80