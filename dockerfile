# Specifichiamo la versione esatta richiesta dall'università
FROM php:7.4.16-apache

# Installiamo le estensioni necessarie (aggiunto zlib e libpng se dovessi gestire immagini)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Installa Xdebug (versione compatibile con PHP 7.4)
RUN pecl install xdebug-3.1.6 && docker-php-ext-enable xdebug

# Configurazione Xdebug 3
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.log=/var/www/html/Logs/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.log_level=7" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Abilitiamo il modulo rewrite di Apache
RUN a2enmod rewrite

# MODIFICA FONDAMENTALE: Cambiamo la DocumentRoot di Apache su /public
# Senza questo, dovresti scrivere localhost:8080/public per vedere il sito
ENV APACHE_DOCUMENT_ROOT /var/www/html/Public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/php!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Impostiamo i permessi
RUN chown -R www-data:www-data /var/www/html

# Opzionale: installiamo Composer direttamente nel container
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
