<?php

namespace App\Providers;
//
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // if problem--- To specifying Own property 250 defaultStringLength ---
        Builder::defaultStringLength(250);
        // or Schema::defaultStringLength(191);

    }
}