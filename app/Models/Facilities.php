<?php namespace App\Models;

use Moloquent;
use Cache;
use Carbon\Carbon;
class Facilities extends Moloquent {

	protected $collection = 'Facilities';

	protected $fillable = ['Index','FacilityName', 'FacilityCode','County','Type','Owner'];
	
	 public function p()
    {
        return $this->hasOne('App\Models\MNHSubSurvey','Facility_ID','FacilityCode');
    }


     public function scopeSubCounties($query,$params)
    {
    	return 	$query->where('County', $params['county'])
				        			  ->where('District','like','%'.$params['search'].'%')
				        			  ->select('County', 'District')
				        			  ->groupBy('District');      							        
    }

     public function scopeAssessmentList($query,$params)
     {

     	return $query->where('County',$params['County'])
     				 ->where('District',$params['SubCounty'])
     				 ->select('FacilityName','FacilityCode','District','Type','Owner')
     				 ->with(['assessment'=>function($query) use ($params){
     				 	$query->where('Assessment_Term',$params['Term'])
     				 		  ->where('Survey',$params['Survey'])
     				 		  ->select('Facility_ID','Assessment_Term','Survey','Status');
     				 }]);

     }


     public function scopeViewAssessments($query,$params)
     {

     	return $query->where('County',$params['County'])
     				 ->where('District',$params['SubCounty'])
     				 ->select('FacilityName','FacilityCode','District','Type','Owner')
     				 ->with(['assessment'=>function($query) use ($params){
     				 	$query->where('Assessment_Term',$params['Term'])
     				 		  ->where('Survey',$params['Survey'])
     				 		  ->select('Facility_ID','Assessment_Term','Survey','Status');
     				 }]);

     }




     public function scopeMissing($query,$search){
     	return $query->where('FacilityName','REGEXP',$search)
     				 ->select('FacilityName','FacilityCode');
     }

     public function subassessment() {
        return $this->hasOne('App\Models\Assessments','Facility_ID','FacilityCode')->where('Status','Submitted');
    }

    public function assessment() {
        return $this->hasOne('App\Models\Assessments','Facility_ID','FacilityCode');
    }

    public function fowner() {
        return $this->belongsTo('App\Models\FacilityOwner','Owner','Owner');
    }

    public function ftypes() {
        return $this->belongsTo('App\Models\FacilityGroup','Type','FacilityType');
    }

     public function assessments_short() {
        return $this->hasMany('App\Models\Assessments','Facility_ID','FacilityCode')->select('Facility_ID','Survey','Status','Assessment_Term');
    }

     public function assessments() {
        return $this->hasMany('App\Models\Assessments','Facility_ID','FacilityCode');
    }

    public static function SubmittedAssessments($Survey,$Term,$County=false){

      $Assessments = $County ? self::where('County',$County)->select('FacilityCode','County') : 
                             self::select('FacilityCode','County') ;

       return $Assessments->with(['assessments'=>function($query) use ($Survey,$Term){
                                  $query->where('Survey','like',$Survey.'%')
                                        ->where('Assessment_Term',$Term)
                                        ->where('Status','Submitted');
                            }])

                    ->get()
                    ->lists('assessments')->flatten();

    }

    public static function SubmittedAssessmentsList($Term,$Survey,$County=false){

      $Assessments = $County ? self::where('County',$County)->select('FacilityCode','FacilityName','County') : 
                             self::select('FacilityCode','FacilityName','County') ;

       $s =  $Assessments->with(['assessments'=>function($query) use ($Survey,$Term){
                                  $query->where('Survey','like',$Survey.'%')
                                        ->where('Status','Submitted')
                                        ->where('Assessment_Term',$Term);
                            }])

                    ->get()
                    ->lists('assessments')->flatten();

      return   $s->transform(function ($item, $key) {
       $survey = self::where('FacilityCode', $item->Facility_ID)->first();
     return [ 'FacilityCode' => $item->Facility_ID,
              'FacilityName' => $survey->FacilityName,
              'SubCounty' => $survey->District,
              'County' => $survey->County
              ];
          });

    }


     public static function SubmittedIM($Survey,$County=false){

      $Assessments = $County ? self::where('County',$County)->select('FacilityCode','County') : 
                             self::select('FacilityCode','County') ;

       return collect($Assessments->with(['assessments'=>function($query) use ($Survey) {
                                  $query->where('Survey',$Survey)
                                        ->where('Status','Submitted');
                            }])

                    ->get()
                    ->lists('assessments')->flatten()->toArray());

    }


    public static function Type($FacilityCode){

      $Facilities = Cache::rememberForever('FacilityTypes', function() {
          $temp = self::select('FacilityCode','Type')->with('ftypes')->get()->toArray();
          return collect($temp);
      });     

      return $Facilities->where('FacilityCode',$FacilityCode)->first()['ftypes']['FacilityGroup'];
    }

     public static function Owner($FacilityCode){

      $Facilities = Cache::rememberForever('FacilityOwners', function() {
          $temp = self::select('FacilityCode','Owner')->with('fowner')->get()->toArray();
          return collect($temp);
      });     

      return $Facilities->where('FacilityCode',$FacilityCode)->first()['fowner']['Group'];
    }


    public static function CountyAssessments($params){
        
    $result = array_count_values (
                        array_filter(
             
                        self::where('County',$params['County']) 
                           ->select('FacilityCode','County')
                           ->with(['assessments_short'=>function($query) use ($params){
                                  $query->where('Survey','like',$params['Survey'].'%')
                                        ;
                            }])
                           ->get()
                           ->lists('assessments_short')
                           ->lists(0)
                           ->lists('Status')
                           ->toArray()
                           )
                        );

    $result['Submitted'] = isset($result['Submitted']) ? $result['Submitted']: 0;
     $result['Incomplete'] = isset($result['Incomplete']) ? $result['Incomplete']: 0;
      $result['New'] = isset($result['New']) ? $result['New']: 0;

     
    if($params['Status']=='Submitted'){
        return $result['Submitted'];
    }
    else {
        return $result['Incomplete'] + $result['New'];
    }}

     public static function CountyAssessmentsToday($params){
        
    $result = array_count_values (
                        array_filter(
             
                        self::where('County',$params['County']) 
                           ->select('FacilityCode','County')
                           ->with(['assessments_short'=>function($query) use ($params){
                                  $query->where('Survey','like',$params['Survey'].'%')
                                        ->where('created_at','>', Carbon::today())
                                        ;
                            }])
                           ->get()
                           ->lists('assessments_short')
                           ->lists(0)
                           ->lists('Status')
                           ->toArray()
                           )
                        );

    $result['Submitted'] = isset($result['Submitted']) ? $result['Submitted']: 0;
     $result['Incomplete'] = isset($result['Incomplete']) ? $result['Incomplete']: 0;
      $result['New'] = isset($result['New']) ? $result['New']: 0;

     
    if($params['Status']=='Submitted'){
        return $result['Submitted'];
    }
    else {
        return $result['Incomplete'] + $result['New'];
    }}


     public static function MapAssessments($params){
        
    $result = array_count_values (
                        array_filter(
             
                        self::where('County',$params['County']) 
                           ->select('FacilityCode','County')
                           ->with(['assessments_short'=>function($query) use ($params){
                                  $query->where('Survey','like',$params['Survey'].'%')
                                        ->where('Assessment_Term',$params['Term']);
                            }])
                           ->get()
                           ->lists('assessments_short')
                           ->lists(0)
                           ->lists('Status')
                           ->toArray()
                           )
                        );

    $result['Submitted'] = isset($result['Submitted']) ? $result['Submitted']: 0;
     $result['Incomplete'] = isset($result['Incomplete']) ? $result['Incomplete']: 0;
      $result['New'] = isset($result['New']) ? $result['New']: 0;

     
    if($params['Status']=='Submitted'){
        return $result['Submitted'];
    }
    else {
        return $result['Incomplete'] + $result['New'];
    }
  }

    public static function MapAssessmentsIM($params){
        
    $result = array_count_values (
                        array_filter(
             
                        self::where('County',$params['County']) 
                           ->select('FacilityCode','County')
                           ->with(['assessments_short'=>function($query) use ($params){
                                  $query->where('Survey','like',$params['Survey'].'%');
                            }])
                           ->get()
                           ->lists('assessments_short')
                           ->lists(0)
                           ->lists('Status')
                           ->toArray()
                           )
                        );

    $result['Submitted'] = isset($result['Submitted']) ? $result['Submitted']: 0;
     $result['Incomplete'] = isset($result['Incomplete']) ? $result['Incomplete']: 0;
      $result['New'] = isset($result['New']) ? $result['New']: 0;

     
    if($params['Status']=='Submitted'){
        return $result['Submitted'];
    }
    else {
        return $result['Incomplete'] + $result['New'];
    }
  }
    


















    


}
