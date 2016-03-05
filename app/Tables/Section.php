<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Section extends Eloquent {

	// each Section has many blocks
    public function blocks() {
        return $this->hasMany('App\Tables\Block','sectionID','sectionID');
    }

     public function survey() {
        return $this->belongsTo('App\Tables\Survey','surveyID','surveyID');
    }

}
