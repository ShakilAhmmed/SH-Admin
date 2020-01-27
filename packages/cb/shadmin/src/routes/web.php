<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/sss', function () {
	    return view('SHAdmin::login');
	});
});

