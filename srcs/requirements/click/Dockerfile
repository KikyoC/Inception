FROM alpine

RUN apk add --no-cache git nodejs supervisor npm

RUN git clone https://github.com/KikyoC/InceptionClicker.git core

RUN chown nobody /var/log/

COPY tools/supervisor.conf /etc/supervisord.conf

WORKDIR /core

RUN npm install && npm run build

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
