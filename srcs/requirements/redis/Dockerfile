FROM alpine:3.22.0

RUN apk add redis gomplate

EXPOSE 6379

COPY tools/entrypoint.sh /entrypoint.sh
COPY conf/redis.conf /redis.conf

RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

#CMD ["redis-server", "/etc/redis.conf", "--protected-mode", "no"]
CMD ["redis-server", "/etc/redis.conf"]
