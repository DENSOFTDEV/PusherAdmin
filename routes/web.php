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



Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');
Auth::routes();
Route::get('/posts/{post}','PostController@single');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','PostController@all');


Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');
