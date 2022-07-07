<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        /**
         * Bind Cities Module
         **/
        
        $this->app->bind('App\Repository\CitiesRepositoryInterface','App\Repository\CitiesRepository');
        $this->app->bind('App\Services\CountriesService');    
        $this->app->bind('App\Repository\CountriesRepositoryInterface','App\Repository\CountriesRepository');

        $this->app->bind('App\Services\StatesService');    
        $this->app->bind('App\Repository\StatesRepositoryInterface','App\Repository\StatesRepository');

    }

    /**
     * Bootstrap any application services.

     * Bootstrap services.
     *
     * @return void
     */


    public function boot()
    {
        //
    }

}
