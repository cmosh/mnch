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
Route::get('/phpversion',function(){


	 phpinfo();
});
Route::get('/test','AnalyticsController@blah');
Route::get('/','AnalyticsController@index');
Route::post('/map','AnalyticsController@mapRequest');
Route::post('/analytics/ajax','AnalyticsController@ajax');
Route::post('/analytics/mnhajax','AnalyticsController@mnhajax');
Route::get('/mnh','AnalyticsController@mnh');
Route::get ('Autosaved/{UserId}','AssessmentController@autosaved');
Route::get('/tester','AnalyticsController@tester');
Route::post('survey/{id}/{status}','surveys@update');
Route::get('/redis/{test}',function($test){

	// $app = LRedis::connection();
	// $app->set('XTRA','a');
	// print_r($app->get('XTRA'));  
Cache::add($test, 'value', 1);

	//return (String)Cache::get('theone');
// return Cache::get('key');
	// $X = Cache::remember('XTRA',1,function(){
	// 	return 'x';
      				
 //      	});     
		
	// 	return $X;

});
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
Route::post('usermanagement/addusers_multi/store','UserManagement@store_multi');
Route::get('usermanagement/download/{filename}', function ($filename)
{
    $file = storage_path('app') . '/' . $filename; // or wherever you have stored your PDF files
    return response()->download($file);
});
Route::get('usermanagement/status_change/{id}','UserManagement@status_change');
Route::get('usermanagement/reset/{id}','UserManagement@reset');
Route::get('usermanagement/export/{type}','UserManagement@export');
Route::post('usermanagement/multi_upload','UserManagement@upload');
Route::get('usermanagement/editusers/{id}','UserManagement@edit');
Route::post('usermanagement/update/{id}','UserManagement@update');
Route::post('usermanagement/update/pass/{id}/','UserManagement@updatepass');


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




