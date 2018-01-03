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


Route::get('/sendsms', 'HomeController@sendsms')->name('sendsms');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/logout','Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::prefix('admin')->group(function(){


Route::get('/login','Auth\AdminLoginController@showloginform')->name('admin.login');

Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/', 'AdminHomeController@index')->name('admin.dashboard');




});

