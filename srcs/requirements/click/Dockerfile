FROM alpine:3.22.0

RUN apk add --no-cache git nodejs supervisor npm

RUN git clone https://github.com/KikyoC/InceptionClicker.git core

RUN chown nobody /var/log/

COPY conf/supervisor.conf /etc/supervisord.conf

WORKDIR /core

RUN npm install && npm run build

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
