#!/bin/sh
php artisan optimize:clear
composer update --lock
npm ci --silent
npm run prod --silent
