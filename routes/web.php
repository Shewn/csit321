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
Auth::routes();
Route::get('/home', 'PagesController@home'); 
Route::get('/a', 'ArtsController@a'); 
Route::get('/', 'PagesController@home'); 
Route::get('/about', 'PagesController@about'); 
Route::get('/map', 'PagesController@map');
Route::get('/artworkDetails', 'PagesController@artworkDetails'); 
Route::get('/artwork', 'PagesController@artwork'); 
Route::get('/artworkArchive', 'PagesController@artworkArchive'); 
Route::get('/addArtwork', 'PagesController@create'); 
Route::get('/getdata', 'PagesController@getdata'); 
Route::get('/hello', function () {
   return 'Hello World';
});

Route::resource('arts','ArtsController');
Route::resource('pages', 'PagesController');

 

Auth::routes();

Route::get('/home', 'PagesController@home')->name('home');


