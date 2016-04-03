<?php namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class FacilityGroup extends Eloquent {

	protected $collection = 'FacilityGroups';

	 public function x()
    {
        return $this->hasMany('App\Models\Facilities','Type','FacilityType');
    }
	
}
