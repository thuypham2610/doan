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
Route::post('login', 'LoginController@postLogin')->name('postLogin');
Route::get('check', 'LoginController@getLogout')->name('getLogout');
Route::view('forgotpassword', 'admin::forgotpassword')->name('forgotpass');
Route::prefix('admin')->group(function () {
    //Route::view('login', 'admin::login')->name('login');
    Route::view('recover-password', 'admin::recover-password');
    Route::view('register', 'admin::register');
    Route::get('menu', 'MenuController@getmenu');
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::view('success', 'admin::profile')->name('profile');
        Route::get('userlist', 'AdminController@index')->name('userlist');
        Route::get('user/edit/{id}', 'AdminController@edit')->name('useredit');
        Route::post('user/update/{id}', 'AdminController@update')->name('updateadmin');
        Route::view('regist', 'admin::registeradmin')->name('regist1');
        Route::post('registadmin', 'AdminRegisterController@registadmin')->name('registadmin');

        //product
        Route::get('prolist', 'PageController@getpro')->name('prolist');
        Route::view('pro/regist', 'admin::proregist')->name('addproduct');
        Route::post('pro/registpro', 'PageController@regist')->name('registpro');
        Route::get('pro/edit/{id}', 'PageController@getedit')->name('proedit');
        Route::post('pro/update/{id}', 'PageController@update')->name('update');
        Route::get('pro/delete/{id}', 'PageController@destroy')->name('prodelete');

        //trademark
        Route::get('tradelist', 'TrademarkController@gettrade')->name('tradelist');
        Route::view('trade/regist', 'admin::traderegist')->name('addtrade');
        Route::post('trade/registtrade', 'TrademarkController@regist')->name('registtrade');
        Route::get('trade/edit/{id}', 'TrademarkController@getedit')->name('tradeedit');
        Route::post('trade/update/{id}', 'TrademarkController@update')->name('edittrade');
        Route::get('trade/delete/{id}', 'TrademarkController@destroy')->name('tradedelete');

        //category
        Route::get('catelist', 'CategoryController@getcate')->name('catelist');
        Route::view('cate/regist', 'admin::cateregist')->name('addcate');
        Route::post('cate/registcate', 'CategoryController@regist')->name('registcate');
        Route::get('cate/edit/{id}', 'CategoryController@getedit')->name('cateedit');
        Route::post('cate/update/{id}', 'CategoryController@update')->name('editcate');
        Route::get('cate/delete/{id}', 'CategoryController@destroy')->name('catedelete');

        //order
        Route::get('orderlist', 'OrderController@getorder')->name('orderlist');
        Route::view('order/edit/{id}', 'admin::proregist')->name('orderedit');
        Route::get('order/confirm/{id}', 'OrderController@update')->name('confirmorder');

        //order detail
        Route::get('detaillist', 'OrderDetailController@getorderdetail')->name('detaillist');
        Route::view('detail/edit/{id}', 'admin::proregist')->name('detailedit');
    });
});
