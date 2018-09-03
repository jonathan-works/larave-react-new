<?php

Route::get('password/reset/{token}', 'Api\Auth\User\ForgotPasswordUserApiController@showResetForm')->name('password.reset');

Route::prefix('auth')->group(function (){

    //Customer
    Route::prefix('customer')->namespace('Api\Auth\Customer')->group(function (){
        Route::post('/', 'LoginCustomerApiController@login');
        Route::post('logout', 'LoginCustomerApiController@logout');
        Route::post('refresh', 'LoginCustomerApiController@refresh');
        Route::post('is-logged', 'LoginCustomerApiController@isLogged');
        Route::post('register', 'RegisterCustomerApiController@register');
        Route::post('password-recovery', 'ForgotPasswordCustomerApiController@sendResetLinkEmail');
        Route::post('password-reset', 'ResetPasswordCustomerApiController@reset');

    });

    //User
    Route::prefix('user')->namespace('Api\Auth\User')->group(function (){
        Route::post('/', 'LoginUserApiController@login');
        Route::post('logout', 'LoginUserApiController@logout');
        Route::post('refresh', 'LoginUserApiController@refresh');
        Route::post('is-logged', 'LoginUserApiController@isLogged');
        Route::post('register', 'RegisterUserApiController@register');
        Route::post('password-recovery', 'ForgotPasswordUserApiController@sendResetLinkEmail');
        Route::post('password-reset', 'ResetPasswordUserApiController@reset');
    });

});

Route::middleware('auth:api-cms')->group( function() {

    //Customer
    Route::prefix('customer')->namespace('Api\Auth\Customer')->group(function (){
        Route::get('/',  'CustomerApiController@details');
    });

});

Route::middleware('auth:api')->group( function() {

    //User
    Route::prefix('user')->namespace('Api\Auth\User')->group(function (){
        Route::get('/', 'UserApiController@details');
    });

});