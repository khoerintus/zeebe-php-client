FROM alpine:edge

RUN apk add protobuf protobuf-dev grpc php7 php7-openssl php7-mbstring php7-json php7-phar

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN composer global require "protobuf-php/protobuf-plugin"
