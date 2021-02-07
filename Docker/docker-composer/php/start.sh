#!/bin/bash
#创建key
php artisan key:generate
# ----------------------------------------------------------------------
# Create the .env file if it does not exist.
# ----------------------------------------------------------------------
if [[ ! -f "/www/.env" ]] && [[ -f "/www/.env.example" ]];
then
    cp /www/.env.example /www/.env
fi

# ----------------------------------------------------------------------
# Run Composer 执行composer更新
# ----------------------------------------------------------------------
if [[ ! -d "/www/vendor" ]];
then
    cd /www
    composer update
    composer dump-autoload -o
fi