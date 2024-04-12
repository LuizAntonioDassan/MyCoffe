# Imagem base
FROM php:7.4-apache

# Copiar arquivos do projeto para o diretório de trabalho no contêiner
COPY . /var/www/html

