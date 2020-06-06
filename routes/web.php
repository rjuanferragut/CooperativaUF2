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
Route::get('/users', 'UserController@index')->middleware('auth')->name('users');
Route::get('/user/{id}', 'UserController@show')->middleware('auth')->name('user');
Route::post('/user/{id}', 'UserController@update')->middleware('auth')->name('user.update');
Route::get('/user/delete/{id}', 'UserController@delete')->middleware('auth')->name('user.delete');

//Suppliers CRUD
Route::get('/suppliers', 'SupplierController@index')->middleware('auth')->name('suppliers');
Route::get('/supplier/{id}', 'SupplierController@show')->middleware('auth')->name('supplier');
Route::get('/newSupplier', 'SupplierController@form')->middleware('auth')->name('supplier.form');
Route::post('/supplier/create', 'SupplierController@create')->middleware('auth')->name('supplier.create');
Route::post('/supplier/{id}', 'SupplierController@update')->middleware('auth')->name('supplier.update');
Route::get('/supplier/delete/{id}', 'SupplierController@delete')->middleware('auth')->name('supplier.delete');

//Products CRUD
Route::get('/products', 'ProductController@index')->middleware('auth')->name('products');
Route::get('/product/{id}', 'ProductController@show')->middleware('auth')->name('product');
Route::get('/product/delete/{id}', 'ProductController@delete')->middleware('auth')->name('product.delete');
Route::get('/newProduct', 'ProductController@form')->middleware('auth')->name('product.form');
Route::post('/product/create', 'ProductController@create')->middleware('auth')->name('product.create');
Route::post('/product/{id}', 'ProductController@update')->middleware('auth')->name('product.update');

//Orders
Route::get('/orders', 'OrderController@index')->middleware('auth')->name('orders');
Route::get('/newOrder', 'OrderController@form')->middleware('auth')->name('order.form');
Route::get('/orderCreate', 'OrderController@create')->middleware('auth')->name('order.create');
