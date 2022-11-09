FROM cikupin/php-apache2

COPY . /var/www/html/

RUN ls -la /var/www/html/*
