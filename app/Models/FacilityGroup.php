<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class FacilityGroup extends Moloquent {
use SyncsWithFirebase;

	protected $collection = 'FacilityGroups';

	 public function x()
    {
        return $this->hasMany('App\Models\Facilities','Type','FacilityType');
    }
	
}
