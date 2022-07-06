<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CountriesService;

class CMSServiceProvider extends ServiceProvider
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

        $this->app->bind('App\Services\StatesService');    
        $this->app->bind('App\Repository\StatesRepositoryInterface','App\Repository\StatesRepository');
   
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
