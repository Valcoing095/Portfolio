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

# Copia el archivo .env de ejemplo y desactiva la base de datos
RUN cp .env.example .env && sed -i 's/DB_CONNECTION=mysql/DB_CONNECTION=sqlite/' .env && \
    sed -i 's/DB_DATABASE=laravel/DB_DATABASE=:memory:/' .env

# Genera la clave de la aplicación
RUN php artisan key:generate

# Limpia los assets
RUN php artisan config:clear && php artisan cache:clear && php artisan view:clear

# Expone el puerto 8080
EXPOSE 8080

# Comando para iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
