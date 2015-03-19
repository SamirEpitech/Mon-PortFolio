<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showIndex');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@login');
Route::get('/signup', 'UsersController@signup');
Route::post('/signup', 'UsersController@signup');
App::missing(function($exception)
{
    return Response::view('erreors404', array(), 404);
});