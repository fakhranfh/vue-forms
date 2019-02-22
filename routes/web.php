<?php

Route::get('/', function () {
  return '';
});

Route::get('projects/create', 'ProjectsController@create');
Route::post('projects', 'ProjectsController@store');
