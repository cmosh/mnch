<?php namespace App\Tables;

use Illuminate\Database\Eloquent\Model;

class Participants extends Model {

	protected $table = 'Participants';

	protected $fillable = ['Index','Name_of_Participant', 'FacilityName','mobile_Number','email_address','training_site'];
	
	
}
