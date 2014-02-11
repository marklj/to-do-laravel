<?php

// Both of these routes go to the same controller function
Route::get('/', 'ToDoController@listing');
Route::get('todo', 'ToDoController@listing');

Route::get('todo/{id}', 'ToDoController@detail')->where('id', '[0-9]+');

Route::any('todo/create', 'ToDoController@create');

Route::any('todo/{id}/edit', 'ToDoController@edit');

Route::any('todo/{id}/delete', 'ToDoController@delete');