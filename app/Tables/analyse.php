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
 
  

	public static function chanalytics($data,$Year1,$Year2,$Year3,$Year4,$county){
	//Feed in survey
		global $surveys;
		
		$surveys = $data;

		

	//Guidelines Availability_1
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			$Guidelines = Cache::remember('CHV2_Guidelines'.$county,180,function() use($GuidelinesHeading){
      					$temp =	 self::twoOptionsFullStack( 'CHV2SEC2BLK1RW',$GuidelinesHeading,33,2,10,'COL01','COL02','/^ated/ ?');
      				$temp[8][0] = 'EID Algorithim 2009/2012/2014';
      				return $temp;

      	});		
	//Tools Availability_2
		$ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		$Tools = Cache::remember('CHV2_Tools'.$county,180,function() use($ToolsHeading){
      					$temp =	  self::twoOptionsFullStack( 'CHV2SEC2BLK2RW',$ToolsHeading,0,2,10,'COL01','COL02','/^/');
      						$temp[2][0] = 'EID Register';
      						$temp[2][0] = 'Under 5 Register';
      						return $temp;

      	});				
	//DTreatmentCommodities_3
		$DTreatmentCommoditiesExclude = array(11,12);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'Not Available','No information provided' );
		
		$DTreatmentCommodities = Cache::remember('CHV2_DTreatmentCommodities'.$county,180,function() use($DTreatmentCommoditiesExclude,$DTreatmentCommoditiesH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentCommoditiesH,0,9,17,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	});	
	//DTreatmentAvailability_4
		$DTreatmentAvailabilityExclude = array(11,12);
		$DTreatmentAvailabilityH = array('Diarhoea Treatment Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		$DTreatmentAvailability = Cache::remember('CHV2_DTreatmentAvailability'.$county,180,function() use($DTreatmentAvailabilityExclude,$DTreatmentAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentAvailabilityH,0,9,17,'COL01','COL04','/^/',$DTreatmentAvailabilityExclude);
	});			
		
	//Antibiotics_5


		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'Not Available','No information provided' );
		
		$Antibiotics = Cache::remember('CHV2_Antibiotics'.$county,180,function() use($AntibioticsH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
      	});	
    //AntibioticsAvailability_6


		$AntibioticsAvailabilityH = array('Antibiotics  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		$AntibioticsAvailability = Cache::remember('CHV2_AntibioticsAvailability'.$county,180,function() use($AntibioticsAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsAvailabilityH,0,5,9,'COL01','COL04','/^/');
      	});		

	//Malaria_7
		$MalariaH = array('Malaria  Availability', 'Available', 'Not Available','No information provided' );

		$Malaria = Cache::remember('CHV2_Malaria'.$county,180,function() use($MalariaH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/');
      	});
     //MalariaAvaialability_8
		$MalariaAvaialabilityH = array('Malaria  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );

		$MalariaAvaialability = Cache::remember('CHV2_MalariaAvaialability'.$county,180,function() use($MalariaAvaialabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaAvaialabilityH,0,2,5,'COL01','COL04','/^/');
      	});
		
	//ortf_9
		$ortfExclude = array(4,5);
		$ortfH = array('Ort Functionality', 'Yes', 'No','No information provided' );

		$ortf = Cache::remember('CHV2_ortf'.$county,180,function() use($ortfExclude,$ortfH){
      					$temp = 	 self::twoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,3,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
      						
      					$temp[1][0] = 'Does the facility have an ORT corner?';
      					$temp[2][0] = 'Are there drugsavailable in the ORTCorner?';
      					$temp[3][0] = 'Is the ORT register upto date (Including zero-reporting)?';
      					$temp[]=self::ortfunction();

      					return $temp;

      	});
		
	//supplies_10
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available','No information provided' );


		$supplies = Cache::remember('CHV2_supplies'.$county,180,function() use($suppliesH){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC6BLK2RW',$suppliesH,0,2,9,'COL01','COL02','/^/');
      	});
		
	//resources_11


		$resourcesH = array('Resource Availability', 'Available', 'Not Available','No information provided' );


		$resources = Cache::remember('CHV2_resources'.$county,180,function() use($resourcesH){
      					return 	self::twoOptionsFullStack( 'CHV2SEC7BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	
      	});
		
	//u5Register_12
		 
		$u5Register = Cache::remember('CHV2_u5Register'.$county.$Year1,180,function() use($Year1){
      					return self::u5Register($Year1);
      	});

	//u5RegisterN_13
		
		$u5RegisterN = Cache::remember('CHV2_u5RegisterN'.$county.$Year3,180,function() use($Year3){
      					return self::u5RegisterN($Year3);
      	});
	//annualtrends_14
		$annualtrends = Cache::remember('CHV2_annualtrends'.$county.$Year2,180,function() use($Year2){
      					return self::annualtrends($Year2);
      	});

		
	//annualtrends_15
	
		$annualtrendsN = Cache::remember('CHV2_annualtrendsN'.$county.$Year4,180,function() use($Year4){
      					return self::annualtrendsN($Year4);
      	});
    //ownership_16
		$ownership = Cache::remember('CHV2_ownership'.$county,180,function() {

			return self::ownership();
		});
	//types_17
		$types = Cache::remember('CHV2_types'.$county,180,function() {

			return self::types();
		});
	//staff_trained_18
		$staff_trained = Cache::remember('CHV2_staff_trained'.$county,180,function(){
			return self::staff_trained();
		});
	//comm_strategy_19
		$comm_strategy = Cache::remember('CHV2_comm_strategy'.$county,180,function(){
			return self::commstrategy();
		});

	//lort_20
		$lort = Cache::remember('CHV2_lort'.$county,180,function(){
			return self::ortloc();
		});
	//genopd_21
		$genopd = Cache::remember('CHV2_genopd'.$county,180,function(){
			return self::opdgen();
		});
	//skillbirth


	

	//Json Making

		$JsonArray = (array(
			'Guidelines' =>$Guidelines, 
			'Tools' =>$Tools,
			'DTreatmentCommodities' => $DTreatmentCommodities,
			'Antibiotics' => $Antibiotics,
			'Malaria'=>$Malaria,
			'ortf'=>$ortf,
			'supplies' => $supplies,
			'resources'=> $resources,
			'uRegister'=> $u5Register,
			'uRegisterN'=> $u5RegisterN,
			'annualtrends'=> $annualtrends,
			'annualtrendsN'=> $annualtrendsN,
			'ownership' => $ownership,
			'types' => $types,
			'staff_trained'=> $staff_trained,
			'DTreatmentAvailability'=>$DTreatmentAvailability,
			'AntibioticsAvailability'=>$AntibioticsAvailability,
			'MalariaAvaialability'=>$MalariaAvaialability,
			'comm_strategy'=>$comm_strategy,
			'lort'=>$lort,
			'genopd'=>$genopd
			));




		return $JsonArray;
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
			


		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		$jjavailability = Cache::remember('MNHV2_JaidsMNH'.$county,180,function() use($jheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$jheading,21,3,11,'COL01','COL02','/^have/');
      	});				

		// 	//S24
		// $S24H = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		// $S24 = Cache::remember('MNHV2_S24'.$county,180,function() use($S24H){
  //     					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$S24H,0,3,11,'COL01','COL02','/^/');
  //     	});				

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
array_splice($Cemonc,2, 1);




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
			'Reasoncs'=>$Reasoncs
			));




		return $JsonArray;
	}
	//public static function 

	}