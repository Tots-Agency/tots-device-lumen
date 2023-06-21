<?php

namespace Tots\Device\Providers;

use Illuminate\Support\ServiceProvider;

class DeviceServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register migrations
        if($this->app->runningInConsole()){
            $this->registerMigrations();
        }
    }
    /**
     * Register migrations library
     *
     * @return void
     */
    protected function registerMigrations()
    {
        $mainPath = database_path('migrations');
        $paths = array_merge([
            './vendor/tots/device-lumen/database/migrations'
        ], [$mainPath]);
        $this->loadMigrationsFrom($paths);
    }

    /**
     * Boot the blog services for the application.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
