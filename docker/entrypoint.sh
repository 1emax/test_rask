#!/bin/sh

# Выполнение миграций
php artisan migrate

# Кеширование конфигурации и очистка маршрутов
php artisan config:cache
php artisan route:clear

# Запуск Laravel сервера
php artisan serve --host=0.0.0.0 --port=8000
