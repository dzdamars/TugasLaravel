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

Route::get('/', 'PagesController@getHome')->name('home');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/isi', 'PagesController@getIsi');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/index', 'PagesController@getIndex');

Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/login', 'SessionController@create');

Route::get('/register', 'RegisterController@create');

Route::post('/register', 'RegisterController@store');

Route::get('/logout', 'SessionController@destroy');

Route::post('/login' ,'SessionController@store');