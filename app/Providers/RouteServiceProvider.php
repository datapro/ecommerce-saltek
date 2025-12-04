<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
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
    public static function redirectTo()
{
    return auth()->user()->role === 'admin'
        ? '/dashboard'
        : '/home';
}
    public function boot(): void
    {
        //
    }
}
