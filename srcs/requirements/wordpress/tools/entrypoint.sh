#!/bin/sh
gomplate < /wp-config.php > /var/www/html/wp-config.php

echo coucou
exec "$@"

#/usr/bin/supervisord -c /etc/supervisord.conf
