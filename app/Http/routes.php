<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{name?}', function ($name = 'John') {
    return $name;
});


Route::get('/welcome', function () {
    return view('welcome');
});

//
Route::get('/task', 'TaskController@index');
Route::get('/task/{id}/{name}', 'TaskController@test');

Route::controller("admin","WorkController");