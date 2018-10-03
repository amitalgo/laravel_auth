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

//Route::get('/', function () {
//    return view('admin.dashboard');
//});

Auth::routes();

//Login Route
Route::get('/','Admin\LoginController@showLoginForm')->name('showLogin');
Route::post('/','Admin\LoginController@login')->name('admin.login.submit');

Route::prefix('admin')->group(function(){
    Route::resource('/dashboard','Admin\DashboardController');
});

Route::get('/home', 'HomeController@index')->name('home');
