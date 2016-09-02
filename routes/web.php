<?php

Auth::routes();

// web 应用
Route::group(['namespace'=>'Www', 'domain'=>env('WWW_DOMAIN', 'www.exp.com')], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');
});

// 后台管理
Route::group(['namespace'=>'Admin', 'domain'=>env('ADMIN_DOMAIN', 'admin.exp.com'), 'middleware'=>['auth', 'admin_auth']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('form', 'TemplatesController@getForm');
    Route::post('form', 'TemplatesController@postForm');
    Route::get('route', 'TemplatesController@getRoute');
});
