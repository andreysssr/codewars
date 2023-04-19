FROM php:8.2.3-cli-alpine

RUN apk add --update --no-cache zip unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

WORKDIR /app
