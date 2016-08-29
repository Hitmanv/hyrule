<?php
/**
 * Author: hitman
 * Date: 29/8/2016
 * Time: 11:59 PM
 */

Route::get('/', function () {
    return view('admin.index');
});

Route::get('form', 'TemplatesController@getForm');
Route::post('form', 'TemplatesController@postForm');