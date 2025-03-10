<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('front.components.button.hover-btn', 'hoverBtn');
        Blade::component('front.components.svg.down', 'down');
        Blade::component('front.components.card', 'card');
    }
}
