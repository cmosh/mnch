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










Route::get('home', 'HomeController@index');


Route::group(['as' => 'dashboard::'], function () {
	Route::get('/', 'AnalyticsController@land');
    Route::group(['prefix' => 'analytics','as'=>'helpers'],function(){
    			Route::get('terms','AnalyticsController@terms');
				Route::post('comparison','AnalyticsController@compare');
				Route::post('data','AnalyticsController@data');				
				Route::post('maprequest','AnalyticsController@maprequest');
				Route::post('facilitylist','AnalyticsController@facilitylist');		
    			Route::get('{survey}','AnalyticsController@index');
		});
    Route::group(['as'=>'comparison'],function(){
    			Route::post('compare/{survey}','AnalyticsController@compareSurvey');
				Route::get('comparison/{survey}/{lambda}/{chart}/{yr?}','AnalyticsController@comparison');	
		});
});


Route::group(['prefix' => config('telegram.bot_token')],function(){
		Route::post('webhook', function () {
		    $updates = Telegram::getWebhookUpdates();
		    Cache::put('aaaaaaaaaaaaaaaaaaaaaaa','c',60);
		    return 'ok';
		});
});



Route::group(['prefix' => 'usermanagement'], function () {

		Route::get('/','UserManagement@index');
		Route::get('test','UserManagement@test');
		Route::get('mail','UserManagement@mail');		
		Route::get('monitor','UserManagement@show');
		Route::get('viewusers','UserManagement@index');
		Route::get('addusers','UserManagement@create');
		Route::get('example','UserManagement@example');	
		Route::get('editusers/{id}','UserManagement@edit');
		Route::get('addusers_multi','UserManagement@multi');
		Route::get('changepass','UserManagement@changepass');
		Route::get('export/{loc}/{type1}/{type2}/{type3}','UserManagement@export');

		Route::post('ajax','UserManagement@ajax');		
		Route::post('store','UserManagement@store');
		Route::post('reset','UserManagement@reset');
		Route::post('update/{id}','UserManagement@update');
		Route::post('multi_upload','UserManagement@upload');		
		Route::post('status_change','UserManagement@status_change');
		Route::post('update/pass/{id}/','UserManagement@updatepass');		
		Route::post('addusers_multi/store','UserManagement@store_multi');

});





Route::group(['prefix' => 'test'], function () {

     Route::get('/','testcontroller@index','blah');
     Route::get('stop','administration@stop');
     Route::get('serve','administration@serve');
     Route::get('{variable}/{variable2}','testcontroller@variable');
     Route::get('{variable}','testcontroller@variable');

});

Route::group(['prefix' => 'telegram'], function () {

     Route::get('/','TelegramController@index');
     Route::get('hook','TelegramController@hook');
     Route::post(config('telegram.bot_token').'/webhook','TelegramController@webhook');
     Route::get('send/{a}','TelegramController@send');

});


Route::get('user', array('before' => 'old', function()
{
    return 'You are over 200 years old!';
}));




Route::controllers([
	'auth' => 'Auth\AuthController', 
	'password' => 'Auth\PasswordController',
]);

Route::get('self/register','Register@index');
Route::post('self/store','Register@store');

Route::group(['prefix' => 'assessments'], function () {

		Route::get('cancel/{id}','AssessmentController@destroy');
		Route::put('{id}','SurveysController@update');
		Route::get('resume/{id}','SurveysController@edit');
		Route::get('badresume/{id}','SurveysController@badedit');
		Route::get('show/{id}','SurveysController@show');
		Route::get('start/{id}','SurveysController@create');
		Route::get('{id}/{county}/{term}/{subcounty}','AssessmentController@show');
		Route::get('{id}/{date}/{term}/{county}/{subcounty}','AssessmentController@create');
		Route::post('{id}','AssessmentController@store');

});

Route::group(['prefix' => 'assessment'], function () {

		Route::get('{sv}','AssessmentController@index');
		Route::post('subcounties','AssessmentController@subcounties');

});

Route::get('status/{status}/{AssID}','AssessmentController@status');
Route::post('survey/session','SurveysController@session');
Route::post('survey/save','SurveysController@saveajax');



