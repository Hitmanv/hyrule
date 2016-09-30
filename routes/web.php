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
Route::group(['namespace'=>'Admin', 'domain'=>env('ADMIN_DOMAIN', 'admin.exp.com'), 'middleware'=>['web']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('uptoken', function(){
        $accessKey = config('services.qiniu.access_key');
        $secretKey = config('services.qiniu.secret_key');
        $auth = new Qiniu\Auth($accessKey, $secretKey);
        $token = $auth->uploadToken('hitman');

        return response()->json(['uptoken'=>$token]);
    });

    Route::get('form', 'TemplatesController@getForm');
    Route::post('form', 'TemplatesController@postForm');
    Route::get('spinner', 'TemplatesController@getSpinner');
    Route::get('upload', 'TemplatesController@getUpload');
    Route::post('upload', 'TemplatesController@postUpload');
    Route::get('route', 'TemplatesController@getRoute');
    Route::get('elements', 'TemplatesController@getElements');
    Route::get('users', 'UsersController@index');

    // 后台资源
    $resources = config('resource');
    foreach($resources as $resource){
        Route::resource(str_plural($resource), studly_case(str_plural($resource)) . "Controller");
    }

    Route::group(['namespace'=>'Api', 'prefix'=>'api'], function() use ($resources){
        foreach($resources as $resource){
            Route::resource(str_plural($resource), studly_case(str_plural($resource)) . "Controller");
        }
    });
});
