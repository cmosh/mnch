<?php

namespace App\Helpers;
use App\Tables\counties;
use App\Tables\assessments;
use App\Tables\Facilities;
use Illuminate\Support\Collection;


class County{



public static function AllAssessed(){

	 $Assessments = assessments::all();	
	
	$Assessments->load('facility_short');
	
	return $Assessments->lists('facility_short')->lists('County')->unique();
	}

public static function Submitted(){

	
	$Counties = assessments::where('Status','Submitted')->with('facility_short')->get()->lists('facility_short')->lists('County')->unique();

	$SubmittedCounties = [];
	$Surveys = ['CH','MNH','IMCI'];
	foreach ($Counties as $County) {
		foreach ($Surveys as $Survey) {
				 isset($result['New']) ? $result['New']: 0;
				$Number = Facilities::CountyAssessments(array('County'=>$County,
                                                        'Survey'=>$Survey,
                                                        'Status'=>'Submitted'
                                                        )
                                                );
		$SubmittedCounties [] = $Number < 1 ? null :
						array(  'Description' => $Survey.' Survey',
								'County' => $County,
								'submitted' => $Number
						);
						

			}
		}
	return array_filter($SubmittedCounties);	
	}


	public static function SubmittedToday(){

	
	$Counties = assessments::where('Status','Submitted')->with('facility_short')->get()->lists('facility_short')->lists('County')->unique();

	$SubmittedCounties = [];
	$Surveys = ['CH','MNH','IMCI'];
	foreach ($Counties as $County) {
		foreach ($Surveys as $Survey) {
				 isset($result['New']) ? $result['New']: 0;
				$Number = Facilities::CountyAssessmentsToday(array('County'=>$County,
                                                        'Survey'=>$Survey,
                                                        'Status'=>'Submitted'
                                                        )
                                                );
		$SubmittedCounties [] = $Number < 1 ? null :
						array(  'Description' => $Survey.' Survey',
								'County' => $County,
								'submitted' => $Number
						);
						

			}
		}
	return array_filter($SubmittedCounties);	
	}




public static function Incomplete(){

	
	$Counties = assessments::where('Status','Incomplete')->with('facility_short')->get()->lists('facility_short')->lists('County')->unique();

	$IncompleteCounties =[];
	$Surveys = ['CH','MNH','IMCI'];
	foreach ($Counties as $County) {
		foreach ($Surveys as $Survey) {
				 isset($result['New']) ? $result['New']: 0;
				$Number = Facilities::CountyAssessments(array('County'=>$County,
                                                        'Survey'=>$Survey,
                                                        'Status'=>'Incomplete'
                                                        )
                                                );
		$IncompleteCounties [] = $Number < 1 ? null :
						array(  'Description' => $Survey.' Survey',
								'County' => $County,
								'incomplete' => $Number
						);
						

			}
		}
	return array_filter($IncompleteCounties);	
	}


	public static function IncompleteToday(){

	
	$Counties = assessments::where('Status','Incomplete')->with('facility_short')->get()->lists('facility_short')->lists('County')->unique();

	$IncompleteCounties = [];
	$Surveys = ['CH','MNH','IMCI'];
	foreach ($Counties as $County) {
		foreach ($Surveys as $Survey) {
				 isset($result['New']) ? $result['New']: 0;
				$Number = Facilities::CountyAssessmentsToday(array('County'=>$County,
                                                        'Survey'=>$Survey,
                                                        'Status'=>'Incomplete'
                                                        )
                                                );
		$IncompleteCounties [] = $Number < 1 ? null :
						array(  'Description' => $Survey.' Survey',
								'County' => $County,
								'incomplete' => $Number
						);
						

			}
		}
	return array_filter($IncompleteCounties);	
	}


}