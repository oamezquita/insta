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
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}/edit', 'ProfilesController@update')->name('profile.update');
//Posts
Route::get('/p/create', 'PostsController@create')->name('posts.create');
Route::get('/p/{post}', 'PostsController@show')->name('posts.show');
Route::post('/p', 'PostsController@store')->name('posts.store');
