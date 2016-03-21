<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class FacilityGroup extends Eloquent {

	protected $collection = 'FacilityGroups';

	 public function x()
    {
        return $this->hasMany('App\Tables\Facilities','Type','FacilityType');
    }
	
}
