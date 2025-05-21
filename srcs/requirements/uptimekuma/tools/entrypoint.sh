#!/bin/sh

if [ -d /uptime-kuma/core ]
then
	cd core
	echo "Uptime kuma already downloaded"
else
	git clone https://github.com/louislam/uptime-kuma.git core && cd core && npm run setup
	echo "Uptime kuma installed !"
fi

exec "$@"
