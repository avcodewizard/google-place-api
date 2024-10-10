<?php

namespace Avcodewizard\GooglePlaceApi;

use Illuminate\Support\ServiceProvider;

class GooglePlaceApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/googleplaces.php', 'googleplaces'
        );

        $this->app->singleton(GooglePlacesApi::class, function ($app) {
            return new GooglePlacesApi(config('googleplaces.api_key'));
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/googleplaces.php' => config_path('googleplaces.php'),
        ], 'config');
    }
}
