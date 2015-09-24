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

		

	//Guidelines Availability
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No' );
			$Guidelines = Cache::remember('Guidelines'.$county,180,function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC2BLK1RW',$GuidelinesHeading,33,2,10,'COL01','COL02','/^ated/ ?');
      	});		
	//Tools Availability
		$ToolsHeading = array('Tools Availability', 'Yes', 'No' );
		$Tools = Cache::remember('Tools'.$county,180,function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC2BLK2RW',$ToolsHeading,0,2,10,'COL01','COL02','/^/');
      	});				
	//DTreatmentCommodities
		$DTreatmentCommoditiesExclude = array(11,12);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'NotAvailable' );
		
		$DTreatmentCommodities = Cache::remember('DTreatmentCommodities'.$county,180,function() use($DTreatmentCommoditiesExclude,$DTreatmentCommoditiesH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentCommoditiesH,0,9,17,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	});	
	//DTreatmentAvailability
		$DTreatmentAvailabilityExclude = array(11,12);
		$DTreatmentAvailabilityH = array('Diarhoea Treatment Availability', 'Ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		$DTreatmentAvailability = Cache::remember('DTreatmentAvailability'.$county,180,function() use($DTreatmentAvailabilityExclude,$DTreatmentAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentAvailabilityH,0,9,17,'COL01','COL04','/^/',$DTreatmentAvailabilityExclude);
	});			
		
	//Antibiotics


		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'NotAvailable' );
		
		$Antibiotics = Cache::remember('Antibiotics'.$county,180,function() use($AntibioticsH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
      	});	
    //AntibioticsAvailability


		$AntibioticsAvailabilityH = array('Antibiotics  Availability', 'Ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		$AntibioticsAvailability = Cache::remember('AntibioticsAvailability'.$county,180,function() use($AntibioticsAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsAvailabilityH,0,5,9,'COL01','COL04','/^/');
      	});				
	//Malaria
		$MalariaH = array('Malaria  Availability', 'Available', 'NotAvailable' );

		$Malaria = Cache::remember('Malaria'.$county,180,function() use($MalariaH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/');
      	});
     //MalariaAvaialability
		$MalariaAvaialabilityH = array('Malaria  Availability', 'Ordered', 'Ordered but not yet received','Expired','No information provided' );

		$MalariaAvaialability = Cache::remember('MalariaAvaialability'.$county,180,function() use($MalariaAvaialabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaAvaialabilityH,0,2,5,'COL01','COL04','/^/');
      	});
		
	//ortf
		$ortfExclude = array(5);
		$ortfH = array('Ort Functionality', 'Yes', 'No' );

		$ortf = Cache::remember('ortf'.$county,180,function() use($ortfExclude,$ortfH){
      					$temp = 	 self::twoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,4,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
      						
      					$temp[1][0] = 'Does the facility have an ORT corner?';
      					$temp[2][0] = 'Are there drugsavailable in the ORTCorner?';
      					$temp[3][0] = 'Is the ORT register upto date (Including zero-reporting)?';

      					return $temp;

      	});
		
	//supplies
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available' );

		$supplies = Cache::remember('supplies'.$county,180,function() use($suppliesH){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC6BLK2RW',$suppliesH,0,2,9,'COL01','COL02','/^/');
      	});
		
	//resources


		$resourcesH = array('Resource Availability', 'Available', 'Not Available' );

		$resources = Cache::remember('resources'.$county,180,function() use($resourcesH){
      					return 	self::twoOptionsFullStack( 'CHV2SEC7BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	
      	});
		
	//u5Register
		 
		$u5Register = Cache::remember('u5Register'.$county.$Year1,180,function() use($Year1){
      					return self::u5Register($Year1);
      	});

	//u5RegisterN
		
		$u5RegisterN = Cache::remember('u5RegisterN'.$county.$Year3,180,function() use($Year3){
      					return self::u5RegisterN($Year3);
      	});
	//annualtrends
		$annualtrends = Cache::remember('annualtrends'.$county.$Year2,180,function() use($Year2){
      					return self::annualtrends($Year2);
      	});

		
	//annualtrends
	
		$annualtrendsN = Cache::remember('annualtrendsN'.$county.$Year4,180,function() use($Year4){
      					return self::annualtrendsN($Year4);
      	});
    //ownership
		$ownership = Cache::remember('ownership'.$county,180,function() {

			return self::ownership();
		});
	//types
		$types = Cache::remember('types'.$county,180,function() {

			return self::types();
		});
	//staff_trained
		$staff_trained = Cache::remember('staff_trained'.$county,180,function(){
			return self::staff_trained();
		});
	//comm_strategy
		$comm_strategy = Cache::remember('comm_strategy'.$county,180,function(){
			return self::commstrategy();
		});

	//lort
		$lort = Cache::remember('lort'.$county,180,function(){
			return self::ortloc();
		});
	//genopd
		$genopd = Cache::remember('genopd'.$county,180,function(){
			return self::opdgen();
		});

	

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
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No' );
			$Guidelines = Cache::remember('GuidelinesMNH'.$county,180,function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV2SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});		
	//Tools Availability
		$ToolsHeading = array('Tools Availability', 'Yes', 'No' );
		$Tools = Cache::remember('ToolsMNH'.$county,180,function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK3RW',$ToolsHeading,0,3,13,'COL01','COL02','/^/');
      	});	
      	//DService
		$DSheading = array('Provsion of Delivery Services', 'Yes', 'No' );
		$DService = Cache::remember('DService'.$county,180,function() use($DSheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK3RW',$DSheading,0,3,4,'COL01','COL02','/^/');
      	});				
			


		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No' );
		$jjavailability = Cache::remember('JaidsMNH'.$county,180,function() use($jheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$jheading,0,3,11,'COL01','COL02','/^/');
      	});				

		// 	//S24
		// $S24H = array('Job Aids Availability', 'Yes', 'No' );
		// $S24 = Cache::remember('S24'.$county,180,function() use($S24H){
  //     					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$S24H,0,3,11,'COL01','COL02','/^/');
  //     	});				

		// Health Facilitty Management
$HManH = array('Health Facilitty Management', 'Yes', 'No' );
		$HMan = Cache::remember('HMan'.$county,180,function() use($HManH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK4RW',$HManH,0,3,9,'COL01','COL02','/^/');
      	});		

// Bemonc
$BemoncH = array('BEmONC SIGNAL FUNCTIONS', 'Yes', 'No' );
		$Bemonc = Cache::remember('Bemonc'.$county,180,function() use($BemoncH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncH,0,3,11,'COL01','COL02','/^/');
      	});		
      	//Cemonc

      	$CemoncExclude = array(4,10,11);

$CemoncH = array('CEmONC SIGNAL FUNCTIONS', 'Yes', 'No' );
		$Cemonc = Cache::remember('CemonC'.$county,180,function() use($CemoncH,$CemoncExclude){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK3RW',$CemoncH,0,3,9,'COL01','COL02','/^/',$CemoncExclude);
      	});		
array_splice($Cemonc,2, 1);

    //ownership
		$ownership = Cache::remember('ownershipMNH'.$county,180,function() {

			return self::ownership();
		});
	//types
		$types = Cache::remember('typesMNH'.$county,180,function() {

			return self::types();
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
			'jaids' => $jjavailability
			
			));




		return $JsonArray;
	}
	//public static function 

	}