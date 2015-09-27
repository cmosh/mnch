<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedMNHCount;
use App\Tables\SubmittedMNHCountie;
use App\Tables\CHSubSurvey;
use App\Tables\Column_set;
use App\Tables\analyse;
use App\Tables\Map;
use App\Tables\SurveysDone;
use App\Tables\MNHSubSurvey;
use Illuminate\Database\Eloquent\Collection;

use Request;
use Input;
use Cache;


use Excel;

	
class AnalyticsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct()
	{
	
		
		
	}
	public function mapRequest(){



	}
	public function chajax(){

		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      $Year_1 = $data['Year1'];
       $Year_2 = $data['Year2'];
       $Year_3 = $data['Year3'];
        $Year_4 = $data['Year4'];
        $Term = $data['Term'];




      if ($county == 'All' && $Term =='All') {
      
$CHSubSurvey = Cache::remember('CHSubSurvey',180,function(){
      					return CHSubSurvey::all();
      	});     
		
      		      
      }
      elseif ($county == 'All' && $Term !=='All') {
      	
      	$CHSubSurvey = Cache::remember('CHSubSurvey'.$county.$Term,180,function() use($Term){
      					return 	CHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});


      }


        elseif ($county !== 'All' && $Term =='All') {

      	$CHSubSurvey = Cache::remember('CHSubSurvey'.$county,180,function() use($county){
      					return 	CHSubSurvey::where('County','Like',$county)->get();
      	});
      
	
      		
   
      }
      elseif ($county !== 'All' && $Term !=='All') {
       	$CHSubSurvey = Cache::remember('CHSubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	CHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
      else{}

    $chanalytics  = analyse::chanalytics($CHSubSurvey,$Year_1,$Year_2,$Year_3,$Year_4,$county);
		
$Map = (Cache::remember('Map',180,function() {
      					return 	Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$chanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}
}



public function mnhajax(){


		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
     
        $Term = $data['Term'];



      if ($county == 'All' && $Term =='All') {
      
$MNHSubSurvey = Cache::remember('MNHSubSurvey',180,function(){
      					return MNHSubSurvey::all();
      	});     
		
      		      
      }

      elseif ($county == 'All' && $Term !=='All') {
      	
      	$MNHSubSurvey = Cache::remember('MNHSubSurvey'.$county.$Term,180,function() use($Term){
      					return 	MNHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});


      }


        elseif ($county !== 'All' && $Term =='All') {

      	$MNHSubSurvey = Cache::remember('MNHSubSurvey'.$county,180,function() use($county){
      					return 	MNHSubSurvey::where('County','Like',$county)->get();
      	});   
	
      }


      elseif ($county !== 'All' && $Term !=='All') {
       	$MNHSubSurvey = Cache::remember('MNHSubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
      else{}

    $mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,$county);
		
$Map = (Cache::remember('Map',180,function() {
      					return 	Map::where('Survey','=','Maternal Neonatal Healthcare')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$mnhanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}}
	public function ch()
	{
				
	//	echo json_encode( Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray());
	
		
$CHSubSurvey = Cache::remember('CHSubSurvey',180,function(){
      					return CHSubSurvey::all();
      	});  

      	 $chanalytics  = analyse::chanalytics($CHSubSurvey,3,3,2,2,'All');
		
   
			
		$SubmittedCHCount = SubmittedCHCount::first();
		$SubmittedCHCounties = SubmittedCHCountie::get();
		$Years = analyse::sec3Years($CHSubSurvey);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);
		$SurveysDone = SurveysDone::where('Name','=','Child Health')->get();
		
	

			return view('analytics.CH.index')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			->with('SurveysDone',$SurveysDone);


				
	}

	
	public function tester(){
		      
// $MNHSubSurvey = Cache::remember('MNHSubSurvey',180,function(){
//       					return MNHSubSurvey::all();
//       	});     

// echo $MNHSubSurvey->load('x');
	// 	$app = LRedis::connection();
	// //$app->set('XTRA','a');
	// print_r($app->get("CemonCNakuru"));  


	}

	public function mnh()
	{
				
	
$MNHSubSurvey = Cache::remember('MNHSubSurvey',180,function(){
      					return MNHSubSurvey::all();
      	});     


			$mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,'All');

		
		$SubmittedCHCount = SubmittedMNHCount::first();
		$SubmittedCHCounties = SubmittedMNHCountie::get();
	
		$SurveysDone = SurveysDone::where('Name','=','Maternal Neonatal Healthcare')->get();
	
	

			return view('analytics.MNH.index')
			->with('SubmittedCHCount',$SubmittedCHCount)
			->with('SubmittedCHCounties',$SubmittedCHCounties)
			
			->with('SurveysDone',$SurveysDone);

	}

	public function blah()
	{
		

		return view('analytics.test');
	}

	
	

}
