<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\Column_set;
use App\Tables\assessments;
use App\Tables\Survey;
use App\Tables\analyse;
use App\Tables\Block;
use App\Tables\Term;
use App\Tables\Facilities;
use App\Helpers\County;

use Illuminate\Database\Eloquent\Collection;
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
      		$Map = (Cache::remember('MapCH',180,function() {
			return  County::Map('CH');
      	}));
      		break;      	
      	case 'mnh':
      		$Map = (Cache::remember('MapMNH',180,function() {
			return 	 County::Map('MNH');
      	}));   
      		break;
      	case 'imci':
      		$Map = (Cache::remember('MapIMCI',180,function() {
			return  County::Map('IMCI');
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
      					$temp = Facilities::SubmittedAssessments('CH', $Term)->toArray();
      					return collect($temp);
      	});


      }

      else{
       	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	Facilities::SubmittedAssessments('CH',$Term,$County)->get();
      	});
      
      }
     

    $chanalytics  = analyse::chanalytics($CHSubSurvey,$Year_1,$Year_2,$Year_3,$Year_4,$county,$Term);
		

   

    echo json_encode($chanalytics);

      die;



	}
}



// public function mnhajax(){


		
// 		 if(Request::ajax()) {
//       $data = Input::all();
//       $county = $data['county'];     
//         $Term = $data['Term'];


//  		if ($county == 'All') {
      	
//       	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($Term){
//       					return 	MNHSubSurvey::where('Assessment_Term','Like',$Term)->get();
//       	});

//       }

//      else  {
//        	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
//       					return 	MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
//       	});
      

// }
    
//     $mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,$county,$Term);
		


    
//     echo json_encode($mnhanalytics);

//       die;



// 	}

// }


// public function imciajax(){


		
// 		 if(Request::ajax()) {
//       $data = Input::all();
//       $county = $data['county'];     
       


//  		if ($county == 'All') {      	
//       	$IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.$county,180,function(){
//       					return 	IMCISubSurvey::all();
//       	});
//       }

//      else  {
//        	$IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.$county,180,function() use($county){
//       					return 	IMCISubSurvey::where('County','Like',$county)->get();
//       	});     
//        }
    
//     $IMCIanalytics  = analyse::IMCIanalytics($IMCISubSurvey,$county);	


    
//     echo json_encode($IMCIanalytics);

//       die;



// 	}

// }



	public function ch()
	{
				
	$CHSubSurvey =	assessments::Submitted('CH')->get();
      
		
   
			
		$SubmittedCHCount =  assessments::Submitted('CH')->count();
							 


		$SubmittedCHCounties = County::AllSubmitted('CH');							 	



		$YearsBlock =Cache::remember('CHV2YearsAllYears',180,function() use ($CHSubSurvey){

		$Years = analyse::sec3Years($CHSubSurvey);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);

		return [$Years,$AllYears,$YearsCount];


		});

		$Years=$YearsBlock[0];
		$AllYears=$YearsBlock[1];
		$YearsCount=$YearsBlock[2];
		
		
	

			return view('analytics.CH.index')
			->with('SubmittedCount',$SubmittedCHCount)
			->with('SubmittedCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			// ->with('SurveysDone',$SurveysDone)
			->with('loc','Child Health Survey');


				
	}



// 	public function comparison($survey,$lambda,$chart,$yr='not'){

		

// 		if($survey=='CHV2')

// 		$SubmittedCounties = Cache::remember('SubmittedCHV2Counties',180,function(){
// 							return SubmittedCHCountie::get();
// 							 	});
// 		elseif($survey=='MNHV2')

// 		$SubmittedCounties = Cache::remember('SubmittedMNHV2Counties',180,function(){
// 							return SubmittedMNHCountie::get();
// 							 	});


// 		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
// 										   ->with('funct',$lambda)
// 										   ->with('chart',$chart)
// 										   ->with('yr',$yr)
// 										   ->with('sv',$survey);

	



// }

	


// 	public function mnh()
// 	{
				
	
// $MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.'All',180,function(){
//       					return MNHSubSurvey::all();
//       	});     


// 		//	$mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,'All','Baseline');

		
// 		$SubmittedMNHCount = SubmittedMNHCount::first();
// 		$SubmittedMNHCounties = SubmittedMNHCountie::get();
	
// 		$SurveysDone = SurveysDone::where('Name','=','Maternal Neonatal Healthcare')->get();
	
	

// 			return view('analytics.MNH.index')
// 			->with('SubmittedCount',$SubmittedMNHCount)
// 			->with('SubmittedCounties',$SubmittedMNHCounties)
			
// 			->with('SurveysDone',$SurveysDone);

// 	}


// 	public function imci()
// 	{
				
	
// $IMCISubSurvey = Cache::remember('IMCIV2SubSurvey'.'All',180,function(){
//       					return IMCISubSurvey::all();
//       	});     


// 			///$IMCIanalytics  = analyse::IMCIanalytics($IMCISubSurvey,'All');

		
// 		$SubmittedIMCICount = SubmittedIMCICount::first();
// 		$SubmittedIMCICounties = SubmittedIMCICountie::get();
	
// 		$SurveysDone = SurveysDone::where('Name','=','IMCI')->get();
	
	

// 			return view('analytics.IMCI.index')
// 			->with('SubmittedCount',$SubmittedIMCICount)
// 			->with('SubmittedCounties',$SubmittedIMCICounties)
			
// 			->with('SurveysDone',$SurveysDone);

// 	}





// 		public function tester(){

// 			$env = config("app.env");

// 			if($env!='local')abort(404);


// 			$IMCISubSurvey = /*Cache::remember('IMCIV2SubSurvey'.'All',180,function(){
//       					return*/ IMCISubSurvey::all();
//      /* 	}); */   

   
// 			return analyse::imcianalytics($IMCISubSurvey,'All');
// 			//return analyse::sunit($IMCISubSurvey);
		
// 	}


// 	public function blah( )
// 	{		
// 		$env = config("app.env");

// 			if($env!='local')abort(404);

			
// 			return("x");
		

// 	}

// public function terms()
// {
		
//          if(Request::ajax()) {
//          	  $param = Input::all();
 
//          	$county = $param['county'];
//          	if ($county == 'All') {
//          		$array = array();
//          		$array[] = array('County'=>'All','Term'=>'Baseline');
//          		$array[] = array('County'=>'All','Term'=>'Midterm');
//          		$array[] = array('County'=>'All','Term'=>'Endterm');
//          		$sresult = collect($array);  
//          		 }
//          	else {	$sresult = Term::where('County','Like',$county)->get(); 
//          }
//          	echo json_encode($sresult);


//          }

         

//          die;
// 	}




	



	
	

}
