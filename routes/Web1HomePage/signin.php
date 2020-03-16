<?php 

Route::get('signIn', 'Web1HomePage\UserController@index');
Route::post('signIn', 'Web1HomePage\UserController@signIn');