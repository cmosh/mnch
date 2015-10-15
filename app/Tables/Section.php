<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

	// each Section has many blocks
    public function blocks() {
        return $this->hasMany('App\Tables\Block','sectionID','sectionID');
    }

     public function survey() {
        return $this->belongsTo('App\Tables\Survey','surveyID','surveyID');
    }

}
