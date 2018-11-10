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
    return view('welcome');
});

// Route::get('ajaxdata', 'AjaxdataController@index')->name('ajaxdata');
// Route::get('ajaxdata/getdata', 'AjaxdataController@getdata')->name('ajaxdata.getdata');

// Route::get('datatables', 'DatatablesController', [
//     'anyData'  => 'datatables.data',
//     'getIndex' => 'datatables',
// ]);

Route::get('/home', 'UsersController@index')->name('home');
Route::get('users', 'UsersController@getUsers')->name('getusers');
Route::get('users', 'UsersController@getTable')->name('gettable');