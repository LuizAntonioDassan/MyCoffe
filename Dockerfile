FROM phpdockerio/php:8.3-fpm

WORKDIR /var/www/html

COPY . .

EXPOSE 81

CMD ["php", "-S", "0.0.0.0:81", "public/index.php"]

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.3-pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
