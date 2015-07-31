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

Route::resource('survey','surveys');

Route::get('test','TestController@index');
Route::get('ch','ch@index');
Route::get('ch/survey',function () {
	return view('ch/survey/index');
});
Route::get('mnh','mnh@index');
Route::get('mnh/survey',function () {
	return view('mnh/survey/index');
});
Route::get('imci','imci@index');
Route::get('imci/survey',function () {
	return view('imci/survey/index');
});

Route::get('admin', function () {
    return view('dashboard');
});
Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('assessment','AssessmentController@create');
Route::post('start_assessment','AssessmentController@store');

