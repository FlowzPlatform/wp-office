FROM wordpress:4.9.5-php5.6-apache
COPY . /var/www/html

RUN sed 's/.*define('DB_NAME', '');*/define('DB_NAME', getenv('REMOTE_ADDR') );/'  -i 



