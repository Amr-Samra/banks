<?php

namespace Bdwey\Banks;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class BanksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        // $this->loadViewsFrom(__DIR__.'/Resources/views', 'Banks');
        $this->loadTranslationsFrom(__DIR__.'/Resources/lang', 'Banks');
        $this->publishes([
            __dir__ . '/Database/Seeds' => database_path('seeds')
        ],'banks.seeds');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->make('Bdwey\Banks\Http\BanksController');
    }
}
