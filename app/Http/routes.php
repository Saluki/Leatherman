<?php

Route::group(['middleware'=>'guest'], function(){

    Route::get('/', 'Auth\AuthController@displayForm');

    Route::post('/', 'Auth\AuthController@authenticate');

});

Route::group(['prefix'=>'app', 'middleware'=>'auth'], function(){

    Route::get('/', 'Dashboard\DashboardController@showDashboard');

    Route::get('scouts', 'Scouts\ScoutsController@showAll');

    Route::get('scouts/{id}', 'Scouts\ScoutsController@showScout')->where('id', '[0-9]+');

    Route::get('scouts/filtre/{nb}', 'Scouts\ScoutsController@filterList')->where('nb', '[1234]');

    Route::get('scouts/ajouter/scout', 'Scouts\RegisterController@showScoutForm');

    Route::post('scouts/ajouter/scout', 'Scouts\RegisterController@storeScout');

    Route::post('scouts/ajouter/parents', 'Scouts\RegisterController@storeParents');

    Route::get('scouts/rechercher', 'Scouts\SearchController@search');

    Route::get('scouts/export', 'Scouts\ExportController@exportScouts');

    Route::get('scouts/adresses', 'Scouts\ExportController@exportAddresses');

    Route::get('logout', 'Auth\AuthController@logout');

});