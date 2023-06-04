<?php

namespace App\Services;

use Goutte\Client;

use Illuminate\Support\Facades\DB;
use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\HttpClient\HttpClient;
class M_jobCrawlingService
{
    public function crawlData()
    {
        // $client = new Client(['verify' => false]);
        $client = new HttpBrowser(HttpClient::create());
        $crawler = $client->request('GET', 'https://www.dreamjob.ma/emploi/');
        $news = [];

        $crawler->filter('.jeg_main_content')->each(function ($node) use (&$news, &$index) {
            dd($node->text(), 'yy');
        });
    }
}