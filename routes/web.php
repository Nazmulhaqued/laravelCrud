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

Route::get('/car','CarController@index');

Route::get('/car/add', 'CarController@create');

Route::post('/car/store', 'CarController@store');
// Route::get('/car/{id}/view', 'CarController@view');

Route::get('/car/{id}/edit', 'CarController@edit');

Route::post('/car/{id}/update', 'CarController@update');

Route::get('/car/{id}/delete', 'CarController@delete');

