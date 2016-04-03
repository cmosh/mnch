<?php namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class counties extends Eloquent {

	protected $collection = 'counties';

	

     public function facilities() {
        return $this->hasMany('App\Models\Facilities','Name','County')->select('FacilityCode');
    }

}
