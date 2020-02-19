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
    Route::post('check', 'LoginController@postLogin')->name('postLogin');
    Route::view('forgotpassword', 'admin::forgotpassword');
    Route::view('recover-password', 'admin::recover-password');
    Route::view('register', 'admin::register');
    Route::get('menu', 'MenuController@getmenu');
    Route::group(['middleware'=>'auth:admin'],function()
    {
        Route::view('success', 'admin::profile')->name('profile');
        Route::view('regist', 'admin::registeradmin')->name('regist');
        Route::post('registadmin', 'AdminRegisterController@registadmin')->name('registadmin');

        //product
        Route::get('prolist', 'PageController@getpro')->name('prolist');
        Route::view('pro/regist', 'admin::proregist')->name('addproduct');
        Route::get('pro/edit/{id}', 'PageController@getedit')->name('proedit');

        //trademark
        Route::get('tradelist', 'TrademarkController@gettrade')->name('tradelist');
        Route::view('trade/regist', 'admin::cateregist')->name('addtrade');
        Route::post('trade/registtrade', 'AdminRegisterController@registadmin')->name('registtrade');
        Route::get('trade/edit/{id}', 'TrademarkController@getedit')->name('tradeedit');
        Route::post('trade/edittrade', 'AdminRegisterController@registadmin')->name('edittrade');

        //category
        Route::get('catelist', 'CategoryController@getcate')->name('catelist');
        Route::view('cate/regist', 'admin::cateregist')->name('addcate');
        Route::get('cate/edit/{id}', 'CategoryController@getedit')->name('cateedit');

        //order
        Route::get('orderlist', 'OrderController@getorder')->name('orderlist');
        Route::view('order/edit/{id}', 'admin::proregist')->name('orderedit');

        //order detail
        Route::get('detaillist', 'OrderDetailController@getorderdetail')->name('detaillist');
        Route::view('detail/edit/{id}', 'admin::proregist')->name('detailedit');
    });
});
