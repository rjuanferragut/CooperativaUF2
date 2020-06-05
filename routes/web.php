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

//users CRUD
Route::get('/users', 'UserController@index')->name('users')->middleware('auth');
Route::get('/user/{id}', 'UserController@show')->name('user')->middleware('auth');
Route::post('/user/{id}', 'UserController@update')->name('user.update')->middleware('auth');
Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete')->middleware('auth');

//Suppliers CRUD
Route::get('/suppliers', 'SupplierController@index')->name('suppliers')->middleware('auth');
Route::get('/supplier/{id}', 'SupplierController@show')->name('supplier')->middleware('auth');
Route::post('/supplier/{id}', 'SupplierController@update')->name('supplier.update')->middleware('auth');
Route::get('/supplier/delete/{id}', 'SupplierController@delete')->name('supplier.delete')->middleware('auth');

//Products CRUD
Route::get('/products', 'ProductController@index')->name('products')->middleware('auth');
Route::get('/product/{id}', 'ProductController@show')->name('product')->middleware('auth');
Route::post('/product/{id}', 'ProductController@update')->name('product.update')->middleware('auth');
Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete')->middleware('auth');
