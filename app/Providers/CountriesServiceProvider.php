<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CountriesService;

class CountriesServiceProvider extends ServiceProvider
{
    public function register()
    {
        /**
         * Register services. 
         *
         * @return void
         */
        
        $this->app->bind('App\Services\CountriesService');    
        $this->app->bind('App\Repository\CountriesRepositoryInterface','App\Repository\CountriesRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
