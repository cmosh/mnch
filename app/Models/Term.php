<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Term extends Moloquent  {
use SyncsWithFirebase;

	
	protected $collection='Terms';

	

}