# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# Instal dependensi sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl

# Instal ekstensi PHP untuk Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Aktifkan mod_rewrite Apache agar routing Laravel jalan
RUN a2enmod rewrite

# Set folder kerja
WORKDIR /var/www/html

# Salin semua file project ke dalam container
COPY . .

# Instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Atur izin folder (sangat penting untuk Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ubah document root Apache ke folder /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Jalankan Apache
CMD ["apache2-foreground"]