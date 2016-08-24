<?php namespace App\Models;

// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Moloquent;
use Mpociot\Firebase\SyncsWithFirebase;
class Section extends Moloquent {
use SyncsWithFirebase;

protected $collection ="sections";

	// each Section has many blocks
    public function blocks() {
        return $this->hasMany('App\Models\Block','sectionID','sectionID');
    }

     public function survey() {
        return $this->belongsTo('App\Models\Survey','_id','surveyID');
    }

    public function collection()
        {
             return $this->collection;
        }

}
