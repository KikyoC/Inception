FROM alpine

RUN apk add --no-cache npm git supervisor

WORKDIR uptime-kuma

COPY tools/entrypoint.sh /entrypoint.sh
COPY tools/supervisor.conf /etc/supervisord.conf

RUN chmod +x /entrypoint.sh
RUN mkdir /var/log/kuma

EXPOSE 3001

ENTRYPOINT ["/entrypoint.sh"]

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
