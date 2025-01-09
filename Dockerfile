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
    && docker-php-ext-install zip bcmath

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

# Instala las dependencias de PHP y Node.js
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Limpia los assets y genera la clave de la aplicación
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache
RUN php artisan key:generate

# Expone el puerto de PHP-FPM
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
