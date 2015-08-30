<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class SubmittedSurveys extends Model {


	protected $table = 'SubmittedSurveys';
	//

	 public function x()
    {
        return $this->hasMany('App\Tables\SubmittedRecords','AssID','Assessment_ID');
    }
     public function y()
    {
        return $this->hasOne('App\Tables\SubmittedRecords','AssID','Assessment_ID');
    }

}
