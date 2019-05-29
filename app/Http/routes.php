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

Route::get('show', 'inp@index');

Route::get('tasks/{id?}', 'DBController@showTasks');

Route::get('addTask', 'TestController@showForm');

Route::post('saveTask', 'TestController@saveTask');

Route::get('Dataform', 'NewFormController@showform');

Route::post('AddData', 'NewFormController@AddData');

Route::get('ShowData', 'NewFormController@ShowData');

Route::get('Search', function () {
    return view('Search');
});
Route::get('Searching', 'SearchingController@Searching');
