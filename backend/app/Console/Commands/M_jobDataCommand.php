<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\M_jobCrawlingService;
use Illuminate\Support\Facades\DB;

class M_jobDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:mjob';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(M_jobCrawlingService $crawlingService)
    {
        $crawlingService = new M_jobCrawlingService();
        
        
            $crawlingService->crawlData();
        
        
        // $this->info('Curerent DB:'. DB::table('crawling_data_laps')->insert([
            
        // ]));
       
    }
}
