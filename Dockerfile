FROM php:apache

COPY ./website /var/www/html

EXPOSE 80/tcp
