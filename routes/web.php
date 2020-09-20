<?php

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

Route::get('/', 'FetchController@index')->name('fetch.index');
Route::get('/features', 'FeatureController@index')->name('features');
Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::post('/map', 'FetchController@map')->name('fetch.map');
Route::post('/weather', 'FetchController@weather')->name('fetch.weather');
Route::post('/verify', 'FetchController@verify')->name('fetch.verify');
Route::post('/search', 'FetchController@search')->name('fetch.search');
Route::post('/stocks', 'FetchController@stocks')->name('fetch.stocks');
Route::post('/currencies', 'FetchController@currencies')->name('fetch.currencies');
Route::post('/movies', 'FetchController@movies')->name('fetch.movies');
Route::post('/youtube', 'FetchController@youtube')->name('fetch.youtube');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
