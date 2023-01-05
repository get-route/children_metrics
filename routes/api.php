<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'/adm_panel'],function (){
    Route::get('/index','App\Http\Controllers\Admin\IndexAdminController@index')->name('admin');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@index');
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@index');
    //----Tag Params----
    Route::post('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@store');
    Route::get('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@show');
    Route::patch('/tags_admin/{id}','App\Http\Controllers\Admin\TagsAdminController@update');
    Route::delete('/tags_admin/{id}','App\Http\Controllers\Admin\TagsAdminController@destroy');
    //----Comment Params----
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@show');
    Route::post('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@store');
});
