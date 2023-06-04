<?php
namespace App\Services;

use Goutte\Client;

use Illuminate\Support\Facades\DB;

class DreamJobCrawlingService
{
    public function crawlData()
    {
//         $client = new Client();
//         $index = 0;
//         $news = [];
//         $crawler = $client->request('GET', 'https://www.dreamjob.ma/emploi/');
//         if($index<8){
//         $crawler->filter('.jeg_posts article  a')->each(function ($node) use (&$news, &$index) {
//             // dd($node->attr('href'));
//                 $data = new Client();
//                 // dd($node->attr('href'));
//                 $article = $data->request('GET',$node->attr('href'));
//                 echo $index.$node->attr('href');
//             // echo'salam'.$node->text();
//             $article->filter('.entry-header ')->each(function ($node) use (&$index, &$news) {
//                 // echo $node->text().$index."         ||                ";
//                 $news[$index]['title'] = $node->text();
//                 // dd($node->text());
//             });
//             $index++;
//         });
//     }
//         dd($news);
// // dd($news,$index);
//     }
    


    // $page=0;
    // dd($page);
    $url = 'https://www.dreamjob.ma/emploi/';
    $client = new Client();
    $index = 0;
    // if ($page > 0)
    //     $url = 'https://www.marocannonces.com/categorie/309/Emploi/Offres-emploi/' . $page . '.html';


    $crawler = $client->request('GET', $url);
    $news = [];

    $crawler->filter('article > div >  a')->each(function ($node) use (&$news, &$index) {

        $data = new Client();
        $li = 0;
        if($index<5){
        $article = $data->request('GET',$node->attr('href'));
        $article->filter('h1')->each(function ($node) use (&$index, &$news) {
            $news[$index]['title'] = $node->text();
        });}
        $article->filter('.meta_left ')->each(function ($node) use (&$index, &$news, &$li) {
            $news[$index]['laps'][$li] = $node->text();
            $li++;
        });

        // $article->filter('#photo_column a')->each(function ($node) use (&$index, &$news) {
        //     $news[$index]['img'] = $node->attr('href');
        // });

        // $article->filter('.block')->each(function ($node) use (&$index, &$news) {
        //     $news[$index]['body'] = $node->text();
        // });

        // $li = 0;
        // $article->filter('.parameter #extra_questions ul li')->each(function ($node) use (&$index, &$news, &$li) {
        //     if (empty($node->text())) {
        //         echo 'naqsa para';
        //         return;
        //     }
        //     $news[$index]['parameter'][$li] = $node->text();
        //     $li++;
        // });

        
echo $index;
        $index++;
    });
    dd($news);
}
 }