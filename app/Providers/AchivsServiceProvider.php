<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
class AchivsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('achiv', function() {
            return new \App\Achivs\Achiv;
        });
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
