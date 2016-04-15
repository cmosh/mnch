<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Assessments;
use App\Helpers\Analyse;
use App\Models\Facilities;
use App\Helpers\County;
use Request;
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
      		$Map = (Cache::remember('sdfgsdsfgsdMapIMCI',180,function() {
			return  County::MapIM();
      	}));   
      		break;
      	default:
      		
      		break;
      } 
echo json_encode($Map);

      die;
	}
}
  public function facilitylist(){
     if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      $survey = $data['survey'];


      if($county=="All"){
      $x = Facilities::SubmittedAssessmentsList($survey);
      }else{
       $x = Facilities::SubmittedAssessmentsList($survey,$county);
      }

      echo($x);
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
      					$temp = Facilities::SubmittedAssessments('CH',$Term,$county)->toArray();
      					return collect($temp);
      	});
      
      }
     

    $chanalytics  = Analyse::chanalytics($CHSubSurvey,$Year_1,$Year_2,$Year_3,$Year_4,$county,$Term);
		

   

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
      					$temp = Facilities::SubmittedAssessments('MNH', $Term)->toArray();
      					return collect($temp);      				
      	});

      }

     else  {
       	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					$temp = Facilities::SubmittedAssessments('CH',$Term,$county)->toArray();
      					return collect($temp);
      	});
      

		}
    
    $mnhanalytics  = Analyse::mnhanalytics($MNHSubSurvey,$county,$Term);	


    
    echo json_encode($mnhanalytics);

      die;



	}

}





	public function ch()
	{
				
		$CHSubSurvey = assessments::Submitted('CH')->get();         			
      	$SubmittedCHCount =  assessments::Submitted('CH')->count();
      	$SubmittedCHCounties = County::AllSubmitted('CH');							 	
         

		$YearsBlock =Cache::remember('CHV2YearsAllYears',180,function() use ($CHSubSurvey){

		$Years = Analyse::sec3Years($CHSubSurvey);
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
			->with('loc','Child Health Survey');

				
	}

	public function mnh()
	{
			
	   	$SubmittedMNHCount =  assessments::Submitted('MNH')->count();
      	$SubmittedMNHCounties = County::AllSubmitted('MNH');
	

		return view('analytics.MNH.index')
			->with('SubmittedCount',$SubmittedMNHCount)
			->with('SubmittedCounties',$SubmittedMNHCounties);

	}

public function terms()
{
		
         if(Request::ajax()) {
         	  $param = Input::all();
 		
         	$county = $param['county'];
         	if ($county == 'All') {
         		$array[] = 'Baseline';
         		$array[] ='Midterm';
         		$array[] = 'Endterm';
         		
         		 }
         	else {	
       count(Facilities::SubmittedAssessments('CH','Baseline',$county)->toArray()) < 1 ?: $array[] = 'Baseline';
      count(Facilities::SubmittedAssessments('CH','Midterm',$county)->toArray()) < 1 ?: $array[] = 'Midterm';
        count(Facilities::SubmittedAssessments('CH','Endterm',$county)->toArray()) < 1 ?: $array[] = 'Endterm';
         	}
         	echo json_encode(collect($array));


         }

         

         die;
	}
	
	
public function imciajax(){



		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];     
       


 		if ($county == 'All') {      	
      	$IMCISubSurvey = Cache::remember('IMCISusbssSurvey'.$county,180,function(){
      					return Facilities::SubmittedIM();
      	});
      }

     else  {
       	$IMCISubSurvey = Cache::remember('IMCISubSurvey'.$county,180,function() use($county){
      					return 	Facilities::SubmittedIM($county);
      	});     
       }
    
    $IMCIanalytics  = Analyse::IMCIanalytics($IMCISubSurvey,$county);	


    
    echo json_encode($IMCIanalytics);

      die;



	}

}

	public function imci()
	{
       $IMCISubSurvey = assessments::Submitted('IMCI')->get();               
        $SubmittedIMCICount =  assessments::Submitted('IMCI')->count();
        $SubmittedIMCICounties = County::AllSubmitted('IMCI');  

	
	

			return view('analytics.IMCI.index')
			->with('SubmittedCount',$SubmittedIMCICount)
			->with('SubmittedCounties',$SubmittedIMCICounties);

	}


	public function comparison($survey,$lambda,$chart,$yr='not'){

		

		if($survey=='CHV2')

		$SubmittedCounties = County::AllSubmitted('CH'); 

		elseif($survey=='MNHV2')

		$SubmittedCounties = County::AllSubmitted('MNH');  

		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
										   ->with('funct',$lambda)
										   ->with('chart',$chart)
										   ->with('yr',$yr)
										   ->with('sv',$survey);

	



}
}
