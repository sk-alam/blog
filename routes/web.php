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

Auth::routes();
Route::get('/','BlogController@index');
Route::get('/home', 'HomeController@index');
Route::get('/blog/create','BlogController@create');
Route::get('/blog/edit/{id}','BlogController@edit');
Route::post('/blog/save','BlogController@save');
Route::get('/blog/delete/{id}','BlogController@delete');
Route::get('/blog/show/{id}','BlogController@show');
