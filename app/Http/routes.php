<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/','FrontController@index')->name('home');
Route::get('/shirts','FrontController@shirts')->name('shirts');
Route::get('/shirt','FrontController@shirt')->name('shirt');
Route::get('/Admin','FrontController@admin')->name('admin');

Route::get('/home','HomeController@index');
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
 Route::get('/',function()
 {
   return view('admin.index');
 })->name('admin.index');
});
/*Route::get('/', function () {
    return view('welcome');
});
