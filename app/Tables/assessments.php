<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;
use DB;
class assessments extends Model  {

	//
	protected $table='assessments';
	protected $dates = ['Date'];
	 public static function createOrUpdate($data, $keys) {
    $record = self::where($keys)->first();
    if (is_null($record)) {
        return self::create($data);
    } else {
        return self::where($keys)->update($data);
    }
}

	 public function scopeAssessedFacilities($query,$params)
     {

     	return $query->where('Assessment_Term',$params['Term'])
     				 ->select('Facility_ID','status','Assessment_Term as Term')
     				 ->with(['facility'=>function($query){
     				 	$query->select('FacilityCode','FacilityName');
     				 }]);
     }

     public function scopeView($query,$params)
     {





     	return $query->where('Survey',$params['Survey'])
     				 ->where('Assessment_Term',$params['Term'])
     				 ->select('Assessment_ID','Facility_ID','Survey','Assessment_Term','Date','status')
     				 ->with(['facility'=>function($query){
     				 	$query->select('FacilityCode','FacilityName');
     				 	}])
     				 ->with(['assessor'=>function($query){
     				 	$query->select('Name','AssID');
     				 }])
     				 ->whereHas('facility', function($q) use ($params){
    					$q->where('County',$params['County'])
    					  ->where('District',$params['SubCounty']);
							});    				

     				 
     }

     public function facility() {
        return $this->belongsTo('App\Tables\Facilities','Facility_ID','FacilityCode');
    }

    public function assessor(){
    	return $this->hasOne('App\Tables\Assessor','AssID','Assessment_ID');
    }


}