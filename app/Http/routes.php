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


Route::post('compare/chv2','Compare@chv2');
Route::post('compare/mnhv2','Compare@mnhv2');

Route::get('rawdata','RawExcelController@index');
Route::get('rawdata/facility-summary','RawExcelController@FacilitySummary');
Route::get('rawdata/staff-training','RawExcelController@StaffTraining');
Route::get('rawdata/health-services','RawExcelController@HealthServices');
Route::get('rawdata/guidelines','RawExcelController@Guidelines');
Route::get('rawdata/tools','RawExcelController@Tools');
Route::get('rawdata/diarrhoea','RawExcelController@Diarrhoea');
Route::get('rawdata/antibiotics','RawExcelController@Antibiotics');
Route::get('rawdata/malaria','RawExcelController@Malaria');
Route::get('rawdata/ort-functionality','RawExcelController@OrtFunctionality');
Route::get('rawdata/ort-location','RawExcelController@OrtLocation');
Route::get('rawdata/supplies-availability','RawExcelController@SuppliesAvailability');
Route::get('rawdata/resource-availability','RawExcelController@ResourceAvailability');
Route::get('rawdata/community-strategy','RawExcelController@CommunityStrategy');

Route::get('admin/surveys','FormController@index');
Route::post('admin/surveys/fields/','FormController@fields');
Route::get('admin/surveys/{SurveyID}','FormController@edit');
Route::get('admin/global', 'administration@globe');
Route::get('admin/redmin', 'administration@localredis');
Route::get('admin/memcached', 'administration@localmem');
Route::get('admin/commandcenter', 'administration@commandcenter');
Route::post('admin/docmd', 'administration@docmd');
Route::post('admin/globcmd', 'administration@globcmd');

Route::get('analytics/terms','AnalyticsController@terms');
Route::post('analytics/comparison','AnalyticsController@compare');
Route::get('comparison/{survey}/{lambda}/{chart}/','AnalyticsController@comparison');
Route::get('comparison/{survey}/{lambda}/{chart}/{yr}/','AnalyticsController@comparison');
Route::get('/','AnalyticsController@ch');
Route::post('map','AnalyticsController@mapRequest');
Route::post('analytics/chajax','AnalyticsController@chajax');
Route::post('analytics/mnhajax','AnalyticsController@mnhajax');
Route::post('analytics/imciajax','AnalyticsController@imciajax');
Route::post('analytics/maprequest','AnalyticsController@maprequest');
Route::get('mnh','AnalyticsController@mnh');
Route::get('imci','AnalyticsController@imci');
Route::get('tester/','AnalyticsController@tester');
Route::get('test','AnalyticsController@blah');

Route::get('home', 'HomeController@index');

Route::get('usermanagement','UserManagement@index');
Route::get('usermanagement/viewusers','UserManagement@index');
Route::get('usermanagement/monitor','UserManagement@show');
Route::get('usermanagement/addusers','UserManagement@create');
Route::get('usermanagement/addusers_multi','UserManagement@multi');
Route::post('usermanagement/addusers_multi/store','UserManagement@store_multi');
Route::post('usermanagement/status_change','UserManagement@status_change');
Route::post('usermanagement/reset','UserManagement@reset');
Route::get('usermanagement/export/{loc}/{type1}/{type2}/{type3}','UserManagement@export');
Route::post('usermanagement/multi_upload','UserManagement@upload');
Route::get('usermanagement/editusers/{id}','UserManagement@edit');
Route::post('usermanagement/update/{id}','UserManagement@update');
Route::post('usermanagement/update/pass/{id}/','UserManagement@updatepass');
Route::get('usermanagement/changepass','UserManagement@changepass');
Route::post('usermanagement/ajax','UserManagement@ajax');
Route::get('usermanagement/test','UserManagement@test');
Route::get('usermanagement/mail','UserManagement@mail');
Route::post('usermanagement/store','UserManagement@store');

Route::get('test/stop','administration@stop');
Route::get('test/serve','administration@serve');

Route::controllers([
	'auth' => 'Auth\AuthController', 
	'password' => 'Auth\PasswordController',
]);

Route::get('self/register','Register@index');
Route::post('self/store','Register@store');

Route::get('assessments/cancel/{id}','AssessmentController@destroy');
Route::put('assessments/{id}','surveys@update');
Route::get('assessments/resume/{id}','surveys@edit');
Route::get('assessments/badresume/{id}','surveys@badedit');
Route::get('assessments/show/{id}','surveys@show');
Route::get('assessments/start/{id}','surveys@create');
Route::get('assessment/{sv}','AssessmentController@index');
Route::get('assessments/{id}/{county}/{term}/{subcounty}','AssessmentController@show');
Route::get('assessments/{id}/{date}/{term}/{county}/{subcounty}','AssessmentController@create');
Route::post('assessments/{id}','AssessmentController@store');
Route::post('assessment/subcounties','AssessmentController@subcounties');
Route::get('status/{status}/{AssID}','AssessmentController@status');
Route::post('survey/session','surveys@session');
Route::post('survey/save','surveys@saveajax');



