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

Route::get('/', 'SearchController@index');
Route::post('/search', 'SearchController@search');
Route::post('/search1', 'SearchController@search1');
Route::post('/search2', 'SearchController@search2');
Route::post('/search3', 'SearchController@search3');
Route::get('/profile/{id}', 'SearchController@profile');
Route::post('/profilesearch', 'SearchController@profilesearch');
