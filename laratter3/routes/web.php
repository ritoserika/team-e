<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

// ↓追加
use App\Http\Controllers\FavoriteController;
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
// ↓ ここを編集
Route::group(['middleware' => 'auth'], function () {
  // ↓追加
  Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');

  // ↓追加
  Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites'); 
  
  Route::get('/tweet/mypage', [TweetController::class, 'mydata'])->name('tweet.mypage');
  Route::resource('tweet', TweetController::class);
});

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/training', function () {
  return view('training');
})->middleware(['auth'])->name('training');

Route::get('smile', function () {
  return view('smile');
})->middleware(['auth'])->name('smile');

require __DIR__ . '/auth.php';

