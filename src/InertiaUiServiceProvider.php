<?php

namespace Laltu\InertiaUi;

use Illuminate\Support\ServiceProvider;
use Laltu\InertiaUi\Commands\InstallPresetCommand;

class InertiaUiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'inertia-ui');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'inertia-ui');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('inertia-ui.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/inertia-ui'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/inertia-ui'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/inertia-ui'),
            ], 'lang');*/

            // Registering package commands.
            $this->commands([
                InstallPresetCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'inertia-ui');

        // Register the main class to use with the facade
        $this->app->singleton('inertia-ui', function () {
            return new InertiaUi;
        });
    }
}
