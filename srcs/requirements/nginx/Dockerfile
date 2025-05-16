FROM alpine:3.21.3

RUN apk add --no-cache nginx

EXPOSE 443

COPY default.conf /etc/nginx/http.d/default.conf

RUN mkdir -p /var/log/nginx && chmod -R 777 /var/log/nginx

COPY tools/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
