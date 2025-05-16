FROM alpine:3.21.3

RUN apk add --no-cache \
    php84 \
    php84-fpm \
    php84-mysqli \
    php84-curl \
    php84-soap \
    php84-mbstring \
    php84-json \
    php84-opcache \
    php84-gd \
    php84-xml \
    php84-zlib \
    php84-session \
    php84-dom \
    php84-fileinfo \
    php84-tokenizer \
    php84-simplexml \
    php84-intl \
    php84-mbstring \
    php84-zip \
    php84-imap \
    curl \
    tar \
    supervisor

RUN addgroup -g 1000 www && \
    adduser -D -u 1000 -G www -s /bin/sh www

WORKDIR /var/www/html
RUN curl -o wordpress.tar.gz https://wordpress.org/latest.tar.gz && \
    tar -xzf wordpress.tar.gz && \
    rm wordpress.tar.gz && \
    mv wordpress/* . && \
    rmdir wordpress && \
    chown -R www:www /var/www

RUN mkdir -p /run/php && \
    sed -i 's|^user = .*|user = www|' /etc/php84/php-fpm.d/www.conf && \
    sed -i 's|^group = .*|group = www|' /etc/php84/php-fpm.d/www.conf && \
    sed -i 's|^listen = .*|listen = 9000|' /etc/php84/php-fpm.d/www.conf && \
    sed -i 's|^;clear_env = no|clear_env = no|' /etc/php84/php-fpm.d/www.conf

COPY supervisord.conf /etc/supervisord.conf

EXPOSE 9000

RUN chmod -R 777 /var/log/php84
RUN chmod -R 777 /var/www/html

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
