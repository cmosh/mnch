<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Participants extends Eloquent {

	protected $collection = 'Participants';

	protected $fillable = ['Index','Name_of_Participant', 'FacilityName','PartID','mobile_Number','email_address','training_site'];
	
	   public function facility() {
        return $this->belongsTo('App\Tables\Facilities','mfl_code','FacilityCode');
    }

   		 public function scopeView($query)
     {

     	return $query->with(['facility'=>function($query){
     				 	$query->select('FacilityCode','FacilityName');
     				 	}])
     				 ->with('assessment')
     				 ;

     }

      public function assessment() {
        return $this->belongsTo('App\Tables\assessments','PartID','PartID');
    }
	
}