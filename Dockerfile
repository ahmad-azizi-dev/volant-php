FROM php:8.1

RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update
RUN apt-get install zip -y
RUN apt-get install git -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer