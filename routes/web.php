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

Route::get('/', 'PagesController@home');
Route::get('/perros/add', 'PerrosController@create');
Route::get('/perros/{perro}', 'PerrosController@show');
Route::post('/perros/add', 'PerrosController@store')->name('dog.add');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


