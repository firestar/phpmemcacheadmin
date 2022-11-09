FROM cikupin/php-apache2

RUN apt update && apt install -y git

RUN git clone https://github.com/firestar/phpmemcacheadmin.git

RUN mv phpmemcacheadmin/* /var/www/html/

RUN ls -la /var/www/html/*

