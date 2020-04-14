# REVLV

[![pipeline status](https://gitlab.revlv.net/revlv/revlv.com/badges/master/pipeline.svg)](https://gitlab.revlv.net/revlv/revlv.com/commits/master)

## Requirements

* php7.4
* nodejs
* php7.4-intl
* php7.4-xml
* php7.4-zip
* php7.4-mbstring
* php7.4-curl

## Production Configuration

    git clone git@gitlab.revlv.net:revlv/relvv.com.git
    cp .env.example .env
    composer install
    npm ci
    npm run dev && npm run prod
    php artisan serve
    php artisan sitemap:generate

You can also run the **compile.sh** for your convenience

## Running the test

    php artisan test
    php artisan dusk:chrome-driver 80
    php artisan dusk

## Running CS Fixer

    composer csfix

## Site Keys

The site key in the `.env.example` are for testing case only, this is not the actual key for live environment

## Publishing changes to live

This repository is using CI/CD (Continuous Integration and Development) to push changes to revlv.com website a release should be issued

    git flow release start 1.x.x 
    git flow release finish 1.x.x
    git push origin master develop --tags

Make sure you list all the changes for version `1.x.x` this ensures developer know what changes has been made to the project.

The runner should be the one to update all the dependencies and run the sitemap generation