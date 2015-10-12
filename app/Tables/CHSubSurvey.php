<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class CHSubSurvey extends Model {


	protected $table = 'CHSubSurveys';
	//



	 public function x()    
    {
        return $this->hasMany('App\Tables\SubmittedRecords_CH','AssID','Assessment_ID');
    }
     public function y()
    {
        return $this->hasOne('App\Tables\SubmittedRecords_CH','AssID','Assessment_ID');
    }
    public function z()
    {
        return $this->hasOne('App\Tables\Facilities','FacilityCode','Facility_ID');
    }

}
