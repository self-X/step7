<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@postLogin');