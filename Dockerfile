FROM docker.io/library/php:8-apache
WORKDIR /var/www/html

RUN apt-get update \
 && apt-get install -y libpq-dev \
 && rm -rf /var/lib/apt/lists/* \
 && docker-php-ext-install pdo pdo_pgsql pgsql

COPY --chown=www-data:www-data . .
