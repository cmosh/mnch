<?php namespace App\Models;

use Moloquent;

class counties extends Moloquent {

	protected $collection = 'counties';

	

     public function facilities() {
        return $this->hasMany('App\Models\Facilities','Name','County')->select('FacilityCode');
    }

}
