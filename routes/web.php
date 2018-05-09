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
    return view('home');
});

Route::get('/contact', 'ContactController@index');
Route::post('/contact/send', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create');
Route::get('/register', 'ContactController@register');