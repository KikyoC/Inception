#!/bin/sh
gomplate < /wp-config.php > /var/www/html/wp-config.php

exec "$@"
