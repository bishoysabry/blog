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
Route::get('/Profile/deactivate/{id}', 'ProfileController@deactivate');
Route::get('/user/confirmation/{token}', 'Auth\RegisterController@confirmation')->name('confirmation');

Route::resource('Profile','ProfileController');
Route::resource('Post','PostController');
Route::resource('Category','CategoryController');
Route::resource('Comment','CommentController');
