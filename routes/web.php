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
    return view('templates');
});
Route::get('/dudu','accueilController@index');
Route::get('users', 'accueilController@create');
Route::post('users', 'accueilController@store');

Route::get('form', 'formController@create');
Route::post('form', 'formController@store');