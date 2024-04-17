FROM phpdockerio/php:8.3-fpm
COPY  public/index.php /public 
WORKDIR /public
ENTRYPOINT ["php","-S"]
RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php8.3-pgsql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
