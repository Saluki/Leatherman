<?php

Route::group(['middleware'=>'guest'], function(){

    Route::get('/', 'Auth\AuthController@displayForm');

    Route::post('/', 'Auth\AuthController@authenticate');

});

Route::group(['prefix'=>'app', 'middleware'=>'auth'], function(){

    Route::get('/', 'Dashboard\DashboardController@showDashboard');

    Route::get('logout', 'Auth\AuthController@logout');

});