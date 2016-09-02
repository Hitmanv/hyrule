<?php

Auth::routes();

Route::group(['namespace'=>'Www', 'domain'=>env('WWW_URL', 'www.exp.com')], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index');
});


Route::group(['namespace'=>'Admin', 'domain'=>env('ADMIN_URL', 'admin.exp.com')], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('form', 'TemplatesController@getForm');
    Route::post('form', 'TemplatesController@postForm');
    Route::get('route', 'TemplatesController@getRoute');
});
