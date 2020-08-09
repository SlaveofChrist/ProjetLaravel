<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/auth','AuthController@index')->name('auth') ;
Route::get('/home','HomeController@index')->name('home') ;
Route::get('/user/create','UserController@create')->name('user.create') ;
Route::post('/user','UserController@store')->name('user.store') ;

/*Route::get('/admin', function() {
	return view('layouts.admin');
});*/