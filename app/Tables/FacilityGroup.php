<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class FacilityGroup extends Model {

	protected $table = 'FacilityGroups';

	 public function x()
    {
        return $this->hasMany('App\Tables\Facilities','Type','FacilityType');
    }
	
}
