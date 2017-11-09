<?php

use Illuminate\Http\Request;

Route::get('/v1/lawyers', 'LawyerController@index');
Route::post('/v1/lawyers', 'LawyerController@create');
Route::put('/v1/lawyers/{id}', 'LawyerController@update');
Route::get('/v1/lawyers/{id}', 'LawyerController@get');
Route::delete('/v1/lawyers/{id}', 'LawyerController@delete');
