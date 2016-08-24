FROM redis:latest

MAINTAINER Mahmoud Zalt <mahmoud@zalt.me>

#COPY redis.conf /usr/local/etc/redis/redis.conf

VOLUME /data

EXPOSE 6379
CMD ["sysctl -w net.core.somaxconn=65535"]
CMD ["redis-server"]
