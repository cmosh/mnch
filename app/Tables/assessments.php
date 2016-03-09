<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Carbon\Carbon;
class assessments extends Eloquent  {

	//
	protected $collection ='assessments';
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
     				 ->select('Assessment_ID','Facility_ID','Survey','Assessment_Term','Date','Status')
     				 ->with(['facility'=>function($query) use ($params){
     				 	$query->select('FacilityCode','FacilityName','County','District')
     				 		->where('County',$params['County'])
     				 		->where('District',$params['SubCounty']);
     				 	}])
     				 ->with(['assessor'=>function($query){
     				 	$query->select('Name','AssID');
     				 }])
     				 
                     ;    
    }	

     public function scopeParticipants($query,$params)
     {
        return $query->where('Survey',$params['Survey'])
     				 ->select('Assessment_ID','Facility_ID','Survey','Assessment_Term','Date','Status','PartID')
     				 ->with(['facility'=>function($query) use ($params){
     				 	$query->select('FacilityCode','FacilityName');
     				 	}])
     				 ->with(['assessor'=>function($query){
     				 	$query->select('Name','AssID');
     				 }])
     				 ->with(['participant'=>function($query){
     				 	$query->select('Name_of_Participant','PartID');
     				 }])
     				 
                     ;    
    }	

    // public function scopeCounties($query){
    //     return $query->select('Facility_ID')

    //                   ->with(['facility'=>function($query) {
    //                     $query->select('FacilityCode','County');
    //                          // ->groupby('County');
    //                     }]);
    // }
    public function participant() {
        return $this->belongsTo('App\Tables\Participants','PartID','PartID');
    }
     public function facility() {
        return $this->belongsTo('App\Tables\Facilities','Facility_ID','FacilityCode');
    }
    public function facility_short() {
        return $this->belongsTo('App\Tables\Facilities','Facility_ID','FacilityCode')->select('FacilityCode','District','FacilityName','County');
    }

    public function user(){
         return $this->belongsTo('App\User','UserId')->select('name','role');
    }
    public function assessor(){
    	return $this->hasOne('App\Tables\Assessor','AssID','Assessment_ID');
    }

     public function assessor_short(){
        return $this->hasOne('App\Tables\Assessor','AssID','Assessment_ID')->select('AssID','Name');
    }

    public function asurvey(){
        return $this->belongsTo('App\Tables\Survey','Survey')->select('surveyID','Version','Runtime','Description');
    }

    public static function Monitor($params=null,$today=false){

       $params['County'] = isset($params['County']) ? $params['County'] : false ;
         $params['Survey'] = isset($params['Survey']) ? $params['Survey'] : false ;

         if($today)
            $Surveys = $params['Survey'] ? Self::where('Survey','Like',$params['Survey'].'%')->where('updated_at','>=',Carbon::today())->get() : Self::where('updated_at','>=',Carbon::today()) ;
         else
            $Surveys = $params['Survey'] ? Self::where('Survey','Like',$params['Survey'].'%')->get() : Self::all() ;
   

      $Surveys->load('facility_short')->load('user')->load('asurvey')->load('assessor_short');

      
        return $params['County'] ? $Surveys->where('facility_short.County',$params['County']) : $Surveys;
    


    }


}