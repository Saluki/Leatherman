<?php

Route::get('/', 'Auth\AuthController@displayForm');

Route::post('/', 'Auth\AuthController@authenticate');
