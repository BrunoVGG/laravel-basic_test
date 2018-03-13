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
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'CustomerController@index');

Route::prefix('customer')->group(function () {
    Route::get('/', 'CustomerController@index')->name('customers');
    Route::get('/register', 'CustomerController@create')->name('create.customer');
    Route::post('/store', 'CustomerController@store')->name('customer.store');
    Route::get('/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::put('/update/{id}', 'CustomerController@update')->name('customer.update');
    Route::delete('/delete/{id}', 'CustomerController@destroy')->name('customer.delete');

});

Route::get('/home', 'HomeController@index')->name('home');
