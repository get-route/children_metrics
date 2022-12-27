<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'/cabinet'],function (){
    Route::get('/index','App\Http\Controllers\Cabinet\IndexCabinetController@index')->name('cabinet');
});


Route::get('/','App\Http\Controllers\IndexController@index')->name('index');
Route::get('/redactor','App\Http\Controllers\RedactorController@index')->name('index.redactor');


