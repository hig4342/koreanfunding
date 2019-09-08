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
Route::view('/', 'main');
Route::view('/notice', 'notice');
Route::view('/greet', 'greet');
Route::view('/faq', 'faq');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
