<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DreamJobCrawlingService;

class DreamJobServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(DreamJobCrawltouchingService::class, function ($app) {
            return new DreamJobCrawlingService();
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
