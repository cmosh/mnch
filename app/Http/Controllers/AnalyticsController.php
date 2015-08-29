<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedSurveys;
use App\Tables\Column_set;
use App\Tables\analyse;
use Request;
use Input;
class AnalyticsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function ajax(){


		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      if ($county == 'All') {
      	$SubmittedSurveys = SubmittedSurveys::all();
			$chanalytics = analyse::chanalytics($SubmittedSurveys);

      
      }else{

      	$SubmittedSurveys = SubmittedSurveys::where('County','Like',$county)->get();
			$chanalytics = analyse::chanalytics($SubmittedSurveys);

      }

    
			
    echo ($chanalytics);

      die;



	}
}
	public function index()
	{
			

			$SubmittedSurveys = SubmittedSurveys::all();
		//	$gjavailability = analyse::chanalytics($SubmittedSurveys);

		
			
		//echo(	json_encode($gjavailability));
			
		$SubmittedCHCount = SubmittedCHCount::first();
		$SubmittedCHCounties = SubmittedCHCountie::get();
// 		echo $SubmittedCHCounties[1]['County'];
// 		$X = SubmittedSurveys::where('County','=',$SubmittedCHCounties[1]['County'])->get();

// $chanalytics = analyse::chanalytics($SubmittedSurveys);
// echo $chanalytics;

			return view('analytics.ch')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
	public function edit($id)
	{
		//
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
