<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Counties extends Moloquent {
use SyncsWithFirebase;

	protected $collection = 'counties';

	

     public function facilities() {
        return $this->hasMany('App\Models\Facilities','Name','County')->select('FacilityCode');
    }

}
