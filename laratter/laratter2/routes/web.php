<?php

use Illuminate\Support\Facades\Route;
// ���ǉ�
use App\Http\Controllers\TweetController;
// ���ǉ�
use App\Http\Controllers\FavoriteController;
// ���ǉ�my
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
// �� ������ҏW
Route::group(['middleware' => 'auth'], function () {
    // ���ǉ�
    Route::post('tweet/{tweet}/favorites', [FavoriteController::class, 'store'])->name('favorites');

     // ���ǉ�
    Route::post('tweet/{tweet}/unfavorites', [FavoriteController::class, 'destroy'])->name('unfavorites');
    // ���ǉ�
    Route::post('tweet/{tweet}/comments', [CommentsController::class, 'store'])->name('comments');

    // ���ǉ�
    Route::post('tweet/{tweet}/uncomments', [CommentsController::class, 'destroy'])->name('uncomments');
    // ���ǉ�
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
