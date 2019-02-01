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
