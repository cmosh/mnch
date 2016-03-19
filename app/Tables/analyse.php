<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
 use App\Http\Controllers\ArrayRedis as Cache;
//use Cache;
use Excel;
$surveys = null;

class analyse extends analysisfunctions {
 
  

	public static function chanalytics($data,$Year1,$Year2,$Year3,$Year4,$county,$tm){
	//Feed in survey
		global $surveys;
		global $term;
		$term = $tm;
		$surveys = $data;
		$ch = new analyse();
		//Json Making
		$JsonArray = (array(
			// 'CHV2_Guidelines' => $ch->CHV2_Guidelines->__invoke($county),
			// 'CHV2_Tools' => $ch->CHV2_Tools->__invoke($county),
			// 'CHV2_DTreatmentCommodities'  => $ch->CHV2_DTreatmentCommodities->__invoke($county),
			// 'CHV2_Antibiotics' =>  $ch->CHV2_Antibiotics->__invoke($county),
			// 'CHV2_Malaria'=> $ch->CHV2_Malaria->__invoke($county),
			// 'CHV2_ortf'=> $ch->CHV2_ortf->__invoke($county),
			// 'CHV2_supplies' =>$ch->CHV2_supplies->__invoke($county),
			// 'CHV2_resources'=> $ch->CHV2_resources->__invoke($county),
			// 'CHV2_u5Register'=> $ch->CHV2_u5Register->__invoke($county,$Year1),
			// 'CHV2_u5RegisterN'=> $ch->CHV2_u5RegisterN->__invoke($county,$Year3),
			// 'CHV2_annualtrends'=> $ch->CHV2_annualtrends->__invoke($county,$Year2),
			// 'CHV2_annualtrendsN'=> $ch->CHV2_annualtrendsN->__invoke($county,$Year4),
			'CHV2_ownership' => $ch->CHV2_ownership->__invoke($county),
			'CHV2_types' => $ch->CHV2_types->__invoke($county),
			'CHV2_staff_trained'=> $ch->CHV2_staff_trained->__invoke($county),
			// 'CHV2_DTreatmentAvailability'=> $ch->CHV2_DTreatmentAvailability->__invoke($county),
			// 'CHV2_AntibioticsAvailability'=> $ch->CHV2_AntibioticsAvailability->__invoke($county),
			// 'CHV2_MalariaAvaialability'=> $ch->CHV2_MalariaAvaialability->__invoke($county),
			// 'CHV2_comm_strategy'=> $ch->CHV2_comm_strategy->__invoke($county),
			// 'CHV2_lort'=> $ch->CHV2_lort->__invoke($county),
			// 'CHV2_genopd'=> $ch->CHV2_genopd->__invoke($county)
			));
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
				$val = '$x = $in->'.$funct.'->__invoke("'.$county.'");';
				break;

		
				default:
				$val = '$x = $in->'.$funct.'->__invoke("'.$county.'","'.$yr.'");';

				break;
			
		
		}

	
		 eval($val);



		return $x;

		
	}

	public static function sec3Years($surveys){
		global $surveys;
		$recset = $surveys;

	$Years = Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name')->toArray();
	return $Years;


	}


	public static function mnhanalytics($data,$county,$tm){
	//Feed in survey
		global $surveys;
		global $term;
		$term = $tm;	
		
		$surveys = $data;
		
		$mnh = new analyse();

				
	//Json Making

		$JsonArray = (array(
			 'Guidelines' =>$mnh->MNHV2_Guidelines->__invoke($county),
			 'Tools' =>$mnh->MNHV2_Tools->__invoke($county),
			'DService' => $mnh->MNHV2_DService->__invoke($county),
			'HMan' => $mnh->MNHV2_HMan->__invoke($county),
			'Bemonc'=>$mnh->MNHV2_Bemonc->__invoke($county),
			'Cemonc'=>$mnh->MNHV2_Cemonc->__invoke($county),
			'ownership' => $mnh->MNHV2_ownership->__invoke($county),
			'types' => $mnh->MNHV2_types->__invoke($county),
			'jaids' => $mnh->MNHV2_jjavailability->__invoke($county),
			'NewBornCare' => $mnh->MNHV2_NewBornCare->__invoke($county),
			'Kangaroo1' => $mnh->MNHV2_Kangaroo1->__invoke($county),
			'Kangaroo2' => $mnh->MNHV2_Kangaroo2->__invoke($county),
			'devpep' => $mnh->MNHV2_devpep->__invoke($county),
			'dserviceconduct' =>$mnh->MNHV2_dserviceconduct->__invoke($county),
			'skillbirth' => $mnh->MNHV2_skillbirth->__invoke($county),
			'bedcapacity' => $mnh->MNHV2_bedcapacity->__invoke($county),
			'hours24'=> $mnh->MNHV2_hours24->__invoke($county),
			'BemoncChallenge'=>$mnh->MNHV2_BemoncChallenge->__invoke($county),
			'staff_trained'=>$mnh->MNHV2_staff_trained->__invoke($county),
			'MainBlood'=>$mnh->MNHV2_MainBlood->__invoke($county),
			'ReasonBlood'=>$mnh->MNHV2_ReasonBlood->__invoke($county),
			'Reasoncs'=>$mnh->MNHV2_Reasoncs->__invoke($county),
			'EquipAvail'=>$mnh->MNHV2_EquipAvail->__invoke($county),
			'testing'=>$mnh->MNHV2_testing->__invoke($county),
			'devkit'=>$mnh->MNHV2_devkit->__invoke($county),
			'HIVTest'=>$mnh->MNHV2_HIVTest->__invoke($county)
			));




		return $JsonArray;
	}

	public static function imcianalytics($data,$county){
	//Feed in survey
		global $surveys;		
		
		$surveys = $data;
		
		$imci = new analyse();

				
	//Json Making

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
	//public static function 

	}