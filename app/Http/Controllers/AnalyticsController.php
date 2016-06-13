<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Assessments;
use App\Helpers\Analyse;
use App\Models\Facilities;
use App\Helpers\County;
use App\Helpers\Analysis_Data;
use App\Helpers\Analysis_Scaffold;
use Request;
use Input;
use Cache;

	
class AnalyticsController extends Controller {

  public function maprequest(){

    if(Request::ajax()) {
      $data = Input::all();
      $survey = $data['survey']; 


      switch (substr($survey,0,4)=='IMCI') {
        case 'imci':
          $Map = (Cache::remember('MapIMCI',config('cache.timeout'),function() {return  County::MapIM();})); 
          break;        
        default:
        $Map = (Cache::remember('Map'.$survey,config('cache.timeout'),function() use ($survey){return  County::Map($survey);}));
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

  public function data(Analysis_Data $analysis_data){
    if(Request::ajax()){
      $data = Input::all();
      $survey = $data['survey'];
      if ($survey=="IMCIV1"){
         echo json_encode([
        "Data"=>$analysis_data->IMCIV1($data),
        "Numbers"=>$analysis_data->numbers($data)
        ]);
      }else{
      echo json_encode([
        "Data"=>$analysis_data->getdata($data),
        "Numbers"=>$analysis_data->numbers($data)
        ]);
    }
      die;
    }
  }


  public function index(Analysis_Scaffold $scaffold,$survey)
  {
    

    $ExtraCache =Cache::remember($survey.'ExtraCache',config('cache.timeout'),function() use ($survey,$scaffold){
    
    return $scaffold->{$survey}();


    });    
    return $scaffold->resolve($ExtraCache,$survey);    

  }

  public function datarequest()
{
   if(Request::ajax()) {
      $param = Input::all();
          $link = $param['link'];
          $survey = $param['survey'];
          if($survey == 'CHV2'){

           $yr = Cache::get('CHV2YEARS');
             return view('analytics.'.$survey.'.'.$link)
             ->with('Years',$yr['Years'])
           ->with('AllYears',$yr['AllYears'])
           ->with('YearsCount',$yr['YearsCount']);
          }
          else{
             return view('analytics.'.$survey.'.'.$link);
          }
 
}
}  

  public function land()
  {
    
    $prefix = config('app.prefix');
    return redirect('/analytics/CHV2');
  }

  public function terms(Analysis_Scaffold $scaffold)
  {
    if(Request::ajax()) {
         	$param = Input::all();
          $county = $param['county'];
          $survey = $param['survey'];
         	if ($county == 'All') {
            $array = $scaffold->getterms($survey);       		
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

  public function comparison($survey,$lambda,$chart,$yr='not'){
   
		$SubmittedCounties = County::AllSubmitted($survey);  

		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
										   ->with('funct',$lambda)
										   ->with('chart',$chart)
										   ->with('yr',$yr)
										   ->with('sv',$survey);
    }

    public function compareSurvey(Analysis_Data $analysis_data)
    {
       if(Request::ajax()){
      $data = Input::all();
      echo json_encode( $analysis_data->compare($data) );
      die;
    }
  }



}
