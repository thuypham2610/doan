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
Route::prefix('blog')->group(function() {
    Route::view('/profile','blog::profile')->name('profileuser');
    Route::get('/','CategoryController@getdanhsach')->name('home');
    Route::get('/product','CategoryController@allproduct')->name('all');
    Route::get('/product/{id}','CategoryController@index')->name('detail');
    Route::get('/producttradefilter/{id}','CategoryController@producttrade')->name('filter');
    Route::get('/productcatefilter/{id}','CategoryController@productcate')->name('catefilter');
});
