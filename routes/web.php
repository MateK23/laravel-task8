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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('news/create', 'NewsController@create')->name('create');
Route::post('news', 'NewsController@store')->name('store');

Route::get('category/create', 'CategoryController@create')->name('createcat');
Route::post('category', 'CategoryController@store')->name('storecat');

Route::get('tag/create', 'TagController@create')->name('createtag');
Route::post('tag', 'TagController@store')->name('storetag');
