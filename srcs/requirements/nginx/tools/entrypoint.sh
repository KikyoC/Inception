#!/bin/sh

# wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.4/mkcert-v1.4.4-linux-amd64 -O mkcert && chmod +x mkcert && mv mkcert /usr/bin && mkcert -install && cd /etc/nginx && mkcert $DOMAIN
wget https://github.com/FiloSottile/mkcert/releases/download/v1.4.4/mkcert-v1.4.4-linux-amd64 -O mkcert && chmod +x mkcert && mv mkcert /usr/bin && mkcert -install && cd /etc/nginx && mkcert $DOMAIN 

sed -i "s/"'$DOMAIN'"/$DOMAIN/g" /etc/nginx/http.d/default.conf

exec "$@"
