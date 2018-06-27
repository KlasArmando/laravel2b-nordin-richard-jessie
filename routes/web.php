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

Route::get('/handhelds', 'HandheldController@index');
Route::get('/handhelds/create', 'HandheldController@create');
Route::post('/handhelds/store', 'HandheldController@store');
Route::get('/handhelds/{handhelds}', 'HandheldController@show');
Route::get('/handhelds/edit/{handhelds}', 'HandheldController@edit');
Route::delete('/handhelds/{handhelds}', 'HandheldController@destroy');
Route::post('/handhelds/update/{handhelds}', 'HandheldController@update');

Route::get('/company', 'CompanyController@index');
Route::get('/company/create', 'CompanyController@create');
Route::post('/company', 'CompanyController@store');
Route::get('/company/{company}', 'CompanyController@show');
Route::get('/company/edit/{company}', 'CompanyController@edit');
Route::delete('/company/{company}', 'CompanyController@destroy');
Route::post('/company/update/{company}', 'CompanyController@update');