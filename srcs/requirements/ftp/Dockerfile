FROM alpine:latest

RUN apk add --no-cache vsftpd openssl supervisor

RUN openssl req -x509 -nodes -days 7300 \
            -newkey rsa:2048 -keyout /etc/vsftpd/vsftpd.pem -out /etc/vsftpd/vsftpd.pem \
            -subj "/C=FR/O=My company/CN=42.fr"

RUN mkdir -p /home/vsftpd/
RUN mkdir -p /var/log/vsftpd
RUN chown -R ftp:ftp /home/vsftpd/
RUN adduser wordpress ; echo "wordpress:$FTP_PASSWORD" | chpasswd


COPY conf/vsftpd-base.conf /etc/vsftpd/vsftpd.conf
COPY conf/supervisor.conf /etc/supervisord.conf

EXPOSE 20 21 21100-21110

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

