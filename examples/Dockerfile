FROM php:7.4-cli-alpine

RUN apk add git \
	file \
	re2c \
	autoconf \
	make \
	zlib \
	zlib-dev \
	g++ \
	&& pecl install grpc \
	&& docker-php-ext-enable grpc \
	&& pecl install protobuf \
	&& docker-php-ext-enable protobuf

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

WORKDIR /app

ENTRYPOINT ["/entrypoint.sh"]
