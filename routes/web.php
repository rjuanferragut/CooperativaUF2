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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//users CRUD
Route::get('/users', 'UserController@index')->name('users');
Route::get('/user/{id}', 'UserController@show')->name('user');
Route::post('/user/{id}', 'UserController@update')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
//Suppliers CRUD
Route::get('/suppliers', 'SupplierController@index')->name('suppliers');
Route::get('/supplier/{id}', 'SupplierController@show')->name('supplier');
Route::post('/supplier/{id}', 'SupplierController@update')->name('supplier.update');
Route::get('/supplier/delete/{id}', 'SupplierController@delete')->name('supplier.delete');
