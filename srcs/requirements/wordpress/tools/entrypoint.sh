#!/bin/sh
gomplate < /wp-config.php > /var/www/html/wp-config.php

mv /usr/bin/php84 /usr/bin/php

wp core install --url="http://$DOMAIN" --title="Joy" --admin_user="$WORDPRESS_USER" --admin_password="$WORDPRESS_PASS" --admin_email="$WORDPRESS_MAIL" --locale=en_US

wp user create cmorel random@42.fr --role=subscriber --user_pass="$CMOREL"

wp plugin install redis-cache --activate
wp redis enable

exec "$@"
