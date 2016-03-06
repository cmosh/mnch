<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class counties extends Eloquent {

	protected $collection = 'counties';

	 // public function scopeAssessed($query){
  //       return $query->select('Name')    
  //       		// 	 ->with(['facilities'=>function($query){
  //    				 // 	$query->select('FacilityCode','FacilityName');
  //    				 // }])
  //       			->with('facilities.assessments_County')
  //       			 ->where('Name','Baringo')
  //    				  ;                 
  //   }

     public function facilities() {
        return $this->hasMany('App\Tables\Facilities','Name','County')->select('FacilityCode');
    }

}
