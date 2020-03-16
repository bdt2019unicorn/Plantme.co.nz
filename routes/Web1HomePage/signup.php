<?php
Route::get('signUp', 'Web1HomePage\UserController@signUp');
Route::post('signUp', 'Web1HomePage\UserController@addUser');