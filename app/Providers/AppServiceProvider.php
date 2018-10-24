<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// --- Start. Production: Force HTTPS. Local: Ignore -- //
use Illuminate\Support\Facades\Schema;
use Log;
// --- End. Production: Force HTTPS. Local: Ignore -- //


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // --- Start. Production: Force HTTPS. Local: Ignore -- //
        If (env('APP_ENV') !== 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }

        Schema::defaultStringLength(191);
        // --- End. Production: Force HTTPS. Local: Ignore -- //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
