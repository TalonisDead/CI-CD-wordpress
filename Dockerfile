# Sử dụng image PHP với Apache
FROM php:8.2-apache

# Cài extension PHP cần thiết
RUN docker-php-ext-install mysqli

# Kích hoạt mod_rewrite cho permalink WordPress
RUN a2enmod rewrite

# Copy mã nguồn WordPress (giả định bạn đã có sẵn trong thư mục)
COPY . /var/www/html/

# Phân quyền cho thư mục web
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Mở cổng 80
EXPOSE 80
