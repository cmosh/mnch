<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tables\Survey;
use App\Tables\Section;
use App\Tables\form;
use App\Tables\Field_set As Field;
use App\Http\Controllers\ArrayRedis As Rache;
use Request;
use Input;
use Cache;

class FormController extends Controller {

		public function __construct()
	{
		$this->middleware('auth');

	}

	public function index()
	{
		$Surveys = Survey::all();
		return view('admin.form.index')->with('location','Admin')
									   ->with('title','Administration')
									   ->with('Surveys',$Surveys);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function fields()

	{
		
         if(Request::ajax()) {
         	  $param = Input::all();

         	  if(isset($param['search'])){

         	  	
         	 $x = Rache::foreverreplacing('stuff',function() use ($param){

         	 	return $param;
         	 });


         

         	$search = '%'.$param['search'].'%';

         	$sresult = Field::where('Field_setName','Like',$search)->get(); // $Fields->where('Field_setName','Like',$param['search']);
         	$sresult->load('fields');
         	$x = Rache::foreverreplacing('MOREstuff',function() use ($sresult){

         	 	return $sresult;
         	 });

         	echo json_encode($sresult);


         }

         }

         die;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($SurveyID)
	{
		$loc = substr($SurveyID, 0,2);
		$color = self::color($loc);
		$x = form::edit($SurveyID,$color);
		$Secs = Section::where('surveyID', '=', $SurveyID)->get();     
		

		return view('admin.form.edit')->with('location','Admin')
									   ->with('title','Administration')
									   ->with('Mel',$x)
									    ->with('secs', $Secs);
	}


	private static function color($loc){

		switch ($loc) {
			case 'MN': $color = "warning";

			break;
			case 'CH': $color = "info";


			break;
			case 'IM':  $color = "danger";

				break;
			
			default:	 $color = "info";
				
				break;
		}

		return $color;

	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
