<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*首页*/
Route::get('/', function () {
        return view('index');
});

/*权限*/
Route::group(['namespace' => 'Auth'], function() {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('register', 'RegisterController@showRegistrationForm');
        Route::post('register', 'RegisterController@register');
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        Route::get('password', 'ForgotPasswordController@showLinkRequestForm');
        Route::post('email', 'ForgotPasswordController@sendResetLinkEmail');
    });
    Route::get('logout', 'LoginController@logout');
});



/*学习相关*/
Route::get('home/info-list', 'FileController@searchFile');
Route::get('home/info-detail/{id}','FileController@searchFileById');

Route::get('vue/index', 'VueController@index');

Route::resource('information', 'FileController');
Route::post('upload', 'CommonController@upload');



