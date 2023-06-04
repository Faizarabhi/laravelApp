<?php

namespace App\Providers;

use App\Services\CrawlingService;
use Illuminate\Support\ServiceProvider;

class CrawlingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CrawlingService::class, function ($app) {
            return new CrawlingService();
        });
       
    }
}