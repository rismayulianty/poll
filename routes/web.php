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

//Data controller

Route::get('test','datacontroller@test');
Route::get('test2','datacontroller@index');
Route::get('test3/{tambah}','datacontroller@test3');


