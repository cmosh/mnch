<?php namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Moloquent;

class Section extends Moloquent {

	// each Section has many blocks
    public function blocks() {
        return $this->hasMany('App\Models\Block','sectionID','sectionID');
    }

     public function survey() {
        return $this->belongsTo('App\Models\Survey','_id','surveyID');
    }

}
