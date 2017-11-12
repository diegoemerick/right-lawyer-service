<?php

use Illuminate\Http\Request;

Route::get('/v1/lawyer', 'LawyerController@index');
Route::post('/v1/lawyer', 'LawyerController@create');
Route::put('/v1/lawyer/{id}', 'LawyerController@update');
Route::get('/v1/lawyer/{id}', 'LawyerController@get');
Route::delete('/v1/lawyer/{id}', 'LawyerController@delete');
