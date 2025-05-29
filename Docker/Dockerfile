FROM ubuntu:22.04

ENV PHP_VERSION=8.3
ENV DEBIAN_FRONTEND=noninteractive

RUN sed -i 's|http://archive.ubuntu.com|https://archive.ubuntu.com|g' /etc/apt/sources.list && \
    rm -rf /var/lib/apt/lists/* && \
    apt-get update --fix-missing && \
    apt-get install -y --no-install-recommends \
      ca-certificates \
      gnupg \
      software-properties-common && \
    add-apt-repository -y ppa:ondrej/php && \
    apt-get update --fix-missing

RUN apt-get install -y --no-install-recommends \
    nginx \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-common \
    php${PHP_VERSION}-mysql \
    php${PHP_VERSION}-gd \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-curl && \
    rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/www/html && \
    sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/php/${PHP_VERSION}/fpm/php.ini && \
    mkdir -p /run/php

COPY ./src/ /var/www/html/
COPY nginx.conf /etc/nginx/sites-available/default

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

EXPOSE 80

CMD ["sh", "-c", "service php${PHP_VERSION}-fpm start && nginx -g 'daemon off;'"]
