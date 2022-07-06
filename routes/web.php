<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /*
     * Backend
     */
    Route::group(['namespace' => 'Backend'], function()
    {

    /**
     * Dashboard Routes
     */
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    


     

    Route::get('/myprofile', 'AdminController@profile')->name('AffinityCategories');
    





        /**
         * Location Routes
         */
        Route::group(['prefix' => 'locations'], function() {

    Route::get('/create', 'LocationController@create')->name('locations.create');
    Route::post('/create', 'LocationController@create')->name('locations.create');
    Route::get('/{location}/edit', 'LocationController@edit')->name('locations.edit');
    Route::get('/{location}/show', 'LocationController@show')->name('locations.show');
    Route::patch('/{location}/update', 'LocationController@update')->name('locations.update');
    Route::post('/{location}/delete', 'LocationController@destroy')->name('locations.delete');

    Route::get('/{location}/add', 'LocationController@addData');
    Route::post('/{location}/add', 'LocationController@addData');

    Route::get('/', 'LocationController@index')->name('location.index');

        });



    Route::get('/test', 'LocationController@addData');
    Route::post('/test', 'LocationController@addData');




    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        Route::get('/forgotPassword', 'LoginController@forgotPassword')->name('login.forgotPassword');

    });

    Route::group(['middleware' => ['auth', 'permission']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        /**
         * User Routes
         */
        Route::group(['namespace' => 'Users'], function()
        {
            Route::group(['prefix' => 'users'], function() {
                Route::get('/listOfCustomers', 'UsersController@index')->name('users.index');
                Route::get('/', 'UsersController@index')->name('users.index');


                Route::get('/create', 'UsersController@create')->name('users.create');
                Route::post('/create', 'UsersController@store')->name('users.store');
                Route::get('/{user}/show', 'UsersController@show')->name('users.show');
                Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
                Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
                Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
            });
        });

        Route::group(['namespace' => 'CMS'], function() 
        {
    
            // Route::get('/publisher-dashboard/{publisher}', );

            Route::group(['prefix' => 'affinity-categories'], function() 
            {

                Route::get('/', 'AffinityCategoriesController@index')->name('AffinityCategories.index');
                Route::get('/add', 'AffinityCategoriesController@add')->name('AffinityCategories.add');
                Route::post('/add-data', 'AffinityCategoriesController@addData')->name('AffinityCategories.addData');

                Route::get('/import', 'AffinityCategoriesController@import')->name('AffinityCategories.import');
                Route::get('/export', 'AffinityCategoriesController@export')->name('AffinityCategories.export');
                Route::get('/delete/{affinityCategories}', 'AffinityCategoriesController@delete')->name('AffinityCategories.delete');
                Route::get('/edit/{affinityCategories}', 'AffinityCategoriesController@edit')->name('AffinityCategories.edit');
                Route::post('/update/{affinityCategories}', 'AffinityCategoriesController@update')->name('AffinityCategories.update');
                Route::get('/status-update/{affinityCategories}', 'AffinityCategoriesController@statusUpdate')->name('AffinityCategories.statusUpdate');

            });




            Route::get('/cms-categories', 'CmsCategoriesController@index')->name('CmsCategories.index');
            Route::get('/cms-pages', 'CmsPagesController@index')->name('CmsPages.index');
            Route::get('/mobile-app-categories', 'MobileAppCategoryController@index')->name('MobileAppCategory.index');
            Route::get('/customer-pincodes', 'CustomerPincodesController@index')->name('CustomerPincodes.index');
            Route::get('/product-categories', 'ProductCategoriesController@index')->name('ProductCategories.index');

            Route::group(['prefix' => 'countries'], function()
            {

                Route::get('/', 'CountriesController@index')->name('Countries.index');
                Route::get('/add', 'CountriesController@add')->name('Countries.add');
                Route::post('/add', 'CountriesController@addData')->name('Countries.addData');
                Route::get('/edit/{countries}', 'CountriesController@edit')->name('Countries.edit');
                Route::post('/update/{countries}', 'CountriesController@editData')->name('Countries.editData');
                Route::get('/delete/{countries}', 'CountriesController@deleteData')->name('Countries.delete');
                Route::get('/status-update/{countries}', 'CountriesController@statusUpdate')->name('Countries.statusUpdate');


            });


            Route::group(['prefix' => 'states'], function()
            {

                Route::get('/', 'StatesController@index')->name('States.index');
                Route::get('/add', 'StatesController@add')->name('States.add');
                Route::post('/add', 'StatesController@addData')->name('States.addData');
                Route::get('/edit/{states}', 'StatesController@edit')->name('States.edit');
                Route::post('/update/{states}', 'StatesController@editData')->name('States.editData');
                Route::get('/delete/{states}', 'StatesController@deleteData')->name('States.delete');
                Route::get('/status-update/{states}', 'StatesController@statusUpdate')->name('States.statusUpdate');


            });


            Route::get('/cities', 'CitiesController@index')->name('Cities.index');
            Route::get('/cities/add', 'CitiesController@add')->name('Cities.add');


            Route::get('/languages', 'LanguagesController@index')->name('Languages.index');
            Route::get('/country-language-mapping', 'CountryLanguageMappingController@index')->name('CountryLanguageMapping.index');
            Route::get('/time-zones', 'TimeZonesController@index')->name('TimeZones.index');
            Route::get('/currencies', 'CurrenciesController@index')->name('Currencies.index');
            Route::get('/topics', 'TopicsController@index')->name('Topics.index');
            Route::get('/landingpage-themes', 'ThemesController@index')->name('Themes.index');
            Route::get('/call-to-action-logs', 'CallToActionController@index')->name('CallToAction.index');
            Route::get('/lms-api-data', 'LmsApiDataController@index')->name('LmsApiData.index');

    
        });

        Route::group(['prefix' => 'publishers'], function() 
     {

        Route::get('/{publisher}/edit', 'DashboardController@edit')->name('publishers.edit');
        Route::get('/', 'DashboardController@publishers')->name('dashboard.publishers');
        Route::get('/publisher-dashboard/{publisher}','DashboardController@publishersDashboard');

        });


        /**
         * Posts Routes
         */
        Route::group(['prefix' => 'posts'], function() {
            Route::get('/', 'PostsController@index')->name('posts.index');
            Route::get('/create', 'PostsController@create')->name('posts.create');
            Route::post('/create', 'PostsController@store')->name('posts.store');
            Route::get('/{post}/show', 'PostsController@show')->name('posts.show');
            Route::get('/{post}/edit', 'PostsController@edit')->name('posts.edit');
            Route::patch('/{post}/update', 'PostsController@update')->name('posts.update');
            Route::delete('/{post}/delete', 'PostsController@destroy')->name('posts.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
    });

    /*
     * Frontend
     */

    Route::group(['namespace' => 'Frontend'], function()
    {
        /**
         * Home Routes
         */

        Route::get('/', 'HomeController@home')->name('home.index');
        Route::get('/privacy-policy', 'HomeController@privacyPolicy');

    });
});
