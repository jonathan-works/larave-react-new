<?php

Route::prefix('cms')->namespace('Cms')->group(function (){
    Route::get('/', 'HomeController@index')->name('home.index');
});


////Customer
//Route::get('login', 'Api\Auth\Customer\LoginCustomerApiController@showLoginForm')->name('login');
//Route::post('login', 'Api\Auth\Customer\LoginCustomerApiController@login');
//Route::get('logout', 'Api\Auth\Customer\LoginCustomerApiController@logout')->name('logout');
//
//Route::get('password/reset', 'Api\Auth\Customer\ForgotPasswordCustomerApiController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Api\Auth\Customer\ForgotPasswordCustomerApiController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Api\Auth\Customer\ForgotPasswordCustomerApiController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Api\Auth\Customer\ResetPasswordCustomerApiController@reset');
//
//Route::get('register', 'Api\Auth\Customer\RegisterCustomerApiController@showRegistrationForm')->name('register');
//Route::post('register', 'Api\Auth\Customer\RegisterCustomerApiController@register');
//
//
////User/Cms
//Route::prefix('cms')->group(function () {
//
//    Route::get('login', 'Api\Auth\User\LoginUserApiController@showLoginForm')->name('login');
//    Route::post('login', 'Api\Auth\User\LoginUserApiController@login');
//    Route::get('logout', 'Api\Auth\User\LoginUserApiController@logout')->name('logout');
//
//    Route::get('password/reset', 'Api\Auth\User\ForgotPasswordUserApiController@showLinkRequestForm')->name('password.request');
//    Route::post('password/email', 'Api\Auth\User\ForgotPasswordUserApiController@sendResetLinkEmail')->name('password.email');
//    Route::get('password/reset/{token}', 'Api\Auth\User\ForgotPasswordUserApiController@showResetForm')->name('password.reset');
//    Route::post('password/reset', 'Api\Auth\User\ResetPasswordUserApiController@reset');
//
//    Route::get('register','Api\Auth\User\RegisterUserApiController@showRegistrationForm')->name('register');
//    Route::post('register', 'Api\Auth\User\RegisterUserApiController@register');
//
//});
