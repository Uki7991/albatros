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

Route::get('/admin', 'HomeController@index');

Route::get('/book', 'BookingController@index');

Route::post('/bookCreate', 'BookingController@create');

Route::get('/room/{id}', 'BookingController@info');

Route::get('/rooms', function() {
	return view('rooms');
});
Route::get('/map', function() {
	return view('map');
});