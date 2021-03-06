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

    // Login and Register With Twitter Account
    Route::get('/login/twitter', 'TwitterController@redirectToProvider');
    Route::get('/login/twitter/callback', 'TwitterController@handleProviderCallback');

    Route::get('/login/twitter/privacy-policy', 'TwitterController@privacyPolicy');
    Route::get('/login/twitter/terms-of-service', 'TwitterController@termsOfService ');

});

Route::get('/google/maps', 'GoogleMapsController@index');

Route::get('/scout', 'ScoutController@index');
Route::post('/scout', 'ScoutController@index');

Route::get('/timer', 'TimerController@index');