<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;
// ���ǉ�
use App\Http\Controllers\FavoriteController;
// ���ǉ�
use App\Http\Controllers\DislikeController;
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

Route::group(['middleware' => 'auth'], function () {
    // ���ǉ�
    Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');

  // ���ǉ�
    Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');
    // ���ǉ�
  Route::post('tweet/{tweet}/dislikes', [FavoriteController::class, 'store'])->name('dislikes');

  // ���ǉ�
  Route::post('tweet/{tweet}/undislikes', [FavoriteController::class, 'destroy'])->name('undislikes');

    Route::get('/tweet/mypage', [TweetController::class, 'mydata'])->name('tweet.mypage');
    Route::resource('tweet', TweetController::class);
    Route::post('test/admin','AdminController@buttonTest');
});
Route::get('/', function () {
  return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/makeup', function () {
  return view('makeup');
})->middleware(['auth'])->name('makeup');

Route::get('/dashboard3', function () {
  return view('dashboard3');
})->middleware(['auth'])->name('dashboard3');


require __DIR__.'/auth.php';
