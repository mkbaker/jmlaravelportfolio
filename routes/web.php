<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('bio');
});

Route::get('/artwork', 'ArtworkController@index')->name('artwork.index');
Route::get('/artwork/{id}', 'ArtworkController@show')->name('artwork.show');
Route::get('artwork/medium/{medium}', 'ArtworkController@medium')->name('artwork.medium');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
