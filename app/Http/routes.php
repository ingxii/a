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

// App::setLocale('en');


// $myfoo = App::make("myfoo");
// echo $myfoo->add(1,2);

// Authentication Routes...
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');



Route::post('/file', 'File\FilesController@upload');
Route::get('/file', 'File\FilesController@index');
Route::delete('/file', 'File\FilesController@delete');
Route::post('/file/folder', 'File\FilesController@create_folder');
Route::delete('/file/folder', 'File\FilesController@delete_folder');



Route::get('/admin/{type}/{page}', 'Admin\AdminController@index');
Route::post('/admin/{type}/{page}', 'Admin\AdminController@index');
Route::get('/admin/{edit}', 'Admin\AdminController@edit');
Route::post('/admin/{edit}', 'Admin\AdminController@edit');
Route::get('/admin', 'Admin\AdminController@index');



Route::get('/user', 'UserController@index');
Route::get('/user/test', 'UserController@test');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/index', 'TestController@index');
Route::post('/test/index', 'TestController@index');
Route::get('test/{name?}', function ($name = 'John') {
    return $name;
});


Route::get('/welcome', function () {
    return view('welcome');
});

//
Route::get('/task', 'TaskController@index');
Route::get('/task/{id}/{name}.html', 'TaskController@test');

// 模糊匹配
Route::controller("work","WorkController");


// Route::resource('/task', 'TaskController');


// // 别名
// Route::get('/home', [
//     'as' => 'home', 'uses' => 'HomeController@index'
// ]);
