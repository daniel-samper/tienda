FROM php:8.4-apache

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Instalar extensiones MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf