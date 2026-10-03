# FrankenPHP в classic-режиме (без worker mode): Caddy + PHP в одном контейнере,
# правки PHP применяются сразу, без рестарта (в отличие от worker-режима).
FROM dunglas/frankenphp:1-php8.4

# Расширения для Laravel 13 + очередей + Redis
RUN install-php-extensions pdo_mysql intl zip pcntl sockets bcmath opcache redis

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Свой Caddyfile: слушаем :8080 (непривилегированный порт), php_server = classic mode
COPY docker/Caddyfile /etc/frankenphp/Caddyfile

ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /app
