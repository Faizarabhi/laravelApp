<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialAuthController;
use Goutte\Client;

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
    $client = new Client();
    $crawler = $client->request('GET', 'https://www.filgoal.com/articles');
    // dd($crawler);
    $news = [
    ];
    $index = 0;
    dd($crawler);
    $crawler->filter('#list-box ul li')->each(function ($node) use (&$news, &$index) {
        // print $node->text() . "\n";
        $node->filter('a img')->each(function ($node) use (&$news, &$index) {
            // dd($node->attr('data-src'));
            // $img = $node->attr('src');
            if(empty($node->attr('data-src')))return;
            
            $news[$index]['img'] = 'http:' . $node->attr('data-src');
            // dd($news);
        });
        $node->filter('a div h6')->each(function ($node) use (&$news, &$index) {
            $news[$index]['title'] = $node->text();
            // dd($news);

        });
        $node->filter('a div p')->each(function ($node) use (&$news, &$index) {
            $news[$index]['body'] = $node->text();
        });
        $index++;
    });
    // dd($news[1]['img']);
    return view('welcome',compact('news'));
});

Route::get('/login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('/login/facebook', [SocialAuthController::class, 'redirectToFecbook'])->name('login.fecebook');
Route::get('/login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);

Route::get('/login/github', [SocialAuthController::class, 'redirectToGithub'])->name('login.github');
Route::get('/login/github/callback', [SocialAuthController::class, 'handleGithubCallback']);

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'index'])->name('connect');


Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('store');
require __DIR__ . '/auth.php';