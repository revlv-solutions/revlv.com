# REVLV

[![pipeline status](https://gitlab.revlv.net/revlv/revlv.com/badges/master/pipeline.svg)](https://gitlab.revlv.net/revlv/revlv.com/commits/master)

## Requirements

* php7.4
* nodejs
* redis-server
* php7.4-imagick
* php7.4-bcmath
* php7.4-intl
* php7.4-gd
* php7.4-xml
* php7.4-zip
* php7.4-mbstring
* php7.4-pdo
* php7.4-mysql
* php7.4-curl

## Production Configuration

    git clone git@gitlab.revlv.net:revlv/relvv.com.git
    cp .env.example .env
    composer install
    npm ci
    npm run dev && npm run prod
    php artisan serve

## Running the test

    php artisan test
    php artisan dusk:chrome-driver 80
    php artisan dusk

## Running CS Fixer

    composer csfix

## Site Keys

The site key in the `.env.example` are for testing case only, this is not the actual key for live environment