FROM php:8.1-cli

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html

COPY . .

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000"]
