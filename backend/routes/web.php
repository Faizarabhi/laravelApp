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
    $news = [];
    $index = 0;
    $crawler = $client->request('GET', 'https://www.marocannonces.com/categorie/309/Emploi/Offres-emploi.html');
    // dd($crawler);
    // dd('Zahrae');
    // $crawler->filter('#main #twocolumns ')->each(function ($node) use (&$news, &$index) {
        $crawler->filter('#main #twocolumns a ')->each(function ($node) use (&$news, &$index) {
        // print $node->text() . "\n";
        // dd($node->text());
        $node->filter(' img')->each(function ($node) use (&$news, &$index) {

            if (empty($node->attr('data-original'))){

                return;
            }

            $news[$index]['img'] = 'https://www.marocannonces.com/' . $node->attr('data-original');
            // dd($news);
        });
        $node->filter('a h3')->each(function ($node) use (&$news, &$index) {
            $news[$index]['title'] = $node->text();
            
            // dd($news);

        });
        $node->filter('a  .niveauetude')->each(function ($node) use (&$news, &$index) {
            $news[$index]['niveauetude'] = $node->text();
            // dd($news);

        });
        $node->filter(' a  .salary')->each(function ($node) use (&$news, &$index) {
            $news[$index]['salaire'] = $node->text();
            // dd($news);

        });
        $node->filter(' a  .location')->each(function ($node) use (&$news, &$index) {
            $news[$index]['location'] = $node->text();
            // dd($news);

        });
        $index++;

    });
    
    // dd($news,$index);
    return view('welcome', compact('news'));
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