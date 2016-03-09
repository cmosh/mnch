<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Cache;
use Carbon\Carbon;
class Facilities extends Eloquent {

	protected $collection = 'Facilities';

	protected $fillable = ['Index','FacilityName', 'FacilityCode','County','Type','Owner'];
	
	 public function p()
    {
        return $this->hasOne('App\Tables\MNHSubSurvey','Facility_ID','FacilityCode');
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


     // public function scopeCounty($query){
     //    return $query->where('County','Baringo')
     //    // ->groupBy('County')
     //             ->groupBy(['assessment'=>function($query) use ($params){
     //                    $query->where('Assessment_Term',$params['Term'])
     //                          ->where('Survey',$params['Survey'])
     //                          ->select('Facility_ID','Assessment_Term','Survey','Status');
     //                 }]);
     //                 ->with(['assessments_County'=>function($query){
     //                    $query->groupBy('Facility_ID')

     //                 }]);
     // }

     public function scopeMissing($query,$search){
     	return $query->where('FacilityName','REGEXP',$search)
     				 ->select('FacilityName','FacilityCode');
     }

     public function subassessment() {
        return $this->hasOne('App\Tables\assessments','Facility_ID','FacilityCode')->where('Status','Submitted');
    }

    public function assessment() {
        return $this->hasOne('App\Tables\assessments','Facility_ID','FacilityCode');
    }

     public function assessments_short() {
        return $this->hasMany('App\Tables\assessments','Facility_ID','FacilityCode')->select('Facility_ID','Survey','Status');
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
                           // ->with('assessments_short')
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
                           // ->with('assessments_short')
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

    


















    


}
