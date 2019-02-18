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

Route::middleware('auth')->group(function () {

    Route::get('admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');

    Route::get('admin/viewUsers', 'Admin\AdminController@viewUsers')->name('viewUsers');
//    Route::get('admin/editUsers/{id}', 'Admin\AdminController@editUsers')->name('editUsers');
    Route::get('admin/editUsers', 'Admin\AdminController@editUsers')->name('editUsers');
    Route::post('admin/updateUsers', 'Admin\AdminController@updateUsers')->name('updateUsers');
    Route::get('admin/createUser', 'Admin\AdminController@createUser')->name('createUser');
    Route::post('admin/addUser', 'Admin\AdminController@addUser')->name('addUser');
    Route::get('admin/deleteUser/{id}', 'Admin\AdminController@deleteUser')->name('deleteUser');

    Route::get('admin/viewOrders', 'Admin\OrdersController@viewOrders')->name('viewOrders');
//    Route::get('admin/editOrders/{id}', 'Admin\OrdersController@editOrders')->name('editOrders');
    Route::get('admin/editOrders', 'Admin\OrdersController@editOrders')->name('editOrders');
    Route::post('admin/updateOrder', 'Admin\OrdersController@updateOrder')->name('updateOrder');
    Route::get('admin/deleteOrder/{id}', 'Admin\OrdersController@deleteOrder')->name('deleteOrder');

    Route::get('admin/viewLots', 'Admin\LotsController@viewLots')->name('viewLots');
    Route::get('admin/editLots/{id}', 'Admin\LotsController@editLots')->name('editLots');
    Route::get('admin/editLots', 'Admin\LotsController@editLots')->name('editLots');
    Route::post('admin/updateLot', 'Admin\LotsController@updateLot')->name('updateLot');
    Route::get('admin/createLot', 'Admin\LotsController@createLot')->name('createLot');
    Route::post('admin/addLot', 'Admin\LotsController@addLot')->name('addLot');

    Route::get('admin/viewCategories', 'Admin\CategoriesController@viewCategories')->name('viewCategories');
//    Route::get('admin/editCategories/{id}', 'Admin\CategoriesController@editCategories')->name('editCategories');
    Route::get('admin/editCategories', 'Admin\CategoriesController@editCategories')->name('editCategories');
    Route::post('admin/updateCategory', 'Admin\CategoriesController@updateCategory')->name('updateCategory');
    Route::get('admin/createCategory', 'Admin\CategoriesController@createCategory')->name('createCategory');
    Route::post('admin/addCategory', 'Admin\CategoriesController@addCategory')->name('addCategory');

    Route::get('admin/viewLanguages', 'Admin\LanguagesController@viewLanguages')->name('viewLanguages');
    Route::get('admin/editLanguages', 'Admin\LanguagesController@editLanguages')->name('editLanguages');
    Route::post('admin/updateLanguage', 'Admin\LanguagesController@updateLanguage')->name('updateLanguage');
    Route::post('admin/uploadTranslationFile', 'Admin\LanguagesController@uploadTranslationFile')->name('uploadTranslationFile');
});

Route::get('/', 'MainController@index')->name('index');
Route::get('/exclusive', 'MainController@exclusive')->name('exclusive');
Route::get('/confirmation', 'MainController@confirmationById')->name('confirmationById');
Route::get('/exConfirm', 'MainController@exConfirm')->name('exConfirm');
Route::get('/products', 'MainController@products')->name('products');
Route::get('/charity', 'MainController@charity')->name('charity');
Route::get('/contacts', 'MainController@contacts')->name('contacts');
Route::get('/founder', 'MainController@founder')->name('founder');
Route::get('/offers', 'MainController@offers')->name('offers');
Route::get('/company', 'MainController@company')->name('company');
Route::get('/partnership', 'MainController@partnership')->name('partnership');
Route::post('/getLanguagesForSelect', 'Admin\LanguagesController@getLanguagesForSelect')->name('getLanguagesForSelect');
Route::post('/createOrder', 'Admin\OrdersController@createOrder')->name('createOrder');
//Route::get('/charityar', function () {return view('charityar');});
