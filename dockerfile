# Imagem base
FROM php:7.4-apache

# Copiar arquivos do projeto para o diretório de trabalho no contêiner
COPY . /var/www/html

# Alterar as permissões dos arquivos e diretórios
RUN chmod -R 755 /var/www/html
