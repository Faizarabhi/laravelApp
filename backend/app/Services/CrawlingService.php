<?php

namespace App\Services;

use Goutte\Client;
use Illuminate\Support\Facades\DB;

class CrawlingService
{
    public function crawlData($page)
    {
        // $page=0;
        // dd($page);
        $url = 'https://www.marocannonces.com/categorie/309/Emploi/Offres-emploi.html';
        $client = new Client();
        $index = 0;
        if ($page > 0)
            $url = 'https://www.marocannonces.com/categorie/309/Emploi/Offres-emploi/' . $page . '.html';


        $crawler = $client->request('GET', $url);
        $news = [];

        $crawler->filter('.content_box a')->each(function ($node) use (&$news, &$index) {

            $data = new Client();
            $li = 0;
            $article = $data->request('GET', 'https://www.marocannonces.com/' . $node->attr('href'));
            $article->filter('h1')->each(function ($node) use (&$index, &$news) {
                $news[$index]['title'] = $node->text();
            });
            $article->filter('.info-holder li')->each(function ($node) use (&$index, &$news, &$li) {
                // if (empty($node->text())) {
                //     echo 'makach';
                //     return;
                // }
                $news[$index]['laps'][$li] = $node->text();
                $li++;
            });

            $article->filter('#photo_column a')->each(function ($node) use (&$index, &$news) {
                $news[$index]['img'] = $node->attr('href');
            });

            $article->filter('.block')->each(function ($node) use (&$index, &$news) {
                $news[$index]['body'] = $node->text();
            });

            $li = 0;
            $article->filter('.parameter #extra_questions ul li')->each(function ($node) use (&$index, &$news, &$li) {
                // if (empty($node->text())) {
                //     echo 'naqsa para';
                //     return;
                // }
                $news[$index]['parameter'][$li] = $node->text();
                $li++;
            });

            // Save the crawled data to the database
            // dd($news);
            if (count($news) > 3)
                $this->saveToDatabase($news, $index);

            $index++;
        });
    }

    private function saveToDatabase($data, $i)
    {
        // dd($data[$i]);
        $title = $data[$i]['title'];



        $existingData = DB::table('crawling_data')->where('title', $title)->first(); // +&& company name if else 
        if ($existingData) {
            // $i=1;
            // dd("Duplicate entry found for title: $title");
            echo "Duplicate entry found for title: $title";

            return;
        }
        echo $i . '/_/';
        // i have twoo method check is title exist in db and not validate or filter just title exist 

        $parametersId = DB::table('crawling_data_parameters')->insertGetId([
            'Domaine' => $data[$i]['parameter'][0],
            'Contrat' => $data[$i]['parameter'][1],
            'Salaire' => $data[$i]['parameter'][2],
            'Fonction' => $data[$i]['parameter'][3],
            'Entreprise' => $data[$i]['parameter'][4],
            'niveau_etude' => $data[$i]['parameter'][5],
        ]);

        $lapsId = DB::table('crawling_data_laps')->insertGetId([
            'localisation' => $data[$i]['laps'][0],
            'date' => $data[$i]['laps'][1],
            'vue' => $data[$i]['laps'][2],
            'number' => $data[$i]['laps'][3],
        ]);
        DB::table('crawling_data')->insert([
            'title' => $data[$i]['title'],
            'img' => "ee",
            'body' => "tt",
            'parameters_id' => $parametersId,
            'laps_id' => $lapsId,
        ]);
        $i--;
    }
}