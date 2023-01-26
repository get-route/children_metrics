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

//Admin panel
Route::group(['prefix'=>'/adm_panel'],function (){
    Route::get('/index','App\Http\Controllers\Admin\IndexAdminController@index')->name('admin');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@index')->name('metrics_admin.index');
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@index')->name('comments_admin.index');
    Route::get('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@index')->name('tags_admin.index');
});

//Index
Route::get('/','App\Http\Controllers\IndexController@index')->name('index');

//Auth controller/Register Controller
Route::get('/register','App\Http\Controllers\Auth\RegisterController@create')->name('register.create');

Route::get('/authentication','App\Http\Controllers\Auth\AuthController@auth')->name('auth.create');


//Cabinet Metric
Route::get('/redactor','App\Http\Controllers\RedactorController@index')->name('index.redactor');


