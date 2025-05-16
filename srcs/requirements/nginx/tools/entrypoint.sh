#!/bin/sh

wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.4/mkcert-v1.4.4-linux-amd64 -O mkcert && chmod +x mkcert && mv mkcert /usr/bin && mkcert -install && cd /etc/nginx && mkcert togauthi.42.fr

exec "$@"
