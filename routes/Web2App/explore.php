<?php 
Route::get("Explore","Web2App\ExploreController@index")->name("Explore"); 
Route::get("Explore/all_trees","Web2App\ExploreController@all_trees")->name("Explore/all_trees"); 