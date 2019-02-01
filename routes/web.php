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

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');

Route::get('admin/viewUsers', 'Admin\AdminController@viewUsers')->name('viewUsers');
Route::get('admin/editUsers', 'Admin\AdminController@editUsers')->name('editUsers');
Route::get('admin/createUser', 'Admin\AdminController@createUser')->name('createUser');

Route::get('admin/viewOrders', 'Admin\OrdersController@viewOrders')->name('viewOrders');
Route::get('admin/editOrders', 'Admin\OrdersController@editOrders')->name('editOrders');

Route::get('admin/viewLots', 'Admin\LotsController@viewLots')->name('viewLots');
Route::get('admin/editLots', 'Admin\LotsController@editLots')->name('editLots');
Route::get('admin/createLot', 'Admin\LotsController@createLot')->name('createLot');

Route::get('admin/viewCategories', 'Admin\CategoriesController@viewCategories')->name('viewCategories');
Route::get('admin/editCategories', 'Admin\CategoriesController@editCategories')->name('editCategories');
Route::get('admin/createCategory', 'Admin\CategoriesController@createCategory')->name('createCategory');


Route::get('/', 'MainController@index')->name('index');
Route::get('/exclusive', 'MainController@exclusive')->name('exclusive');
Route::get('/confirmation', 'MainController@confirmationById')->name('confirmationById');
Route::get('/exConfirm', 'MainController@exConfirm')->name('exConfirm');
Route::post('/createOrder', 'Admin\OrdersController@createOrder')->name('createOrder');
Route::get('/products', 'MainController@index')->name('index');
Route::get('/charity', 'MainController@charity')->name('charity');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/founder', 'MainController@founder')->name('founder');
Route::get('/offers', 'MainController@offers')->name('offers');
Route::get('/company', 'MainController@company')->name('company');
Route::get('/partnership', 'MainController@partnership')->name('partnership');
Route::get('/charityar', function () {return view('charityar');});
