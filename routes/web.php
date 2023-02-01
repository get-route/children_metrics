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
//Index
Route::get('/','App\Http\Controllers\IndexController@index')->name('index');

Route::group(['prefix'=>'/metrika'],function (){
   Route::get('/{url_metric}','App\Http\Controllers\Frontend\Metrik\IndexMetricController@index')->name('metrika.index');
});
Route::group(['prefix'=>'/cabinet','middleware'=>['cabinet','auth','verified']],function (){
    Route::get('/index','App\Http\Controllers\Cabinet\IndexCabinetController@index')->name('cabinet');
});

//Admin panel
Route::group(['prefix'=>'/adm_panel','middleware'=>['auth','admin']],function (){
    Route::get('/index','App\Http\Controllers\Admin\IndexAdminController@index')->name('admin');
    Route::get('/metrics_admin','App\Http\Controllers\Admin\MetricsAdminController@index')->name('metrics_admin.index');
    Route::get('/comments_admin','App\Http\Controllers\Admin\CommentsAdminController@index')->name('comments_admin.index');
    Route::get('/tags_admin','App\Http\Controllers\Admin\TagsAdminController@index')->name('tags_admin.index');
});



//Auth controller/Register Controller
//Route::group(['middleware'=>'guest'], function (){
//
//    Route::get('/authentication','App\Http\Controllers\Auth\AuthController@auth')->name('auth.create');
//    Route::post('/authentication','App\Http\Controllers\Auth\AuthController@store')->name('auth.store');
//    Route::get('/register','App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register.create');
//    Route::post('/register','App\Http\Controllers\Auth\RegisterController@register')->name('register');
//});
//
//Auth::routes(['verify'=>true]);
//
//Route::get('/verify_email',['\App\Http\Controllers\Auth\EmailVerificationController@show'])->middleware('auth')->name('verification.notice');
//
//
//Cabinet Metric

Route::get('/redactor','App\Http\Controllers\RedactorController@index')->name('index.redactor');

Route::get('/logout','App\Http\Controllers\Auth\LogoutController')->name('logout');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('index');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (\Illuminate\Http\Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Auth::routes(['verify'=>true]);




