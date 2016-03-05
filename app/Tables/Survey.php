<?php namespace App\Tables;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Survey extends Eloquent {

	// each Survey has many sections
    public function sections() {
        return $this->hasMany('App\Tables\Section','surveyID','surveyID');
    }

}
