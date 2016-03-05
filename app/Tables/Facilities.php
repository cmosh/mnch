<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Cache;

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

     public function scopeMissing($query,$search){
     	return $query->where('FacilityName','REGEXP',$search)
     				 ->select('FacilityName','FacilityCode');
     }

     public function assessment() {
        return $this->hasOne('App\Tables\assessments','Facility_ID','FacilityCode');
    }




}
