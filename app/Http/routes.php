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



Route::post('survey/{id}','surveys@store');


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



Route::get('assessments/edit/{id}','surveys@edit');

Route::get('assessments/show/{id}','surveys@show');
Route::get('assessments/create/{id}/{sv}','surveys@create');
Route::get('assessment/{sv}','AssessmentController@index');
Route::get('assessments/{id}/{county}','AssessmentController@show');
Route::get('assessments/{id}/{date}/{term}/{county}','AssessmentController@create');
Route::post('assessments/{id}','AssessmentController@store');



