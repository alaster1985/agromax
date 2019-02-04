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
Route::get('admin/editOrders/{id}', 'Admin\OrdersController@editOrders')->name('editOrders');
Route::post('admin/updateOrder', 'Admin\OrdersController@updateOrder')->name('updateOrder');
Route::get('admin/deleteOrder/{id}', 'Admin\OrdersController@deleteOrder')->name('deleteOrder');

Route::get('admin/viewLots', 'Admin\LotsController@viewLots')->name('viewLots');
Route::get('admin/editLots/{id}', 'Admin\LotsController@editLots')->name('editLots');
Route::post('admin/updateLot', 'Admin\LotsController@updateLot')->name('updateLot');
Route::get('admin/createLot', 'Admin\LotsController@createLot')->name('createLot');
Route::post('admin/addLot', 'Admin\LotsController@addLot')->name('addLot');

Route::get('admin/viewCategories', 'Admin\CategoriesController@viewCategories')->name('viewCategories');
Route::get('admin/editCategories/{id}', 'Admin\CategoriesController@editCategories')->name('editCategories');
Route::post('admin/updateCategory', 'Admin\CategoriesController@updateCategory')->name('updateCategory');
Route::get('admin/createCategory', 'Admin\CategoriesController@createCategory')->name('createCategory');
Route::post('admin/addCategory', 'Admin\CategoriesController@addCategory')->name('addCategory');


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
