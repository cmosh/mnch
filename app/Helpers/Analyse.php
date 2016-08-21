<?php namespace App\Helpers;

use App\Models\Block;
$surveys = null;

class analyse extends Analysis_Constructor {  

	

	public static function getindividual($funct,$data,$county,$yr,$tm){

		global $surveys;
		global $term;
		$term = $tm;	
		$surveys = $data;

		$in = new analyse();

		switch ($yr) {
				case 'not':
			$x = $in->{$funct}->__invoke($county);
				break;		
				default:
			$x = $in->{$funct}->__invoke($county,$yr);
				break;
			}
		 return $x;	
	}

	public static function sec3Years($surveys){
		global $surveys;
		$recset = $surveys;

	$Years = Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('name')->toArray();
	return $Years;


	}


	

	public static function imciv1analytics($data,$county){
	//Feed in survey
		global $surveys;		
		
		$surveys = $data;
		
		$imci = new analyse();

		

		$JsonArray = (array(
			 'Certification' =>$imci->IMCIV1_CERTIFICATION->__invoke($county),
			 'Sec_3' =>$imci->IMCIV1_sec3->__invoke($county),
			 'Observation' =>$imci->IMCIV1_Observation->__invoke($county),
			 'WorkingLocation' =>$imci->IMCIV1_WORKLOC->__invoke($county),
			 'Classification' =>$imci->IMCIV1_Classification->__invoke($county),
			 'ObservationB' =>$imci->IMCIV1_ObservationB->__invoke($county),
			 'ClassificationB' =>$imci->IMCIV1_ClassificationB->__invoke($county),
			 'WeightTaken' =>$imci->IMCIV1_WeightTaken->__invoke($county),
			 'SpecialNeeds' =>$imci->IMCIV1_SpecialNeeds->__invoke($county),
			 'Consobsv'=>$imci->IMCIV1_CONSOBSV->__invoke($county),
			 'ExitInterview'=>$imci->IMCIV1_EXTINT->__invoke($county),
			 'ExitInterviewB'=>$imci->IMCIV1_EXTINTB->__invoke($county),
			 'CertCriteriia'=>$imci->IMCIV1_CERTIFICATIONCRITERIA->__invoke($county),
			 'Outcome'=>$imci->IMCIV1_outcome->__invoke($county),
			 'Trained'=>$imci->IMCIV1_trained->__invoke($county)
			));




		return $JsonArray;
	}
	

	}