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

Route::get('/', 'MainController@index')->name('index');
Route::get('/exclusive', 'MainController@exclusive')->name('exclusive');
Route::get('/confirmation/{id}', 'MainController@confirmationById')->name('confirmationById');
Route::post('/confirmation', 'MainController@confirmation')->name('confirmation');
Route::get('/charity', 'MainController@charity')->name('charity');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/founder', 'MainController@founder')->name('founder');
Route::get('/offers', 'MainController@offersAll')->name('offersAll');
Route::get('/offers/{id}', 'MainController@offers')->name('offers');
