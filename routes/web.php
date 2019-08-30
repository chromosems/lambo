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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/cars', 'CarController');

Route::post('cars/{id}/photos', 'CarController@addPhoto');

Route::get('/events', 'EventController@index');

Route::resource('supplier', 'SupplierController');

// Route::get('/home','HomeController@makeChart');

// Route::get('/supplier', 'SupplierController@index');
// Route::get('/supplier/create', 'SupplierController@create');
// Route::post('/supplier', 'SupplierController@store');
// Route::get('/supplier/{id}', 'SupplierController@show');
// Route::get('/supplier/{supplier}/edit', 'SupplierController@edit');
// Route::put('/supplier/{id}', 'SupplierController@update');
// Route::delete('supplier/{id}','SupplierController@destroy');
