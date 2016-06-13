<?php namespace App\Helpers;

use App\Models\Block;
$surveys = null;

class analyse extends Analysis_Constructor {
 
  

	public static function chv2analytics($data,$Year1,$Year2,$Year3,$Year4,$county,$tm){
	//Feed in survey
		global $surveys;
		global $term;
		$term = $tm;
		$surveys = $data;
		$ch = new analyse();
		//Json Making
		set_time_limit(30);
		$JsonArray = [];
			set_time_limit(30);
			$JsonArray ['CHV2_Guidelines'] = $ch->CHV2_Guidelines->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_Tools'] = $ch->CHV2_Tools->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_DTreatmentCommodities'] = $ch->CHV2_DTreatmentCommodities->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_Antibiotics'] = $ch->CHV2_Antibiotics->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_Malaria'] = $ch->CHV2_Malaria->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_ortf'] = $ch->CHV2_ortf->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_supplies' ] =$ch->CHV2_supplies->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_resources'] = $ch->CHV2_resources->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_u5Register'] = $ch->CHV2_u5Register->__invoke($county,$Year1);
			set_time_limit(30);
			$JsonArray ['CHV2_u5RegisterN'] = $ch->CHV2_u5RegisterN->__invoke($county,$Year3);
			set_time_limit(30);
			$JsonArray ['CHV2_annualtrends'] = $ch->CHV2_annualtrends->__invoke($county,$Year2);
			set_time_limit(30);
			$JsonArray ['CHV2_annualtrendsN'] = $ch->CHV2_annualtrendsN->__invoke($county,$Year4);
			set_time_limit(30);
			$JsonArray ['CHV2_ownership'] =$ch->CHV2_ownership->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_types'] = $ch->CHV2_types->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_staff_trained'] = $ch->CHV2_staff_trained->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_DTreatmentAvailability'] = $ch->CHV2_DTreatmentAvailability->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_AntibioticsAvailability'] = $ch->CHV2_AntibioticsAvailability->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_MalariaAvaialability'] = $ch->CHV2_MalariaAvaialability->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_comm_strategy'] = $ch->CHV2_comm_strategy->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_lort'] = $ch->CHV2_lort->__invoke($county);
			set_time_limit(30);
			$JsonArray ['CHV2_genopd'] = $ch->CHV2_genopd->__invoke($county);
			
		return $JsonArray;
	}

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


	public static function mnhv2analytics($data,$county,$tm){
	//Feed in survey
		global $surveys;
		global $term;
		$term = $tm;	
		
		$surveys = $data;
		
		$mnh = new analyse();

				
	//Json Making
		$JsonArray = [];
			// set_time_limit(30);
			set_time_limit(30);
			$JsonArray ['Guidelines'] = $mnh->MNHV2_Guidelines->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Tools'] =$mnh->MNHV2_Tools->__invoke($county);
			set_time_limit(30);
			$JsonArray ['DService'] = $mnh->MNHV2_DService->__invoke($county);
			$JsonArray ['HMan'] = $mnh->MNHV2_HMan->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Bemonc'] =$mnh->MNHV2_Bemonc->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Cemonc'] =$mnh->MNHV2_Cemonc->__invoke($county);
			set_time_limit(30);
			$JsonArray ['ownership'] = $mnh->MNHV2_ownership->__invoke($county);
			set_time_limit(30);
			$JsonArray ['types'] = $mnh->MNHV2_types->__invoke($county);
			set_time_limit(30);
			$JsonArray ['jaids'] = $mnh->MNHV2_jjavailability->__invoke($county);
			set_time_limit(30);
			$JsonArray ['NewBornCare'] = $mnh->MNHV2_NewBornCare->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Kangaroo1'] = $mnh->MNHV2_Kangaroo1->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Kangaroo2'] = $mnh->MNHV2_Kangaroo2->__invoke($county);
			set_time_limit(30);
			$JsonArray ['devpep'] = $mnh->MNHV2_devpep->__invoke($county);
			set_time_limit(30);
			$JsonArray ['dserviceconduct'] =$mnh->MNHV2_dserviceconduct->__invoke($county);
			set_time_limit(30);
			$JsonArray ['skillbirth'] = $mnh->MNHV2_skillbirth->__invoke($county);
			set_time_limit(30);
			$JsonArray ['bedcapacity'] = $mnh->MNHV2_bedcapacity->__invoke($county);
			set_time_limit(30);
			$JsonArray ['hours24'] = $mnh->MNHV2_hours24->__invoke($county);
			set_time_limit(30);
			$JsonArray ['BemoncChallenge'] = $mnh->MNHV2_BemoncChallenge->__invoke($county);
			set_time_limit(30);
			// 'staff_trained'] =$mnh->MNHV2_staff_trained->__invoke($county);
			$JsonArray ['MainBlood'] = $mnh->MNHV2_MainBlood->__invoke($county);
			set_time_limit(30);
			$JsonArray ['ReasonBlood'] = $mnh->MNHV2_ReasonBlood->__invoke($county);
			set_time_limit(30);
			$JsonArray ['Reasoncs'] = $mnh->MNHV2_Reasoncs->__invoke($county);
			set_time_limit(30);
			$JsonArray ['EquipAvail'] = $mnh->MNHV2_EquipAvail->__invoke($county);
			set_time_limit(30);
			$JsonArray ['testing'] = $mnh->MNHV2_testing->__invoke($county);
			set_time_limit(30);
			$JsonArray ['devkit'] = $mnh->MNHV2_devkit->__invoke($county);
			set_time_limit(30);
			$JsonArray ['HIVTest'] = $mnh->MNHV2_HIVTest->__invoke($county);
		return $JsonArray;
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