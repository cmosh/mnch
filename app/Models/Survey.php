<?php namespace App\Models;

use Moloquent;

class Survey extends Moloquent {
	protected $collection ='surveys';
	// each Survey has many sections
    public function sections() {
        return $this->hasMany('App\Models\Section','surveyID','id');
    }

}
