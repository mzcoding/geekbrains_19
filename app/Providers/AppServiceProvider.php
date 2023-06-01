<?php

namespace App\Providers;

use App\SomeClass;
use App\SomeInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SomeInterface::class, function() {
            return new SomeClass("Some string");
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
