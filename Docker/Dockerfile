# Используем официальный образ Ubuntu LTS
FROM ubuntu:22.04

# Устанавливаем переменные окружения
ENV PHP_VERSION=8.3
ENV DEBIAN_FRONTEND=noninteractive

# 1. Добавляем репозиторий PHP
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
    ca-certificates \
    gnupg \
    software-properties-common \
    && \
    add-apt-repository -y ppa:ondrej/php && \
    apt-get update

# 2. Устанавливаем Nginx, PHP и зависимости
RUN apt-get install -y --no-install-recommends \
    nginx \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-common \
    php${PHP_VERSION}-mysql \
    php${PHP_VERSION}-gd \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-curl \
    && rm -rf /var/lib/apt/lists/*

# 3. Настраиваем Nginx и PHP
RUN mkdir -p /var/www/html && \
    # Настраиваем PHP-FPM
    sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/php/${PHP_VERSION}/fpm/php.ini && \
    # Создаем sock-файл для PHP-FPM
    mkdir -p /run/php

# 4. Копируем файлы сайта
COPY ./src/ /var/www/html/
COPY nginx.conf /etc/nginx/sites-available/default

# 5. Настраиваем права
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# 6. Открываем порт 80
EXPOSE 80

# 7. Запускаем сервисы (исправленный CMD в JSON-формате)
CMD ["sh", "-c", "service php${PHP_VERSION}-fpm start && nginx -g 'daemon off;'"]
