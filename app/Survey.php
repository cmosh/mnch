<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

	// each Survey has many sections
    public function sections() {
        return $this->hasMany('App\Section','surveyID','surveyID');
    }

}
