#!/bin/sh

sed -i "s/"'$DOMAIN'"/$DOMAIN/g" /etc/nginx/http.d/default.conf

if [ -e /etc/nginx/$DOMAIN.pem ]
then
	echo "Certificate already generated"
else
	cd /etc/nginx && mkcert $DOMAIN
fi
exec "$@"
