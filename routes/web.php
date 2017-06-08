<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/', 'PostsController@store');


/*

POST
view > router Web > methode.controller (controller@method) > model > DB

get

route > controller@method > model > DB > model > controller > view
