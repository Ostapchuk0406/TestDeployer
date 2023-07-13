FROM php:7.4-fpm

WORKDIR /app

ENV TZ=Europe/Kyiv
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
  
COPY ./docker/production/php.ini /usr/local/etc/php/php.ini

RUN apt update && \
    apt-get install -y git libzip-dev unzip openssh-server
RUN docker-php-ext-install pdo_mysql zip

RUN mkdir /var/run/sshd
RUN echo 'root:Ostapchuk0406' | chpasswd
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN sed -i 's@session\s*required\s*pam_loginuid.so@session optional pam_loginuid.so@g' /etc/pam.d/sshd

EXPOSE 22

CMD ["/usr/sbin/sshd","-D"]
