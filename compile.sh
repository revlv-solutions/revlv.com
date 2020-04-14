#!/bin/sh
composer install --no-dev
php artisan optimize:clear
npm ci --silent
npm run prod --silent
php artisan optimize
php artisan sitemap:generate