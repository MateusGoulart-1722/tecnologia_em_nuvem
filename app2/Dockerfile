# Usa a imagem oficial do PHP com apache
FROM php:8.2-apache

# Porta usada pela Render
ENV PORT=8080

# Ativa o mod_rewrite para URL's amigaveis
RUN a2enmod rewrite

# Copia o código da aplicação
COPY . /var/www/html

# corrige permissões 
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Corrige configuração da ports
RUN sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf && \
    sed -i "s/<VirtualHost \*:80>/<VirtualHost\ *:${PORT}>/ " /etc/apache2/sites-avaliable/000-default.conf

# Permite ao difetoria
RUN echo'<Directory /var/ww/html>' >> /etc/apache2/apache2.conf && \
    echo'     Options Indexes FollowSymlnks' >> /etc/apache2/apache2.conf && \
    echo'     AllowOverride All' >> /etc/apache2/apache2.conf && \
    echo'     Require all granted' >> /etc/apache2/apache2.conf && \
    echo '</Directory>' >> /etc/apache2/apache2.conf && \

    EXPOSE ${PORT}

    CMD ["apache2-foreground"]
