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

Route::get('/', 'HomeController@getHome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/catalog', 'MoviesController@getIndex');

Route::group(['middleware'=>'auth'], function()
{
    Route::get('/catalog/show/{id}', 'MoviesController@getShow');

    Route::get('/catalog/create', 'MoviesController@getCreate');
    Route::post('/catalog/create', 'MoviesController@postCreate')->name('catalog.create');

    Route::get('/catalog/edit/{id}', 'MoviesController@getEdit');
    Route::put('/catalog/edit/{id}', 'MoviesController@putEdit')->name('catalog.edit');

    //Route::delete('/markets/{id}', 'MarketController@destroy')->name('markets.destroy');
});
