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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'HomeController@admin')->middleware('admin');

Route::resource('cars', 'CarsController')->middleware('admin');

Route::resource('lights', 'LightsController')->middleware('admin');

Route::get('fines', 'FinesController@index')->middleware('admin')->name('fines');

Route::post('fines/create', 'FinesController@create')->middleware('admin')->name('fines.create');