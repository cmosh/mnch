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

Route::get('/','AnalyticsController@index');
Route::post('/analytics/ajax','AnalyticsController@ajax');
Route::get ('Autosaved/{UserId}','AssessmentController@autosaved');

Route::post('survey/{id}/{status}','surveys@update');

Route::post('survey/survey/{id}/{status}','surveys@update');

Route::get('status/{status}/{AssID}','AssessmentController@status');

Route::post('survey/autosave','surveys@autosave');

Route::post('survey/save','surveys@saveajax');







Route::get('home', 'HomeController@index');
Route::get('usermanagement','UserManagement@index');
Route::get('usermanagement/viewusers','UserManagement@index');
Route::get('usermanagement/monitor','UserManagement@show');
Route::get('usermanagement/addusers','UserManagement@create');
Route::get('usermanagement/addusers_multi','UserManagement@multi');
Route::post('usermanagement/multi_upload','UserManagement@upload');


Route::get('usermanagement/editusers/{id}','UserManagement@edit');
Route::post('usermanagement/update','UserManagement@update');

Route::post('usermanagement/store','UserManagement@store');
Route::get('/auth/register',function(){

	

	print_r('Stop we know who you are!');

});
Route::controllers([
	'auth' => 'Auth\AuthController', 
	'password' => 'Auth\PasswordController',
]);

Route::get('assessments/cancel/{id}','AssessmentController@destroy');
Route::put('assessments/{id}','surveys@update');
Route::get('assessments/edit/{id}','surveys@edit');


Route::get('assessments/show/{id}','surveys@show');

Route::get('assessments/create/{id}/{sv}','surveys@create');

Route::get('assessment/{sv}','AssessmentController@index');
Route::get('assessments/{id}/{county}/{term}','AssessmentController@show');
Route::get('assessments/{id}/{date}/{term}/{county}','AssessmentController@create');
Route::post('assessments/{id}','AssessmentController@store');




