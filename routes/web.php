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

Route::get('/', function () {
    return view('admin.index');
});

Auth::routes();

Route::resource('/gate','GateController');
Route::resource('/order','OrderController');
Route::resource('/merchandiser','MerchandiserController');
Route::resource('/store','StoreController');
Route::get('/h','StoreController@h');
Route::resource('/issuse','IssuseController');

Route::get('/home', 'HomeController@index')->name('home');
