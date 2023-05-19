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

    $crawler->filter('.listing_set a')->each(function ($node) use (&$news, &$index) {

        $data = new Client();

        $article = $data->request('GET', 'https://www.marocannonces.com/' . $node->attr('href'));
        $article->filter('h1')->each(function ($node) {
            dd($node->text());

        });

        $index++;

    });

    dd($news,$index);
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