<?php

use Illuminate\Support\Facades\Route;
//追加！
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
// ↓追加

//kougi8で追加
Route::group(['middleware' => 'auth'], function () {

      // いいね実装追加12－5
      Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');

     // いいね取り消し実装追加12－5
      Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');

    // ↓追加
    Route::get('/tweet/mypage', [TweetController::class, 'mydata'])->name('tweet.mypage');
    Route::resource('tweet', TweetController::class);
  });


//Route::resource('tweet', TweetController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/food', function () {
  return view('food');
})->middleware(['auth'])->name('food');

Route::get('/training', function () {
  return view('training');
})->middleware(['auth'])->name('training');

Route::get('/smile', function () {
  return view('smile');
})->middleware(['auth'])->name('smile');


Route::get('/makeup', function () {
  return view('makeup');
})->middleware(['auth'])->name('makeup');

Route::get('/sleep', function () {
  return view('sleep');
})->middleware(['auth'])->name('sleep');

require __DIR__.'/auth.php';
