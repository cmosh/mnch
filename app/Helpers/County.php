<?php

namespace App\Helpers;
use App\Tables\counties;
use App\Tables\assessments;
use App\Tables\Facilities;
use Illuminate\Support\Collection;


class County{



public static function AllAssessed(){

	 $Assessments = assessments::all();

	$result = new Collection;
	
			 $Assessments->load('facility_short');


			 return $Assessments->lists('facility_short')->lists('County')->unique();
	}

public static function Submitted(){

	 	$Assessments = assessments::where('Status','Submitted')->get();
	 	$Facilities =  $Assessments->lists('Facility_ID')->toArray();
	 //	return counties::whereRaw(['Name' => array("Nairobi","Aringo")])->get();
 return 	counties::raw()->find( { $or : [ { 'Name' : "Nairobi" }, { "Name" : "Baringo" } ] });

public static function Incomplete(){

	 $Assessments = assessments::all();

	$result = new Collection;
	
			 $Assessments->load('facility_short');


			 return $Assessments->lists('facility_short')->lists('County')->unique();
	}


}