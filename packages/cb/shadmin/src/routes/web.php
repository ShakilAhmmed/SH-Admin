<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
	    return view('SHAdmin::welcome');
	});

	Route::get('/login', function () {
	    return view('SHAdmin::login');
	});
});

