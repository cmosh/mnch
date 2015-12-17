<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class IMCISubSurvey extends Model {

	

	protected $table = 'IMCISubSurveys';
	//

	 public function x()
    {
        return $this->hasMany('App\Tables\SubmittedRecords_IMCI','AssID','Assessment_ID');
    }
     public function y()
    {
        return $this->hasOne('App\Tables\SubmittedRecords_IMCI','AssID','Assessment_ID');
    }
    public function z()
    {
        return $this->hasOne('App\Tables\Facilities','FacilityCode','Facility_ID');
    }


}
