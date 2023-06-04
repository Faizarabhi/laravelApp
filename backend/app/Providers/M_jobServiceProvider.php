<?php

namespace App\Providers;

use App\Services\M_jobCrawlingService;
use Illuminate\Support\ServiceProvider;

class M_jobServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        $this->app->bind(M_jobCrawlingService::class, function ($app) {
            return new M_jobCrawlingService();
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
