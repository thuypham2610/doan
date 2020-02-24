<?php

use Illuminate\Http\Request;

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
Route::post('reset-password', 'ResetPasswordController@sendMail')->name('sendMail');
Route::post('reset-password/{token}', 'ResetPasswordController@reset')->name('resetpassword');
Route::middleware('auth:api')->get('/blog', function (Request $request) {
    return $request->user();
});
