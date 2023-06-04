<?php

namespace App\Providers;

use RekruteCrawlingService;
use Illuminate\Support\ServiceProvider;

class RekruteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(RekruteCrawlingService::class, function ($app) {
            return new RekruteCrawlingService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
