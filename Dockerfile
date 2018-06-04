FROM wordpress:4.9.5-php5.6-apache
COPY . /var/www/html

ARG env_1

ENV env_1=$env_1

RUN export REMOTE_ADDR=1.1.1.1
