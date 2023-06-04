<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\CrawlingService;
use Illuminate\Support\Facades\DB;
class CrawlDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(CrawlingService $crawlingService)
    {
        $crawlingService = new CrawlingService();
        for ($i = 12; $i>0; $i--) {
        
            $crawlingService->crawlData($i);
        }
        
        // $this->info('Curerent DB:'. DB::table('crawling_data_laps')->insert([
            
        // ]));
       
    }
}
