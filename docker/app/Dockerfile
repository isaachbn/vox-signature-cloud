FROM php:7.2-fpm

WORKDIR /var/www

RUN apt-get update
RUN apt-get install -y git
RUN apt-get install -y locate
RUN apt-get install -y vim
RUN apt-get install -y wget
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y libjpeg-dev
RUN apt-get install -y unzip
RUN apt-get install -y libpng-dev
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y mcrypt
RUN apt-get install -y libpq-dev
RUN apt-get install -y libfontconfig1
RUN apt-get install -y libxrender1

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
