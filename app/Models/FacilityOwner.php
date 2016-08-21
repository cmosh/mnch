<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class FacilityOwner extends Moloquent {
use SyncsWithFirebase;

	protected $collection = 'FacilityOwners';

	
	
}
