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
    return view('home');
});

Auth::routes(['dashboard']);

Route::resource('listings', 'ListingsController');

Route::get('/listings/{id}{name}', 'ListingsController@showlisting');

Route::get('/dashboard', 'DashboardController@index');
