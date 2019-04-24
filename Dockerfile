FROM php:7.2.17-zts-stretch

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN apt update && apt install unzip -y

RUN printf "\n" | pecl install protobuf-3.7.1 \
    && docker-php-ext-enable protobuf
    
RUN mkdir /tmp/src \
    && curl -sSL https://github.com/krakjoe/pthreads/archive/df26d45b53f8e9e247f39bb5952e8c6ac88331a8.zip -o /tmp/src/pthreads.zip \    
    && cd /tmp/src \
    && unzip pthreads.zip \
    && mv pthreads-df26d45b53f8e9e247f39bb5952e8c6ac88331a8 pthreads \
    && docker-php-ext-install /tmp/src/pthreads \
    && rm -Rf /tmp/src


COPY ./ /app
WORKDIR /app

ENTRYPOINT ["sh", "run.sh"]