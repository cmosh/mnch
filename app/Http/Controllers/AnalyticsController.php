<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedSurveys;
use App\Tables\Column_set;
use App\Tables\analyse;
use Illuminate\Database\Eloquent\Collection;
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
      $Year_1 = $data['Year1'];
       $Year_2 = $data['Year2'];
       $Year_3 = $data['Year3'];
        $Year_4 = $data['Year4'];

      if ($county == 'All') {
      	$SubmittedSurveys = SubmittedSurveys::all();
			$chanalytics = analyse::chanalytics($SubmittedSurveys,$Year_1,$Year_2,$Year_3,$Year_4);

      
      }else{

      	$SubmittedSurveys = SubmittedSurveys::where('County','Like',$county)->get();
			$chanalytics = analyse::chanalytics($SubmittedSurveys,$Year_1,$Year_2,$Year_3,$Year_4);

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
		$Years = analyse::sec3Years($SubmittedSurveys);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);
		// $d = analyse::chanalytics($SubmittedSurveys,3,2,2,2);
		// echo $d;
		

			return view('analytics.ch')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears);

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
