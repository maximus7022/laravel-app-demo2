FROM php:8.1.23-zts-alpine3.18

WORKDIR /var/www/html/

# copying project to workdir
COPY . .

# updating and installing composer
RUN apk update && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --prefer-dist --no-dev -o && \
    docker-php-ext-install pdo pdo_mysql && \
    docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# generating new project key
RUN cp .env.example .env && \
    php artisan key:generate

EXPOSE 5000
ENTRYPOINT ["php", "artisan", "migrate", "--force"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=5000"]