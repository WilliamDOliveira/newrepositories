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

Route::get('todo/index', 'TodoController@index' );
Route::get('todo/show/{id}', 'TodoController@show' );
Route::get('todo/create/{array}', 'TodoController@create' );
Route::get('todo/update/{id,array}', 'TodoController@update' );
Route::get('todo/delete/{id}', 'TodoController@delete' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
