<?php namespace App\Models;

use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Survey extends Moloquent {
use SyncsWithFirebase;
	protected $collection ='surveys';
	// each Survey has many sections
    public function sections() {
        return $this->hasMany('App\Models\Section','surveyID','id');
    }

}
