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
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {
    Route::get('show/{id}', 'UserController@show')->name('users.show');
});

Auth::routes();

Route::get('/', function () {
    return view('top');
});


Route::get('/home', 'HomeController@index')->name('home');
