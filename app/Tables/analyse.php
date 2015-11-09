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
			'CHV2_Guidelines' => $ch->CHV2_Guidelines->__invoke($county),
			'CHV2_Tools' => $ch->CHV2_Tools->__invoke($county),
			'CHV2_DTreatmentCommodities'  => $ch->CHV2_DTreatmentCommodities->__invoke($county),
			'CHV2_Antibiotics' =>  $ch->CHV2_Antibiotics->__invoke($county),
			'CHV2_Malaria'=> $ch->CHV2_Malaria->__invoke($county),
			'CHV2_ortf'=> $ch->CHV2_ortf->__invoke($county),
			'CHV2_supplies' =>$ch->CHV2_supplies->__invoke($county),
			'CHV2_resources'=> $ch->CHV2_resources->__invoke($county),
			'CHV2_u5Register'=> $ch->CHV2_u5Register->__invoke($county,$Year1),
			'CHV2_u5RegisterN'=> $ch->CHV2_u5RegisterN->__invoke($county,$Year3),
			'CHV2_annualtrends'=> $ch->CHV2_annualtrends->__invoke($county,$Year2),
			'CHV2_annualtrendsN'=> $ch->CHV2_annualtrendsN->__invoke($county,$Year4),
			'CHV2_ownership' => $ch->CHV2_ownership->__invoke($county),
			'CHV2_types' => $ch->CHV2_types->__invoke($county),
			'CHV2_staff_trained'=> $ch->CHV2_staff_trained->__invoke($county),
			'CHV2_DTreatmentAvailability'=> $ch->CHV2_DTreatmentAvailability->__invoke($county),
			'CHV2_AntibioticsAvailability'=> $ch->CHV2_AntibioticsAvailability->__invoke($county),
			'CHV2_MalariaAvaialability'=> $ch->CHV2_AntibioticsAvailability->__invoke($county),
			'CHV2_comm_strategy'=> $ch->CHV2_comm_strategy->__invoke($county),
			'CHV2_lort'=> $ch->CHV2_lort->__invoke($county),
			'CHV2_genopd'=> $ch->CHV2_genopd->__invoke($county)
			));
		return $JsonArray;
	}

	public static function getindividual($funct,$data,$county,$yr,$tm){

		global $surveys;
		global $term;
		$term = $tm;	
		$surveys = $data;

		$ch = new analyse();

		switch ($yr) {
				case 'not':
				$val = '$x = $ch->'.$funct.'->__invoke("'.$county.'");';
				break;

		
				default:
				$val = '$x = $ch->'.$funct.'->__invoke("'.$county.'","'.$yr.'");';

				break;
			
		
		}

	
		 eval($val);



		return $x;

		
	}

	public static function sec3Years($surveys){
		global $surveys;
		$recset = $surveys;

	$Years = Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name');
	return $Years;


	}


	public static function mnhanalytics($data,$county){
	//Feed in survey
		global $surveys;
		
		$surveys = $data;
		


		

	//Guidelines Availability
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			$Guidelines = Cache::remember('MNHV2_GuidelinesMNH'.$county,180,function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV2SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});		
	//Tools Availability
		$ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		$Tools = Cache::remember('MNHV2_ToolsMNH'.$county,180,function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK3RW',$ToolsHeading,0,3,13,'COL01','COL02','/^/');
      	});	
      	//DService
		$DSheading = array('Provsion of Delivery Services', 'Yes', 'No','No information provided' );
		$DService = Cache::remember('MNHV2_DService'.$county,180,function() use($DSheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK1RW',$DSheading,0,2,3,'COL01','COL02','/^/');
      	});				
			



		//EquipAvail
		$EquipAvailheading = array('Equipment Availability', 'Available', 'Not Available','No information provided' );
		$EquipAvail = Cache::remember('MNHV2_EquipAvail'.$county,180,function() use($EquipAvailheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC6BLK1RW',$EquipAvailheading,0,3,20,'COL01','COL02','/^/');
      	});				


		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		$jjavailability = Cache::remember('MNHV2_JaidsMNH'.$county,180,function() use($jheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$jheading,21,3,11,'COL01','COL02','/^have/');
      	});				

	
		// Health Facilitty Management
$HManH = array('Health Facilitty Management', 'Yes', 'No','No information provided' );
		$HMan = Cache::remember('MNHV2_HMan'.$county,180,function() use($HManH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK4RW',$HManH,28,3,9,'COL01','COL02','/^a/');
      	});		

// Bemonc
$BemoncH = array('BEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		$Bemonc = Cache::remember('MNHV2_Bemonc'.$county,180,function() use($BemoncH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncH,0,3,11,'COL01','COL02','/^/');
      	});		

 // BemoncChallenge

$BemoncChallengeH = array('BEmONC Signal Functions Challenges', 'Inadequate Drugs', 'Inadequate Skills','Inadequate Supplies','No Job Aids','Inadequate Equipment','Case Never Present','No Challenged Experienced','No information provided' );
		$BemoncChallenge = Cache::remember('MNHV2_BemoncChallenge'.$county,180,function() use($BemoncChallengeH){
      					return 	  self::SevenOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncChallengeH,0,3,11,'COL01','COL03','/^/');
      	});		


      	//Cemonc

      	$CemoncExclude = array(4,10,11);

$CemoncH = array('CEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		$Cemonc = Cache::remember('MNHV2_CemonC'.$county,180,function() use($CemoncH,$CemoncExclude){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK3RW',$CemoncH,0,3,9,'COL01','COL02','/^(1)(2)(3)(4)Does this facility/',$CemoncExclude);
      	});		

      	//HIVTest

$HIVTestheadings = array('Provision og HIV & Testing', 'Yes', 'No','No information provided' );
		$HIVTest = Cache::remember('MNHV2_HIVTest'.$county,180,function() use($HIVTestheadings){
      					$temp =  self::twoOptionsFullStack( 'MNHV2SEC2BLK4RW',$HIVTestheadings,4,3,12,'COL01','COL02','/^/');
      					$temp[2][0] = 'A'.$temp[2][0];
      					return $temp;
      	});		




    //ownership
		$ownership = Cache::remember('MNHV2_ownershipMNH'.$county,180,function() {

			return self::ownership();
		});
	//types
		$types = Cache::remember('MNHV2_typesMNH'.$county,180,function() {

			return self::types();
		});
	//dserviceconduct
		$dserviceconduct = Cache::remember('MNHV2_dserviceconduct'.$county,180,function() {

			return self::dserviceconduct();
		});
	

	//NewBornCare
		$NewBornCareHeadings = array('New Born Care','Yes','No','No information provided');
		$NewBornCare = Cache::remember('MNHV2_NewBornCare'.$county,180,function() use ($NewBornCareHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK5RW03COL02',$NewBornCareHeadings);
		});

//Kangaroo1
		$Kangaroo1Headings = array('Kangaroo Awarness','Yes','No','No information provided');
		$Kangaroo1 = Cache::remember('MNHV2_Kangaroo1'.$county,180,function() use ($Kangaroo1Headings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK6RW03COL02',$Kangaroo1Headings);
		});

		//Kangaroo1
		$Kangaroo2Headings = array('Kangaroo Corner','Yes','No','No information provided');
		$Kangaroo2 = Cache::remember('MNHV2_Kangaroo2'.$county,180,function() use ($Kangaroo2Headings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK6RW04COL02',$Kangaroo2Headings);
		});

		//devpep
		$devpepHeadings = array('Preparedness for Delivery','Yes','No','No information provided');
		$devpep = Cache::remember('MNHV2_devpep'.$county,180,function() use ($devpepHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK7RW04COL02',$devpepHeadings);
		});
		//skillbirth
		$skillbirth = Cache::remember('MNHV2_skillbirth'.$county,180,function(){
			return self::skillbirth();
		});
		//bedcapacity
		$bedcapacity = Cache::remember('MNHV2_bedcapacity'.$county,180,function(){

			return self::bedcapacity();
		});

		//hours24
		$hours24headings = array('24 hour service delivery', 'Yes', 'No','No information provided' );
		$hours24 = Cache::remember('MNHV2_hours24'.$county,180,function()use($hours24headings){

			return self::FacilityTypes2Stack('MNHV2SEC1BLK3RW03COL02',$hours24headings);
		});

		//testing
		$testingheadings = array('Testing Supplies', 'Available', 'Not Available','No information provided' );
		$testing = Cache::remember('MNHV2_testing'.$county,180,function()use($testingheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK2RW02COL02',$testingheadings);
		});

		//devkit
		$devkitheadings = array('Delivery kit components', 'Available', 'Not Available','No information provided' );
		$devkit = Cache::remember('MNHV2_devkit'.$county,180,function()use($devkitheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK3RW03COL02',$devkitheadings);
		});


		//staff_trained_18
		$staff_trained = Cache::remember('MNHV2_staff_trained'.$county,180,function(){
			return self::staff_trained_MNH();
		});
		//MainBlood
		$MainBloodSLices = array('Blood Bank Available ','Transfusion Done But No Blood Bank','Other','No information provided');
		$MainBlood  = Cache::remember('MNHV2_MainBlood'.$county,180,function() use ($MainBloodSLices){
			return self::MNHPies($MainBloodSLices,'MNHV2SEC2BLK3RW04COL02');
		});
		//ReasonBlood
		$ReasonBloodSLices = array('Blood Bank Not Available ','Supplies and equipment not available','Other','No information provided');
		$ReasonBlood  = Cache::remember('MNHV2_ReasonBlood'.$county,180,function() use ($ReasonBloodSLices){
			return self::MNHPies($ReasonBloodSLices,'MNHV2SEC2BLK3RW05COL02');
		});
		//Reasoncs
		$ReasoncsSLices = array('Supplies and equipment not available','Theatre Space Not Available','Human Resource','Other','No information provided');
		$Reasoncs  = Cache::remember('MNHV2_Reasoncs'.$county,180,function() use ($ReasoncsSLices){
			return self::MNHPies($ReasoncsSLices,'MNHV2SEC2BLK3RW09COL02');
		});

		
	//Json Making

		$JsonArray = (array(
			 'Guidelines' =>$Guidelines, 
			 'Tools' =>$Tools,
			'DService' => $DService,
			'HMan' => $HMan,
			'Bemonc'=>$Bemonc,
			'Cemonc'=>$Cemonc,
			'ownership' => $ownership,
			'types' => $types,
			'jaids' => $jjavailability,
			'NewBornCare' => $NewBornCare,
			'Kangaroo1' => $Kangaroo1,
			'Kangaroo2' => $Kangaroo2,
			'devpep' => $devpep,
			'dserviceconduct' =>$dserviceconduct,
			'skillbirth' => $skillbirth,
			'bedcapacity' => $bedcapacity,
			'hours24'=> $hours24,
			'BemoncChallenge'=>$BemoncChallenge,
			'staff_trained'=>$staff_trained,
			'MainBlood'=>$MainBlood,
			'ReasonBlood'=>$ReasonBlood,
			'Reasoncs'=>$Reasoncs,
			'EquipAvail'=>$EquipAvail,
			'testing'=>$testing,
			'devkit'=>$devkit,
			'HIVTest'=>$HIVTest
			));




		return $JsonArray;
	}
	//public static function 

	}