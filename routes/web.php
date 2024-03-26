<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::redirect('/', '/home');

Route::resource('comics', ComicController::class);

Route::controller(PageController::class)->group(function () {
  Route::get('/home', 'home')->name('home');
  Route::get('/characters', 'characters')->name('characters');
  Route::get('/movies', 'movies')->name('movies');
  Route::get('/games', 'games')->name('games');
  Route::get('/collectibles', 'collectibles')->name('collectibles');
  Route::get('/videos', 'videos')->name('videos');
  Route::get('/fans', 'fans')->name('fans');
  Route::get('/news', 'news')->name('news');
  Route::get('/shop', 'shop')->name('shop');
});
