<?php

namespace Revlv\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        if (!$this->app->environment('production')) {
            $this->app->register('Revlv\Providers\DuskServiceProvider');
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
    }
}
