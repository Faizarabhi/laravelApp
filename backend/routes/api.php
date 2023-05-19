<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SocialAuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    dd('welcome');
    return view('welcome');
});

Route::get('/login/google', [SocialAuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);

Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'index'])->name('connect');

Route::get('/login/facebook', [SocialAuthController::class, 'redirectToFecbook'])->name('login.fecebook');
Route::get('/login/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback']);

Route::get('register', [RegisterController::class, 'show'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('store');
require __DIR__ . '/auth.php';