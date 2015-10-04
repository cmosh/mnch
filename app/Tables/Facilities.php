<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model {

	protected $table = 'Facilities';

	protected $fillable = ['Index','FacilityName', 'FacilityCode','County','Type','Owner'];
	
	 public function p()
    {
        return $this->hasOne('App\Tables\MNHSubSurvey','Facility_ID','FacilityCode');
    }


}
