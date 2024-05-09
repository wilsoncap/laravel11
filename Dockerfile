# Utiliza la imagen base de PHP versión 8.2 para la línea de comandos.
FROM php:8.2-apache

# Establece el directorio de trabajo dentro del contenedor en '/var/www'.
WORKDIR /var/www/html

# Copia los archivos 'composer.json' y 'composer.lock' desde el directorio local al directorio de trabajo en el contenedor.
COPY composer.json composer.lock ./

# Descarga e instala Composer dentro del contenedor.
RUN curl -sS https://getcomposer.org/installer | php
RUN rm /etc/apache2/sites-enabled/000-default.conf
COPY ./000-default.conf /etc/apache2/sites-enabled/

# Copia el resto de los archivos del directorio local al directorio de trabajo en el contenedor.
COPY . .

# Expone el puerto 80 del contenedor para que sea accesible desde el host.
EXPOSE 80

# Ejecuta el comando "php artisan serve" cuando se inicie el contenedor.
#CMD ["php", "artisan", "serve"]
CMD ["apache2ctl", "-D", "FOREGROUND"]


