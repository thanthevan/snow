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
Route::group(['middleware' => 'check.login'], function () {
    
    Route::get('/', 'HomeController@showHome')->name('home');

    Route::get('/logout', 'HomeController@logout')->name('logout');

    Route::get('/profile', 'ProfileController@loadView')->name('profile');
    Route::put('/profile', 'ProfileController@update')->name('putProfile');
    Route::get('/question', 'QuestionController@loadView')->name('question');
    Route::get('/create', 'QuestionController@create')->name('create');
});

Route::get('/login', 'LoginController@showLoginForm');

Route::post('/login', 'LoginController@Login')->name("post-login");
