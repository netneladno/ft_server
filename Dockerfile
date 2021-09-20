FROM debian:buster
RUN apt update
RUN apt -y upgrade
RUN apt -y install wget nano nginx php-fpm php-mysql mariadb-server
RUN chmod 755 /var/* 
COPY /srcs/default /etc/nginx/sites-available/
RUN openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=RU/ST=Kazan/L=Kazan/O=42Kazan/OU=Dmitry/CN=localhost" -keyout /etc/ssl/cert.key -out /etc/ssl/bundle.crt
RUN chmod 755 /etc/ssl/cert.key /etc/ssl/bundle.crt
RUN wget https://wordpress.org/wordpress-5.6.tar.gz
RUN tar -xzvf wordpress-5.6.tar.gz
RUN mv wordpress /var/www/html/
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.7/phpMyAdmin-4.9.7-all-languages.tar.gz
RUN tar -xzvf phpMyAdmin-4.9.7-all-languages.tar.gz
RUN mv phpMyAdmin-4.9.7-all-languages phpmyadmin
RUN mv phpmyadmin /var/www/html/ 
RUN chmod 755 /var/www/html/*
COPY srcs/hello.sh /
COPY srcs/wp-config.php /var/www/html/wordpress/
RUN chmod 755 hello.sh
EXPOSE 80 443
CMD sh hello.sh