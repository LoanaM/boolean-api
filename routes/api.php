<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/studenti','Api\TestController@index');
Route::get('/studenti/{id}','Api\TestController@show');

Route::get('/insegnanti','Api\TeachersController@index');
Route::get('/insegnanti/{id}','Api\TeachersController@show');

Route::get('/corsi','Api\CoursesController@index');
Route::get('/corsi/{id}','Api\CoursesController@show');



// 127.0.0.1 ->env error = sostituire con localhost
