FROM php:7.3-fpm
RUN apk update; \
    apk upgrade;
RUN  php-fpm docker-php-ext-install mysqli
RUN php-fpm docker-php-ext-enable mysqli