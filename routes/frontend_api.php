<?php


Route::group(['middleware' => 'frontend_api','prefix' => 'auth'], function ($router) {

    Route::post('check', 'AuthController@check');
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
