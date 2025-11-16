FROM alpine:latest
RUN apk add --no-cache php php-fpm php-session php-mysqli php-json php-phar php-openssl php-mbstring php-zip
WORKDIR /var/www/html
COPY src/ .
