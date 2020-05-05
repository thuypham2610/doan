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
Route::get('/', 'CategoryController@getdanhsach')->name('home');
Route::post('reset-password', 'ResetPasswordController@sendMail')->name('sendMail');
Route::post('reset-password/{token}', 'ResetPasswordController@reset')->name('resetpassword');
Route::get('reset-password/changepassword/{token}', 'ResetPasswordController@changepassword')->name('savepass');
Route::prefix('blog')->group(function () {
    Route::get('/pricefilter/{price}', 'BlogController@price')->name('pricefilter');
    Route::get('/product', 'CategoryController@allproduct')->name('all');
    Route::get('/product/{id}', 'CategoryController@index')->name('detail');
    Route::get('/producttradefilter/{id}', 'CategoryController@producttrade')->name('filter');
    Route::get('/productcatefilter/{id}', 'CategoryController@productcate')->name('catefilter');
    Route::get('product/newarrivals/{id}', 'CategoryController@newarrivals')->name('newarrivals');
    Route::post('search', 'CategoryController@search')->name('search');
    Route::post('cart', 'ShoppingCartController@store')->name('cart');
    Route::view('detail', 'blog::pay')->name('paydetail');
    Route::view('cart_detail', 'blog::cart')->name('cart_detail');
    Route::get('delete/{id}', 'ShoppingCartController@delete')->name('delete');
    Route::get('update', 'ShoppingCartController@update')->name('update');
    Route::post('pay', 'ShoppingCartController@pay')->name('pay');
    Route::post('regist', 'BlogController@regist')->name('regist');
    Route::view('about', 'blog::about')->name('about');
    Route::view('mailus', 'blog::mailus')->name('mailus');
    Route::post('/sendmail', 'BlogController@mail')->name('sendmail');

    Route::group(['middleware' => 'auth:web'], function () {
        Route::post('updateprofile', 'BlogController@update')->name('updateprofile');
        Route::view('/profile', 'blog::profile')->name('profileuser');
        Route::view('/oder', 'blog::order')->name('order_user');
        Route::get('/deleteorder/{id}', 'BlogController@destroy')->name('deleteorder');
        Route::view('changepass', 'admin::recover-password')->name('changepass');
        Route::post('change/password', 'BlogController@updatepass')->name('changepassword');
    });
});
