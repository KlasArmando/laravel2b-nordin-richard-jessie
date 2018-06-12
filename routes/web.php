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


/*Handheld*/
Route::get('/handhelds','HandheldsController@index');
Route::get('/handhelds/create','HandheldsController@create');
Route::post('/handhelds','HandheldsController@store');
Route::get('/handhelds/{handhelds}','HandheldsController@show');
Route::get('/handhelds/{handhelds}/edit','HandheldsController@edit');
Route::patch('/handhelds/{handhelds}','HandheldsController@update');
Route::delete('/handhelds/{handhelds}','HandheldsController@destroy')->name('handhelds.delete');
