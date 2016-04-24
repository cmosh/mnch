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
      	case 'chv2':
      		$Map = (Cache::remember('MapCH',config('cache.timeout'),function() {
			return  County::Map('CHV2');
      	}));
      		break;      	
      	case 'mnhv2':
      		$Map = (Cache::remember('MapMNH',config('cache.timeout'),function() {
			return 	 County::Map('MNHV2');
      	}));   
      		break;
      	case 'imci':
      		$Map = (Cache::remember('MapIMCI',config('cache.timeout'),function() {
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
      $term = $data['term'];

      if($county=="All"){
      $x = Facilities::SubmittedAssessmentsList($term,$survey);
      }else{
       $x = Facilities::SubmittedAssessmentsList($term,$survey,$county);
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
      	
      	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,config('cache.timeout'),function() use($Term){
      					$temp = Facilities::SubmittedAssessments('CHV2', $Term)->toArray();
      					return collect($temp);
      	});


      }

      else{
       	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,config('cache.timeout'),function() use($county,$Term){
      					$temp = Facilities::SubmittedAssessments('CHV2',$Term,$county)->toArray();
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
      	
      	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,config('cache.timeout'),function() use($Term){
      					$temp = Facilities::SubmittedAssessments('MNHV2', $Term)->toArray();
      					return collect($temp);      				
      	});

      }

     else  {
       	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,config('cache.timeout'),function() use($county,$Term){
      					$temp = Facilities::SubmittedAssessments('MNHV2',$Term,$county)->toArray();
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
		$ExtraCache =Cache::remember('CHV2ExtraCache',config('cache.timeout'),function() {

    $terms = self::getterms('CHV2');
    $CHSubSurvey = assessments::Submitted('CHV2')->where('Assessment_Term',$terms[0])->get();       
		$Years = Analyse::sec3Years($CHSubSurvey);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);
    $SubmittedCHCount =  $CHSubSurvey->count();
    $SubmittedCHCounties = County::AllSubmittedT('CHV2',$terms[0]);     
		return [$Years,$AllYears,$YearsCount,$SubmittedCHCount,$SubmittedCHCounties,$terms];


		});

		$Years=$ExtraCache[0];
		$AllYears=$ExtraCache[1];
		$YearsCount=$ExtraCache[2];
    $SubmittedCHCount = $ExtraCache[3];
    $SubmittedCHCounties = $ExtraCache[4];
    $terms = $ExtraCache[5];
		
		
	

			return view('analytics.CH.index')
			->with('SubmittedCount',$SubmittedCHCount)
			->with('SubmittedCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			->with('loc','Child Health Survey')
      ->with('terms',$terms);

				
	}

	public function mnh()
	{
			$ExtraCache =Cache::remember('MNHV2ExtraCache',config('cache.timeout'),function() {

        $terms = self::getterms('MNHV2');
      $SubmittedMNHCount =  assessments::Submitted('MNHV2')->where('Assessment_Term',$terms[0])->count();  
        $SubmittedMNHCounties = County::AllSubmittedT('MNHV2',$terms[0]);
          return [$SubmittedMNHCount,$SubmittedMNHCounties,$terms];

    
    });

       $SubmittedMNHCount = $ExtraCache[0];
    $SubmittedMNHCounties = $ExtraCache[1];
    $terms = $ExtraCache[2];
	

		return view('analytics.MNH.index')
			->with('SubmittedCount',$SubmittedMNHCount)
			->with('SubmittedCounties',$SubmittedMNHCounties)
      ->with('terms',$terms);

	}

public static function getterms($survey)
{
    $array;
     count(Facilities::SubmittedAssessments($survey,'Baseline')->toArray()) < 1 ?: $array[] = 'Baseline';
      count(Facilities::SubmittedAssessments($survey,'Midterm')->toArray()) < 1 ?: $array[] = 'Midterm';
        count(Facilities::SubmittedAssessments($survey,'Endterm')->toArray()) < 1 ?: $array[] = 'Endterm';
      return $array;

}
public function terms()
{
		
         if(Request::ajax()) {
         	  $param = Input::all();
 		
         	$county = $param['county'];
          $survey = $param['survey'];
         	if ($county == 'All') {
         		$array[] = 'Baseline';
         		$array[] ='Midterm';
         		$array[] = 'Endterm';
       		
         		 }
         	else {	
       count(Facilities::SubmittedAssessments($survey,'Baseline',$county)->toArray()) < 1 ?: $array[] = 'Baseline';
      count(Facilities::SubmittedAssessments($survey,'Midterm',$county)->toArray()) < 1 ?: $array[] = 'Midterm';
        count(Facilities::SubmittedAssessments($survey,'Endterm',$county)->toArray()) < 1 ?: $array[] = 'Endterm';
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
      	$IMCISubSurvey = Cache::remember('IMCISusbssSurvey'.$county,config('cache.timeout'),function(){
      					return Facilities::SubmittedIM();
      	});
      }

     else  {
       	$IMCISubSurvey = Cache::remember('IMCISubSurvey'.$county,config('cache.timeout'),function() use($county){
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

		$SubmittedCounties = County::AllSubmitted('CHV2'); 

		elseif($survey=='MNHV2')

		$SubmittedCounties = County::AllSubmitted('MNHV2');  

		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
										   ->with('funct',$lambda)
										   ->with('chart',$chart)
										   ->with('yr',$yr)
										   ->with('sv',$survey);

	



}
}
