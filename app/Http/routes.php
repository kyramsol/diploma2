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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Search', function () {
    return view('MainPage');
});
Route::get('/AddStudent', function () {
    return view('AddStudent');
});
Route::get('/AddDiploma', function () {
    return view('AddDiploma');
});
Route::get('/SearchResults', function () {
    return view('SearchResults');
});

Route::auth();

Route::get('/home', 'HomeController@index');
