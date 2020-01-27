<?php

namespace cb\shadmin;

use Illuminate\Support\ServiceProvider;

class ShAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //This Load From Chakage Package
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/Installs/resources/views', 'SHAdmin');





        //assets publish
        $this->publishes([
            __DIR__.'/Installs/sh-assets' => public_path('sh-admin-assets'),
        ], 'public');

        //SHAdmin Command Publish
        if ($this->app->runningInConsole()) {
            $this->commands([
                \cb\shadmin\Commands\SAInstall::class,
            ]);
        }
    }
}
