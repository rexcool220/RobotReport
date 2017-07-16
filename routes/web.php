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

Route::get('/report/{reportId}','reportController@showReport');

Route::get('datatables', 'DatatablesController@getIndex')
    ->name('datatables');