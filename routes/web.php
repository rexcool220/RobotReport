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

Route::get('/uploadFile','reportController@uploadFile');

Route::post('/processFile','reportController@processFile');

Route::get('/report','reportController@showReport');

Route::get('datatables', 'DatatablesController@getIndex')
    ->name('datatables');

Route::get('datatables.data', 'DatatablesController@anyData')
    ->name('datatables.data');