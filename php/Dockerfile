FROM php:8.1.18-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

COPY index.php index.php
RUN chown -R www-data:www-data /var/www && chmod -R o-wx /var/www

EXPOSE 7077