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


Route::post('/search','WelcomeController@search');

Route::post('/eventdetail','EventController@detail');
Route::get('/eventadd','EventController@add');
Route::post('/eventsave','EventController@save');
Route::post('/filter','EventController@filter');
Route::get('/eventlist','EventController@index');
Route::get('/viewreport','EventController@viewreport');
Route::post('/savereport','EventController@savereport');

Route::post('/savereview','ReviewController@savereview');

Route::get('/cart','CartController@index');


Route::get('/', function () {
    return view('welcome');
});


Route::auth();

Route::get('/home', 'HomeController@index');
