# Usa una imagen base de PHP con extensiones requeridas para Laravel
FROM php:8.2-fpm

# Instala herramientas necesarias, extensiones de PHP y Node.js
RUN apt-get update && apt-get install -y \
    unzip \
    libzip-dev \
    libpng-dev \
    git \
    curl \
    gnupg \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install zip bcmath pdo_mysql

# Instala Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm@11.0.0

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos del proyecto al contenedor
COPY . .

# Configura permisos para Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Instala las dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Crea el archivo .env si no existe
RUN cp .env.example .env || true

# Genera la clave de la aplicación
RUN php artisan key:generate

# Limpia los caches de Laravel
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# Expone el puerto para PHP-FPM
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
