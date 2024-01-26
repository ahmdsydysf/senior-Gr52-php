<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer(['welcome','new'], function ($vw) {
            $vw->with(['phone' => 12 , 'roomnum' => 88]);
        });

        // View::share(['phone' => '123' , 'address' => 'cairo']);
    }
}
