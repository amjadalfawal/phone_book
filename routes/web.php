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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::prefix('admin')->group(function() {
    // Users
	Route::get('/' , 'UsersController@index')->name('admin.users');
	Route::post('/' , 'UsersController@data');
    Route::get('/users/create' , 'UsersController@create')->name('create.user');
    Route::post('/users/store' , 'UsersController@store')->name('store.user');
    Route::get('/users/{id}/edit' , 'UsersController@edit')->name('edit.user');
    Route::post('/users/{id}/update' , 'UsersController@update')->name('update.user');
    Route::get('/users/{id}' , 'UsersController@show')->name('show.user');
    Route::post('/users/{id}/delete' ,'UsersController@destroy');

    // phone_book

    Route::get('/phone_book' , 'PhoneBookController@index')->name('admin.phonebook');
	Route::post('/phone_book' , 'PhoneBookController@data');
    Route::get('/phone_book/create' , 'PhoneBookController@create')->name('create.phonebook');
    Route::post('/phone_book/store' , 'PhoneBookController@store')->name('store.phonebook');
    Route::get('/phone_book/{id}/edit' , 'PhoneBookController@edit')->name('edit.phonebook');
    Route::post('/phone_book/{id}/update' , 'PhoneBookController@update')->name('update.phonebook');
    Route::get('/phone_book/{id}' , 'PhoneBookController@show')->name('show.phonebook');
    Route::post('/phone_book/{id}/delete' ,'PhoneBookController@destroy');

});



Route::prefix('employee')->group(function() {
    // Users
	Route::get('/' , 'UsersController@index')->name('admin.users');
	Route::post('/' , 'UsersController@data');
    Route::get('/users/create' , 'UsersController@create')->name('create.user');
    Route::post('/users/store' , 'UsersController@store')->name('store.user');
    Route::get('/users/{id}/edit' , 'UsersController@edit')->name('edit.user');
    Route::post('/users/{id}/update' , 'UsersController@update')->name('update.user');
    Route::get('/users/{id}' , 'UsersController@show')->name('show.user');
    Route::post('/users/{id}/delete' ,'UsersController@destroy');
    // Representatives

});
