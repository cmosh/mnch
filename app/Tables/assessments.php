<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use DB;
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

    public function survey(){
        return $this->hasOne('App\Tables\Survey','Survey','surveyID')->select('surveyID','Version','Runtime','Description');
    }

    public static function Monitor($Survey='all'){

        if($Survey == 'all'){

       $Surveys = Self::with('facility_short')->with('user')->with('survey')->with('assessor_short')->get();



    }
        else
    {
       $Surveys = Self::where('Survey','Like',$Survey.'%')->with('facility_short')->with('user')->with('survey')->with('assessor_short')->get();
    }

        return  $Surveys->transform(function ($item, $key) {
                 return collect([
                        'username'=>$item->user->name,
                        'Survey'=>$item->Survey,
                        'Assessment_Term'=>$item->Assessment_Term,
                        'Date'=>$item->Date,
                        'Status'=>$item->Status,
                        'FacilityName'=>$item->facility_short->FacilityName,
                        'assname'=> isset($item->assessor_short->Name) ?  $item->assessor_short->Name : null,
                        'Assessment_ID'=>$item->Assessment_ID,
                        'County'=>$item->facility_short->County,
                        'id'=>$item->user->_id,
                        'role'=>$item->role,
                        'FacilityCode'=>$item->Facility_ID,
                        'Version'=>$item->survey->Version,
                        'Runtime'=>$item->survey->Runtime,
                        'Description'=>$item->survey->Description,
                        'updated_at'=>$item->updated_at,
                        'SubCounty'=>$item->facility_short->District
                    ]);
                 
                });



    }


}