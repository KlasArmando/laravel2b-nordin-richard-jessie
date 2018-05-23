<?php

Route::get('/', 'TheGameMuseumController@index');
Route::get('/login', function (){
    return view('login');
});