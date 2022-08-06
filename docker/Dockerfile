FROM php:7.2-apache
COPY src/ /var/www/html/
WORKDIR /var/www/html

ENV RESPONSE = 'Hello World!'
RUN chmod 777 /var/www/html/messages/env.txt

# docker stop $(docker ps -a -q --filter="name=my-running-app") && docker build -t my-php-app . && docker run -dit --rm --name my-running-app  -p 8081:80 my-php-app
# docker build -t my-php-app .
# docker run -dit --rm --name my-running-app  -p 8081:80 my-php-app
# docker stop $(docker ps -a -q --filter="name=my-running-app") && docker build -t my-php-app .docker/Dockerfile  && docker run -dit --rm --name my-running-app  -p 8081:80 my-php-app