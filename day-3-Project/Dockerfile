FROM php:7.0-apache

COPY config/apache2.conf /etc/apache2/
COPY config/000-default.conf /etc/apache2/sites-available/
COPY config/php.ini-development /usr/local/etc/php/

#RUN apt-get install php-mysql
RUN docker-php-ext-install mysqli pdo pdo_mysql

EXPOSE 80

