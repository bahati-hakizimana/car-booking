<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Pasis\SDK\Client;

class AfriqPay extends ServiceProvider
{
    public function register()
    {
        // Manually load SDK files that don't follow PSR-4 (multiple classes per file)
        if (file_exists(base_path('vendor/pasisltd/php-sdk/src/Models.php'))) {
            require_once base_path('vendor/pasisltd/php-sdk/src/Models.php');
        }
        if (file_exists(base_path('vendor/pasisltd/php-sdk/src/Exceptions.php'))) {
            require_once base_path('vendor/pasisltd/php-sdk/src/Exceptions.php');
        }
        if (file_exists(base_path('vendor/pasisltd/php-sdk/src/Enums.php'))) {
            require_once base_path('vendor/pasisltd/php-sdk/src/Enums.php');
        }

        $this->app->singleton(Client::class, function ($app) {
            return new Client(
                env('AFRIQPAY_APP_KEY'),
                env('AFRIQPAY_SECRET_KEY')
            );
        });
    }

    public function boot()
    {
        //
    }
}
