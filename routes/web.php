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

Route::get('/index', 'HomeController@index')->name('home');
Route::get('/', 'TheGameMuseumController@index');
Route::get('/index', 'TheGameMuseumController@index');
Route::get('/contact', 'TheGameMuseumController@contact');
Route::get('/help', 'TheGameMuseumController@help');

Route::get('/console', 'ConsoleController@index');
Route::get('/console/create', 'ConsoleController@create');
Route::post('/console/store', 'ConsoleController@store');
Route::get('/console/{consoles}', 'ConsoleController@show');
Route::get('/console/edit/{consoles}', 'ConsoleController@edit');
Route::delete('/console/{consoles}', 'ConsoleController@destroy');
Route::post('/console/update/{consoles}', 'ConsoleController@update');

Route::get('/games', 'GameController@index');
Route::get('/games/create', 'GameController@create');
Route::post('/games/store', 'GameController@store');
Route::get('/games/{games}', 'GameController@show');
Route::get('/games/edit/{games}', 'GameController@edit');
Route::delete('/games/{games}', 'GameController@destroy');
Route::post('/games/update/{games}', 'GameController@update');

Route::get('/handheld', 'HandheldsController@index');
Route::get('/handheld/create', 'HandheldsController@create');
Route::post('/handheld/store', 'HandheldsController@store');
Route::get('/handheld/{handhelds}', 'HandheldsController@edit');
Route::delete('/handheld/{handhelds}', 'HandheldsController@destroy');
Route::post('/handheld/update/{handhelds}', 'HandheldsController@update');