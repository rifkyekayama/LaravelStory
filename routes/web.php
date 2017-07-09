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

//Authentication
Route::group(['namespace' => 'Auth'], function () {

    // Login and Register With Github Account
    Route::get('/login/github', 'GithubController@redirectToProvider');
    Route::get('/login/github/callback', 'GithubController@handleProviderCallback');

    // Login and Register With Facebook Account
    Route::get('/login/facebook', 'FacebookController@redirectToProvider');
    Route::get('/login/facebook/callback', 'FacebookController@handleProviderCallback');
});