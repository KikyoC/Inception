FROM alpine

RUN apk add --no-cache vsftpd openrc

EXPOSE 22

RUN ["rc-service", "vsftpd", "start"]
