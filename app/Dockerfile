# Utilise l'image officielle PHP avec Apache
FROM php:8.3-apache

# Installation des extensions système nécessaires
RUN apt-get update && apt-get install -y  git  curl unzip  zip libzip-dev  zlib1g-dev  libonig-dev  && docker-php-ext-install zip mysqli pdo pdo_mysql

# Installation de Composer (propre et rapide)
RUN curl -sS https://getcomposer.org/installer | php  && mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

COPY . .
# Active le module Apache mod_rewrite (utile pour Laravel, Symfony, etc.)
RUN a2enmod rewrite
EXPOSE 80
# Copie les fichiers du dossier php/ dans le dossier web du conteneur
# COPY . .

# RUN composer install --no-interaction --optimize-autoloader || cat composer.lock || echo "composer install failed"
# COPY . .
# # Définir le répertoire de travail


