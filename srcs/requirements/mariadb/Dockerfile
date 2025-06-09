FROM alpine:3.22.0

RUN apk add --no-cache openrc mariadb mariadb-client mariadb-openrc envsubst && mkdir -p /var/lib/mysql && mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld /var/lib/mysql

EXPOSE 3306

COPY tools/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]
