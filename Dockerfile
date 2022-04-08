FROM php:8.1.2-apache

#ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
#RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
#RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 1/ Download wp-cli
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# 2/ Make it executable
RUN chmod +x wp-cli.phar
# 3/ Move it into /usr/local/bin/wp
RUN sudo mv wp-cli.phar /usr/local/bin/wp
# Check whether the installation worked
RUN wp --info

RUN docker-php-ext-install mysqli pdo pdo_mysql \
    && a2enmod rewrite

#RUN apt-get update -y
#RUN apt-get install libyaml-dev -y
#RUN pecl install yaml && echo "extension=yaml.so" > /usr/local/etc/php/conf.d/ext-yaml.ini && docker-php-ext-enable yaml