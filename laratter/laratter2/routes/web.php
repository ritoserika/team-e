<?php

use Illuminate\Support\Facades\Route;
// «’Ç‰Á
use App\Http\Controllers\TweetController;
// «’Ç‰Á
use App\Http\Controllers\FavoriteController;
// «’Ç‰Ámy
use App\Http\Controllers\CommentsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// « ‚±‚±‚ð•ÒW
Route::group(['middleware' => 'auth'], function () {
    // «’Ç‰Á
    Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');

     // «’Ç‰Á
    Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');
    // «’Ç‰Á
    Route::post('tweet/{tweet}/comments', [CommentsController::class, 'store'])->name('comments');

    // «’Ç‰Á
    Route::post('tweet/{tweet}/uncomments', [CommentsController::class, 'destroy'])->name('uncomments');
    // «’Ç‰Á
    Route::get('/tweet/mypage', [TweetController::class, 'mydata'])->name('tweet.mypage');
    Route::resource('tweet', TweetController::class);
    
    });
    Route::get('/', function () {
        return view('welcome');
    });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
