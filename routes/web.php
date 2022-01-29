<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

/**
 * Routes for pages
 */
Route::namespace ('Pages')->group(function () {
    Route::get('/', 'CardController@index')->name('cards');
    Route::get('/features', 'FeatureController@index')->name('features');
    Route::get('/about', 'AboutController@index')->name('about');

    /**
     * Routes for contact form
     */
    Route::get('/contact', 'ContactController@create')->name('contact.create');
    Route::post('/contact', 'ContactController@store')->name('contact.store');
});

/**
 * Routes for apis forms
 */
Route::namespace ('Cards')->group(function () {
    Route::post('/businesses', 'BusinessController@fetch')->name('businesses.fetch');
    Route::post('/currencies', 'CurrencyController@fetch')->name('currencies.fetch');
    Route::post('/maps', 'MapController@fetch')->name('maps.fetch');
    Route::post('/movies', 'MovieController@fetch')->name('movies.fetch');
    Route::post('/news', 'NewController@fetch')->name('news.fetch');
    Route::post('/photos', 'PhotoController@fetch')->name('photos.fetch');
    Route::post('/searches', 'SearchController@fetch')->name('searches.fetch');
    Route::post('/stocks', 'StockController@fetch')->name('stocks.fetch');
    Route::post('/twitter', 'TwitterController@fetch')->name('twitter.fetch');
    Route::post('/verify', 'VerifyController@fetch')->name('verify.fetch');
    Route::post('/weather', 'WeatherController@fetch')->name('weather.fetch');
    Route::post('/youtube', 'YoutubeController@fetch')->name('youtube.fetch');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
