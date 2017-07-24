FROM sc
WORKDIR /var/www/localhost
RUN addgroup -S mnch && adduser -S -g mnch mnch -u 1000
USER mnch
RUN composer install

