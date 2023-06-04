<?php

namespace App\Console\Commands;

use App\Providers\DreamJobServiceProvider;
use Illuminate\Console\Command;

use App\Services\DreamJobCrawlingService;
class DreamJobCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:dream';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(DreamJobCrawlingService $dreamJobService)
    {
        $dreamJobService = new DreamJobCrawlingService();
        
        
            $dreamJobService->crawlData();
        //
    }
}
