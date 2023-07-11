FROM php:7.4

RUN mkdir "/root/.ssh"

WORKDIR /app

ENV TZ=Europe/Kyiv
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt update && \
    apt-get install -y git libzip-dev openssh-client
RUN docker-php-ext-install pdo_mysql zip

COPY ./docker/local/php.ini /usr/local/etc/php/php.ini

ENTRYPOINT ["tail"]
CMD ["-f","/dev/null"]


