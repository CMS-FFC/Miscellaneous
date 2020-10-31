FROM wordpress:5.4
COPY . /var/www/html
COPY misc /var/www/html
EXPOSE 80
