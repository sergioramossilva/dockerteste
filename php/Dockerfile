FROM php:7.3.12-fpm
RUN docker-php-ext-install mysqli pdo_mysql

WORKDIR /var/www

EXPOSE 9000

CMD [ "php-fpm" ]