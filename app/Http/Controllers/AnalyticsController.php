<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedMNHCount;
use App\Tables\SubmittedMNHCountie;
use App\Tables\SubmittedSurveys;
use App\Tables\Column_set;
use App\Tables\analyse;
use App\Tables\Map;
use App\Tables\SurveysDone;
use App\Tables\MNHSubSurvey;
use Illuminate\Database\Eloquent\Collection;
//use Illuminate\Support\Facades\Redis;
use Request;
use Input;
use Cache;
//use App\Tables\ModelRedis as Cache;
use Excel;
//global  $Year_1,$Year_2,$Year_3,$Year_4,$SubmittedSurveys;
	
class AnalyticsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
	
		$this->thevar = "dev";
		
	}
	public function mapRequest(){



	}
	public function ajax(){

//global  $Year_1,$Year_2,$Year_3,$Year_4,$SubmittedSurveys;
		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      $Year_1 = $data['Year1'];
       $Year_2 = $data['Year2'];
       $Year_3 = $data['Year3'];
        $Year_4 = $data['Year4'];
        $Term = $data['Term'];




      if ($county == 'All' && $Term =='All') {
      
$SubmittedSurveys = Cache::remember($this->thevar.'SubmittedSurveys',180,function(){
      					return SubmittedSurveys::all();
      	});     
		
      		      
      }
      elseif ($county == 'All' && $Term !=='All') {
      	
      	$SubmittedSurveys = Cache::remember($this->thevar.'SubmittedSurveys'.$county.$Term,180,function() use($Term){
      					return 	SubmittedSurveys::where('Assessment_Term','Like',$Term)->get();
      	});


      }


        elseif ($county !== 'All' && $Term =='All') {

      	$SubmittedSurveys = Cache::remember($this->thevar.'SubmittedSurveys'.$county,180,function() use($county){
      					return 	SubmittedSurveys::where('County','Like',$county)->get();
      	});
      
	
      		
   
      }
      elseif ($county !== 'All' && $Term !=='All') {
       	$SubmittedSurveys = Cache::remember($this->thevar.'SubmittedSurveys'.$county.$Term,180,function() use($county,$Term){
      					return 	SubmittedSurveys::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
      else{}

    $chanalytics  = analyse::chanalytics($SubmittedSurveys,$Year_1,$Year_2,$Year_3,$Year_4,$county);
		
$Map = (Cache::remember($this->thevar.'Map',180,function() {
      					return 	Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$chanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}
}



public function mnhajax(){

//global  $Year_1,$Year_2,$Year_3,$Year_4,$SubmittedSurveys;
		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
     
        $Term = $data['Term'];



      if ($county == 'All' && $Term =='All') {
      
$MNHSubSurvey = Cache::remember($this->thevar.'MNHSubSurvey',180,function(){
      					return MNHSubSurvey::all();
      	});     
		
      		      
      }

      elseif ($county == 'All' && $Term !=='All') {
      	
      	$MNHSubSurvey = Cache::remember($this->thevar.'MNHSubSurvey'.$county.$Term,180,function() use($Term){
      					return 	MNHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});


      }


        elseif ($county !== 'All' && $Term =='All') {

      	$MNHSubSurvey = Cache::remember($this->thevar.'MNHSubSurvey'.$county,180,function() use($county){
      					return 	MNHSubSurvey::where('County','Like',$county)->get();
      	});   
	
      }


      elseif ($county !== 'All' && $Term !=='All') {
       	$MNHSubSurvey = Cache::remember($this->thevar.'MNHSubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
      else{}

    $mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,$county);
		
$Map = (Cache::remember($this->thevar.'Map',180,function() {
      					return 	Map::where('Survey','=','Maternal Neonatal Healthcare')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$mnhanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}}
	public function index()
	{
				
	//	echo json_encode( Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray());
	
		


			$SubmittedSurveys = SubmittedSurveys::all();
		//	$gjavailability = analyse::chanalytics($SubmittedSurveys);

			//$SurveySummary = 
			
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
		$SurveysDone = SurveysDone::where('Name','=','Child Health')->get();
		//$d = analyse::chanalytics($SubmittedSurveys,3,2,2,2,'All');
		// echo $d;

		// $d = analyse::commstrategy($SubmittedSurveys);
		// echo $d;
		
		// $d = analyse::opdgen($SubmittedSurveys);
		// echo $d;
	

			return view('analytics.ch')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			->with('SurveysDone',$SurveysDone);


				
	}

	
	public function tester(){
		      
$MNHSubSurvey = Cache::remember($this->thevar.'MNHSubSurvey',180,function(){
      					return MNHSubSurvey::all();
      	});     

echo $MNHSubSurvey->load('x');



	}

	public function mnh()
	{
				
	//	echo json_encode( Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray());
	
 
			$SubmittedSurveys = MNHSubSurvey::all();
		//	$gjavailability = analyse::chanalytics($SubmittedSurveys);

			//$SurveySummary = 
			
		//echo(	json_encode($gjavailability));
			$mnhanalytics  = analyse::mnhanalytics($SubmittedSurveys,'All');

			// print_r($mnhanalytics);
		$SubmittedCHCount = SubmittedMNHCount::first();
		$SubmittedCHCounties = SubmittedMNHCountie::get();
		//$Years = analyse::sec3Years($SubmittedSurveys);
		// $YearsCount = count($Years)-1;
		// $Years = array_reverse($Years);
		// $AllYears = $Years;
		// unset($Years[0]);
		// unset($Years[1]);
		// $Years = array_reverse($Years, true);
		// $AllYears = array_reverse($AllYears, true);
		$SurveysDone = SurveysDone::where('Name','=','Maternal Neonatal Healthcare')->get();
		// $d = analyse::chanalytics($SubmittedSurveys,3,2,2,2,'All');
		// echo $d;

		// $d = analyse::commstrategy($SubmittedSurveys);
		// echo $d;
		
		// $d = analyse::opdgen($SubmittedSurveys);
		// echo $d;
	

			return view('analytics.mnh')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties)
			
			->with('SurveysDone',$SurveysDone);

	}

	public function blah()
	{
		

		return view('analytics.test');
	}

	
	

}
