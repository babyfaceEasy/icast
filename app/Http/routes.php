<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('layouts.base');
});*/

Route::get('/','StartController@index');

Route::get('/test_date','StartController@index');

Route::get('/coord-image/{id}','StartController@getCoordinatesImage');

