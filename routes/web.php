<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('todo', 'TodoController@index');
Route::get('todo/delete/{id}', 'TodoController@delete');
Route::get('todo/done/{id}', 'TodoController@done');
Route::post('todo/add', 'TodoController@add');
Route::post('todo/update/{id}', 'TodoController@update');




Route::get('/about', ['uses' => 'PostController@index']);

Route::get('/cds','CdController@index');
Route::get('/cds/create', 'CdController@create');
Route::get('/cds/delete/{id}' , 'CdController@destroy');

Route::get('/cds/edit/{id}' , 'CdController@edit');
Route::post('/cds/edit/{id}', 'CdController@update');

Route::get('/cds/{id}', 'CdController@show');



Route::get('/home', function () {

    //return "Hello world";
    return view('welcome');
});
