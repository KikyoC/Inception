FROM alpine:3.22.0

RUN apk add --no-cache nginx envsubst

EXPOSE 443

COPY conf/default.conf /etc/nginx/http.d/default.conf
COPY conf/adminer.conf /etc/nginx/http.d/adminer.conf
COPY conf/kuma.conf /etc/nginx/http.d/kuma.conf
COPY conf/click.conf /etc/nginx/http.d/click.conf

RUN mkdir -p /var/log/nginx && chown -R nginx:nginx /var/log/nginx

COPY tools/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.4/mkcert-v1.4.4-linux-amd64 -O mkcert && chmod +x mkcert && mv mkcert /usr/bin && mkcert -install

ENTRYPOINT ["/entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
