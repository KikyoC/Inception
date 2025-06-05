FROM alpine

RUN apk add redis gomplate

EXPOSE 6379

COPY tools/entrypoint.sh /entrypoint.sh
COPY conf/redis.conf /etc/redis.conf

RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

CMD ["redis-server", "/etc/redis.conf", "--protected-mode", "no"]
