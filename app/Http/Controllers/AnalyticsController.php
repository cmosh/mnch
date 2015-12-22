<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedMNHCount;
use App\Tables\SubmittedMNHCountie;
use App\Tables\SubmittedIMCICount;
use App\Tables\SubmittedIMCICountie;
use App\Tables\CHSubSurvey;
use App\Tables\Column_set;
use App\Tables\Survey;
use App\Tables\analyse;
use App\Tables\Map;
use App\Tables\Map_imci;
use App\Tables\SurveysDone;
use App\Tables\IMCISubSurvey;
use App\Tables\Block;
use App\Tables\MNHSubSurvey;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\ArrayRedis as Rache;
use Illuminate\Contracts\Foundation\Application As App;
use Request;
use Illuminate\Http\Request As Requested;
use Input;
use Cache;

	
class AnalyticsController extends Controller {

public function maprequest(){
 if(Request::ajax()) { 
   $data = Input::all();
      $survey = $data['survey']; 


      switch ($survey) {
      	case 'ch':
      		$Map = (Rache::remember('MapCH',180,function() {
			return 	Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray();
      	}));
      		break;      	
      	case 'mnh':
      		$Map = (Rache::remember('MapMNH',180,function() {
			return 	Map::where('Survey','=','Maternal Neonatal Healthcare')->get()->keyBy('Concat')->toArray();
      	}));   
      		break;
      	case 'imci':
      		$Map = (Rache::remember('xMapIMCI',180,function() {
			return 	Map_imci::where('Survey','=','IMCI')->get()->keyBy('Concat')->toArray();
      	}));   
      		break;
      	default:
      		
      		break;
      } 
echo json_encode($Map);

      die;
	}
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
     
		
      		      
      if ($county == 'All' ) {
      	
      	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($Term){
      					return 	CHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});


      }

      else{
       	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	CHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
     

    $chanalytics  = analyse::chanalytics($CHSubSurvey,$Year_1,$Year_2,$Year_3,$Year_4,$county,$Term);
		

   

    echo json_encode($chanalytics);

      die;



	}
}



public function mnhajax(){


		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];     
        $Term = $data['Term'];


 		if ($county == 'All') {
      	
      	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($Term){
      					return 	MNHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});

      }

     else  {
       	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      

}
    
    $mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,$county,$Term);
		


    
    echo json_encode($mnhanalytics);

      die;



	}

}


public function imciajax(){


		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];     
       


 		if ($county == 'All') {      	
      	$IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.$county,180,function(){
      					return 	IMCISubSurvey::all();
      	});
      }

     else  {
       	$IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.$county,180,function() use($county){
      					return 	IMCISubSurvey::where('County','Like',$county)->get();
      	});     
       }
    
    $IMCIanalytics  = analyse::IMCIanalytics($IMCISubSurvey,$county);	


    
    echo json_encode($IMCIanalytics);

      die;



	}

}



	public function ch()
	{
				
	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.'All',180,function(){
      					return 	CHSubSurvey::all();
      	});


      //	 $chanalytics  = analyse::chanalytics($CHSubSurvey,3,3,3,3,'All','Baseline');
		
   
			
		$SubmittedCHCount = Cache::remember('SubmittedCHV2Count',180,function(){
							return SubmittedCHCount::first();
							 	});  


		$SubmittedCHCounties = Cache::remember('SubmittedCHV2Counties',180,function(){
							return SubmittedCHCountie::get();
							 	});  



		$YearsBlock =Cache::remember('CHV2YearsAllYears',180,function() use ($CHSubSurvey){

			$Years = analyse::sec3Years($CHSubSurvey);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);
		return array($Years,$AllYears,$YearsCount);


		});

		$Years=$YearsBlock[0];
		$AllYears=$YearsBlock[1];
		$YearsCount=$YearsBlock[2];
		
		$SurveysDone =	Rache::remember('SurveysDoneCHV2',180,function(){
						 return SurveysDone::where('Name','=','Child Health')->get();
						});  
	

			return view('analytics.CH.index')
			->with('SubmittedCount',$SubmittedCHCount)
			->with('SubmittedCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			->with('SurveysDone',$SurveysDone)
			->with('loc','Child Health Survey');


				
	}



	public function comparison($survey,$lambda,$chart,$yr='not'){

		

		if($survey=='CHV2')

		$SubmittedCounties = Cache::remember('SubmittedCHV2Counties',180,function(){
							return SubmittedCHCountie::get();
							 	});
		elseif($survey=='MNHV2')

		$SubmittedCounties = Cache::remember('SubmittedMNHV2Counties',180,function(){
							return SubmittedMNHCountie::get();
							 	});


		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
										   ->with('funct',$lambda)
										   ->with('chart',$chart)
										   ->with('yr',$yr)
										   ->with('sv',$survey);

	



}

	


	public function mnh()
	{
				
	
$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.'All',180,function(){
      					return MNHSubSurvey::all();
      	});     


		//	$mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,'All','Baseline');

		
		$SubmittedMNHCount = SubmittedMNHCount::first();
		$SubmittedMNHCounties = SubmittedMNHCountie::get();
	
		$SurveysDone = SurveysDone::where('Name','=','Maternal Neonatal Healthcare')->get();
	
	

			return view('analytics.MNH.index')
			->with('SubmittedCount',$SubmittedMNHCount)
			->with('SubmittedCounties',$SubmittedMNHCounties)
			
			->with('SurveysDone',$SurveysDone);

	}


	public function imci()
	{
				
	
$IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.'All',180,function(){
      					return IMCISubSurvey::all();
      	});     


			///$IMCIanalytics  = analyse::IMCIanalytics($IMCISubSurvey,'All');

		
		$SubmittedIMCICount = SubmittedIMCICount::first();
		$SubmittedIMCICounties = SubmittedIMCICountie::get();
	
		$SurveysDone = SurveysDone::where('Name','=','IMCI')->get();
	
	

			return view('analytics.IMCI.index')
			->with('SubmittedCount',$SubmittedIMCICount)
			->with('SubmittedCounties',$SubmittedIMCICounties)
			
			->with('SurveysDone',$SurveysDone);

	}





		public function tester(){

			$env = config("app.env");

			if($env!='local')abort(404);


			$IMCISubSurvey = /*Cache::remember('IMCIV2SubSurvey'.'All',180,function(){
      					return*/ IMCISubSurvey::all();
     /* 	}); */   

   
			return analyse::imcianalytics($IMCISubSurvey,'All');
			//return analyse::sunit($IMCISubSurvey);
		
	}


	public function blah( )
	{		
		$env = config("app.env");

			if($env!='local')abort(404);

			
		

	}






	



	
	

}
