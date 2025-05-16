FROM alpine:3.21.3

RUN apk add --no-cache openrc mariadb mariadb-client mariadb-openrc envsubst && mkdir -p /var/lib/mysql && mkdir -p /run/mysqld && chown -R mysql:mysql /run/mysqld /var/lib/mysql

#RUN mysql_install_db --user=mysql -basedir=/usr --datadir=/var/lib/mysql

EXPOSE 3306

COPY tools/entrypoint.sh /entrypoint.sh
#COPY tools/init.sql /etc/my.cnf.d/init.sql.template
COPY tools/init.sql /docker-entrypoint-initdb.d/

RUN chmod +x /entrypoint.sh

CMD ["/entrypoint.sh"]
