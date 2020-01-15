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


Route::resource('/driver', 'DriverController');
Route::resource('/owner', 'OwnerController');
Route::resource('/car', 'CarController');

Route::get('/deleteowner/{owner}/','OwnerController@destroy');




