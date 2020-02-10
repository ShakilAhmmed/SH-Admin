<?php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::POST('/system_c', 'system_configuration@index');
Route::get('/system_crefresh','system_configuration@system_crefresh');