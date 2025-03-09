# Usando a imagem base do PHP com Apache
FROM php:8.3-apache

# Instalando extensões PHP necessárias para o MySQL
RUN apt-get update \
    && apt-get install -y unzip \
    && docker-php-ext-install pdo pdo_mysql

# Instalando Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiando o arquivo de configuração do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Ativando mod_rewrite do Apache
RUN a2enmod rewrite

# Definindo diretório de trabalho
WORKDIR /var/www/html

# Copiando os arquivos do Laravel para dentro do container
COPY . .

# Instalando dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Garantindo permissões corretas para storage e cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expondo a porta 80 (Apache)
EXPOSE 80

# Iniciando o Apache
CMD ["apache2-foreground"]