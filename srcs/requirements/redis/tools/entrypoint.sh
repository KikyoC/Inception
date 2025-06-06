#!/bin/sh

gomplate < /redis.conf > /etc/redis.conf

exec "$@"
