#!/bin/sh


exec /usr/bin/mariadbd --user=mysql --console --skip-name-resolve --skip-networking=0 "$@"
