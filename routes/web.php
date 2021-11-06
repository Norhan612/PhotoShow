<?php

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

use Illuminate\Support\Facades\Route;

//Albums

Route::get('/', 'AlbumsController@index');

Route::get('/albums', 'AlbumsController@index');

Route::get('/albums/create', 'AlbumsController@create');

Route::post('/albums/store', 'AlbumsController@store');

Route::get('/albums/{id}', 'AlbumsController@show');


//Photos

Route::get('/photos/create/{id}', 'PhotosController@create');

Route::post('/photos/store/{id}', 'PhotosController@store');

Route::get('/photos/{id}', 'PhotosController@show');

Route::get('/photos/delete/{id}', 'PhotosController@destroy');

