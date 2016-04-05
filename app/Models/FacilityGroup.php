<?php namespace App\Models;

use Moloquent;

class FacilityGroup extends Moloquent {

	protected $collection = 'FacilityGroups';

	 public function x()
    {
        return $this->hasMany('App\Models\Facilities','Type','FacilityType');
    }
	
}
