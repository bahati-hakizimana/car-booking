<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;

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
    public function boot()
    {
        Paginator::useBootstrap();

        // Custom validation rule for inner_image
        Validator::extend('inner_image', function ($attribute, $value, $parameters, $validator) {
            return $value->isValid() && in_array($value->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif']);
        });
    }
}

