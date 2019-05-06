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

Route::get('/person', 'PersonController@index');
Route::get('/person/add', 'PersonController@add');
Route::get('/person/edit/{id}', 'PersonController@edit');
Route::get('/person/delete_action/{id}', 'PersonController@delete_action');

Route::post('/person/add_action', 'PersonController@add_action');
Route::post('/person/edit_action', 'PersonController@edit_action');

