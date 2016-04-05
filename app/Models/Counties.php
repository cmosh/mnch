<?php namespace App\Models;

use Moloquent;

class Counties extends Moloquent {

	protected $collection = 'counties';

	

     public function facilities() {
        return $this->hasMany('App\Models\Facilities','Name','County')->select('FacilityCode');
    }

}
