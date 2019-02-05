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

Route::get('/', 'HotelController@index');
Route::get('/main-recommendation', 'HotelController@mainRecommendation');
Route::get('/top-searches', 'HotelController@getTopSearches');
Route::get('/hotels/{hotel}', 'HotelController@show');
