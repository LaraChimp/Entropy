<?php

namespace LaraChimp\Entropy;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class EntropyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerRoutes();
        $this->registerViews();

        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->configure();
    }

    /**
     * Setup the configuration for Entropy.
     *
     * @return void
     */
    protected function configure()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/entropy.php',
            'entropy'
        );
    }

    /**
     * Register the package routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        Route::as('entropy.')
             ->prefix(config('entropy.path'))
             ->middleware(config('entropy.middleware'))
             ->group(function () {
                 $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
             });
    }

    /**
     * Register the package resources such as routes, templates, etc.
     *
     * @return void
     */
    protected function registerViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'entropy');
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/entropy.php' => $this->app->configPath('entropy.php'),
        ], 'entropy-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/entropy'),
        ], 'entropy-views');

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/entropy'),
        ], 'entropy-assets');
    }
}
