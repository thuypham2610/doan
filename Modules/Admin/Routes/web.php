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

Route::prefix('admin')->group(function() {
    Route::view('login', 'admin::login');
    Route::post('check', 'AdminLoginController@postLogin')->name('postLogin');
    Route::view('forgotpassword', 'admin::forgotpassword');
    Route::view('recover-password', 'admin::recover-password');
    Route::view('register', 'admin::register');
    Route::get('menu', 'MenuController@getmenu');
    Route::group(['middleware'=>'auth:admin'],function()
    {
        Route::view('success', 'admin::profile')->name('profile');
        Route::view('shop/regist', 'admin::shop')->name('shop');
        Route::view('regist', 'admin::registeradmin');
        Route::post('registadmin', 'AdminRegisterController@registadmin')->name('registadmin');
    });
});
