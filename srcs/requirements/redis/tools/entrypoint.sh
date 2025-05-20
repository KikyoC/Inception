#!/bin/sh

gomplate < /etc/redis.conf > /etc/redis.conf

exec "$@"
