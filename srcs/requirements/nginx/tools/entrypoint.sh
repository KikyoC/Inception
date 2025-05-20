#!/bin/sh

sed -i "s/"'$DOMAIN'"/$DOMAIN/g" /etc/nginx/http.d/default.conf

if [ -e /etc/nginx/$DOMAIN.pem ]
then
	echo "here"
else
	cd /etc/nginx && mkcert $DOMAIN
fi
exec "$@"
