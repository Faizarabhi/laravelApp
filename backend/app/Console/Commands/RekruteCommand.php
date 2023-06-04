<?php

namespace App\Console\Commands;

use App\Services\RekruteCrawlingService;
;
use Illuminate\Console\Command;

class RekruteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:rekrute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(RekruteCrawlingService $crawlingService)
    {
        //
        $crawlingService = new RekruteCrawlingService();
        $crawlingService->crawlData();
    }
}