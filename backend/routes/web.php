<?php

// use view;
use Goutte\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialAuthController;
use App\Http\Controllers\CrawlingDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    // dd('welcome');
    return view('welcome');
});
// Route::get('/', return  view('welcome'););
// Route::get('/', function () {
//     $client = new Client();
//     $news = [];
//     $index = 0;
//     $crawler = $client->request('GET', 'https://www.marocannonces.com/categorie/309/Emploi/Offres-emploi/1.html');
  
//     $news = [];

//     $crawler->filter('.content_box a')->each(function ($node) use (&$news, &$index) {

//         $data = new Client();

//         $li = 0;
//         $article = $data->request('GET', 'https://www.marocannonces.com/' . $node->attr('href'));

//         $article->filter('h1')->each(function ($node) use (&$index, &$news) {
//             $news[$index]['title'] = $node->text();
//         });

//         $article->filter('.info-holder li')->each(function ($node) use (&$index, &$news, &$li) {
            
//             if (empty($node->text())){
// echo 'aaaaaaa33333'.$index;
//                 return 0;}
//             $news[$index]['laps'][$li] = $node->text();
//             $li++;
//         });

//         $article->filter('#photo_column a')->each(function ($node) use (&$index, &$news) {
//             $news[$index]['img'] = $node->attr('href');
//         });

//         $article->filter('.block')->each(function ($node) use (&$index, &$news) {
//             $news[$index]['body'] = $node->text();
//         });

//         $li = 0;
//         $article->filter('.parameter #extra_questions ul li')->each(function ($node) use (&$index, &$news, &$li) {
//             if (empty($node->text())){
//                 return;}
//             $news[$index]['parameter'][$li] = $node->text();
//             $li++;
//         });
//         $index++;
//         if($index>5) return ;
//     });
//     // dd($news);
    
//     dd($news,$index,'ro');
//     // return view('welcome', compact('news'));
// });
Route::get('/login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('/login/facebook', [SocialAuthController::class, 'redirectToFecbook'])->name('login.fecebook');
Route::get('/login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);

Route::get('/login/github', [SocialAuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [SocialAuthController::class, 'handleGithubCallback']);



// Route::get('/login',function(){return view('login');})->name('login');
// Login routes

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'index'])->name('connect');


// Route::get('/register', [RegisterController::class, 'show'])->name('register');
// Route::post('/register', [RegisterController::class, 'store'])->name('store');

//



// Registration routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');

// Logout route
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

require __DIR__ . '/auth.php';
// Custom logout route
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');