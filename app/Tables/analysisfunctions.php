<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 use App\Http\Controllers\ArrayRedis as Cache;
 use Maatwebsite\Excel\Excel;
use Illuminate\Http\Request;
global $term;
class analysisfunctions extends Controller {

	

	
	
	 public function __construct() {
	 	


	 		// imciYN($Block,$rows=array(),$LabelCol,$Data1Col,$Data2Col,$trim,$extratrim)
	 	 $this->IMCIV1_outcome = function($county){ 
		return $IMCIV1_outcome = Cache::remember('IMCIV1_aoutcome'.$county,180,function(){


					return self::practicing();

      	});
	};

	 		 $this->IMCIV1_sec3 = function($county){ 
		return $IMCIV1_sec3 = Cache::remember('IMCIV1_asec3'.$county,180,function(){

						$temp = array(
							array('Section 3','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC5BLK1RW',array(3,4,5,6,7),'COL01','COL02','COL04','Malnutrition'),
							self::imciYN('IMCIV1SEC5BLK2RW',array(3),'COL01','COL02','COL04','Anemic'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(3),'COL01','COL02','COL04','HIV'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(5),'COL01','COL02','COL04','Immunization'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(6),'COL01','COL02','COL04','Vitamin A'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(9),'COL01','COL02','COL04','Deworming'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(10),'COL01','COL02','COL04','Child\'s Feeding'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(11),'COL01','COL02','COL04','Care for development'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(13),'COL01','COL02','COL04','Mother\'s condition'),  						 
							);
      						return $temp;

      	});
	};

			 $this->IMCIV1_Observation = function($county){ 
		return $IMCIV1_Observation = Cache::remember('IMCIV1_Observation'.$county,180,function(){

						$temp = array(
							array('Observation of Case Management','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC2BLK2RW',array(2,3,4,5,6,7),'COL01','COL02','COL02','Triage'),
							self::imciYN('IMCIV1SEC2BLK3RW',array(2,3,4,5,6),'COL01','COL02','COL02','Danger Signs'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(2,3,4,5,6),'COL01','COL02','COL04','Cough & difficulty breathing'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(2,3,4,5,6,7),'COL01','COL02','COL04','Diarrhoea'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(3,4,5,6,7,8),'COL01','COL02','COL04','Fever'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(2,3,4,5,6,7),'COL01','COL02','COL04','Ear Infection') 						 
							);
      						return $temp;

      	});
	};



	 $this->IMCIV1_Classification = function($county){ 
		return $IMCIV1_Classification = Cache::remember('IMCIV1_Classification'.$county,180,function(){

						$temp = array(
							array('Classification','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(7),'COL01','COL02','COL04','Classification for cough'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(8),'COL01','COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(8),'COL01','COL02','COL04','Correct Assessment & Classify Diarrhoea'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(9),'COL01','COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(9),'COL01','COL02','COL04','Classification for Fever'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(10),'COL01','COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(7),'COL01','COL02','COL04','Classification for Ear Infection'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(8),'COL01','COL04','COL04','Correct Classification')						 
							);
      						return $temp;

      	});
	};

		 $this->IMCIV1_ObservationB = function($county){ 
		return $IMCIV1_ObservationB = Cache::remember('IMCIV1_ObservationB'.$county,180,function(){

						$temp = array(
							array('Observation of Case Management','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22),'COL01','COL02','COL04','Very Servere Disease'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(2,3),'COL01','COL02','COL04','Jaundice'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(2,3,4,5,6,7,8,9,10,11,12),'COL01','COL02','COL04','Eye Infection'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(2,3,4,5,6,7),'COL01','COL02','COL04','Diarrhoea'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(2,4,6,8),'COL01','COL02','COL04','Breast Feeding Problem'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(3,5,7,9),'COL01','COL02','COL04','Breast Feeding') 						 
							);
      						return $temp;

      	});
	};

		 $this->IMCIV1_ClassificationB = function($county){ 
		return $IMCIV1_ClassificationB = Cache::remember('IMCIV1_ClassificationB'.$county,180,function(){

						$temp = array(
							array('Classification','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(23),'COL01','COL02','COL04','Correctly Assessed and Classified VSD'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(24),'COL01','COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(4),'COL01','COL02','COL04','Jaundice Classification Done'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(5),'COL01','COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(13),'COL01','COL02','COL04','Eye Infection Correctly Assessed'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(14),'COL01','COL04','COL04','Eye Infection Classification Done'),
							self::imciYN('IMCIV1SEC4BLK8RW',array(8),'COL01','COL02','COL04','Diarrhoea Correctly Assessed $ Classified'),
							self::imciYN('IMCIV1SEC4BLK8RW',array(9),'COL01','COL04','COL04','Diarrhoea Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(11),'COL01','COL02','COL04','Breast Feeding Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(12),'COL01','COL04','COL04','Feeding Correctly Assessed $ Classified'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(4),'COL01','COL04','COL04','Feeding Correct Classification')
							);
      						return $temp;

      	});
	};

	 $this->IMCIV1_WeightTaken = function($county){ 
		return $IMCIV1_WeightTaken = Cache::remember('IMCIV1_WeightTaken'.$county,180,function(){

						$temp = array(
							array('Weight','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(2),'COL01','COL02','COL04','Weight Taken'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(3),'COL01','COL02','COL04','Correct Assessment and Classification'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(4),'COL01','COL04','COL04','Correct Classification')												 
							);
      						return $temp;

      	});
	};

	 $this->IMCIV1_SpecialNeeds = function($county){ 
		return $IMCIV1_SpecialNeeds = Cache::remember('IMCIV1_SpecialNeeds'.$county,180,function(){
				$values = self::imciYN('IMCIV1SEC4BLK12RW',array(2,3,4,5,6),'COL01','COL02','COL04','Special Needs');
						$temp = array(
								array('Yes',$values[1]),
								array('No',$values[2]),
								array('No Information Provided',$values[3])											 
							);
      						return $temp;

      	});
	};


		$this->IMCIV1_WORKLOC = function($county){ 
	 	//Tools Availability_2

	 			$WORKLOCEX = array(4);

		$WORKLOCHeading = array('Current Working Location', 'Yes', 'No','No information provided' );
		return $IMCIV1_WORKLOC = Cache::remember('IMCIV1_WORKLO'.$county,180,function() use($WORKLOCHeading,$WORKLOCEX){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC1BLK5RW',$WORKLOCHeading,0,3,6,'COL01','COL02','/^Was/',$WORKLOCEX);
      						


      						return $temp;

      	});
	};



	 		$this->IMCIV1_CONSOBSV = function($county){ 
	 	//Tools Availability_2

	 			$CONSOBSVEX = array(3,6,7,8);

		$CONSOBSVHeading = array('Consultation Observation', 'Yes', 'No','No information provided' );
		return $IMCIV1_CONSOBSV = Cache::remember('IMCIV1_CVONSOBSV'.$county,180,function() use($CONSOBSVHeading,$CONSOBSVEX){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC6BLK1RW',$CONSOBSVHeading,0,1,10,'COL01','COL02','/^Did the provider /',$CONSOBSVEX);
      						
      						$temp[1][0]='Use IMCI Chart Booklet';
      						$temp[2][0]='Used u5 Register';
      						$temp[3][0]='Instructed on How to Give Meds';
      						$temp[4][0]='First Dose Given at Hospital';
      						$temp[5][0]='When to Return';

      						return $temp;

      	});
	};
	//

	$this->IMCIV1_EXTINT = function($county){ 
	 	//Tools Availability_2

	 			$EXTINTEX = array(2,4);

		$EXTINTHeading = array('Exit Interview', 'Yes', 'No','No information provided' );
		return $IMCIV1_EXTINT = Cache::remember('IMCIV1_EXTINT'.$county,180,function() use($EXTINTHeading,$EXTINTEX){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC6BLK2RW',$EXTINTHeading,0,1,6,'COL01','COL02','/^Did the provider /',$EXTINTEX);
      						
      						$temp[1][0]='Caregiver Satisfaction';
      						$temp[2][0]='Correct Medicine Instructions';
      						$temp[3][0]='When to Return';
      						

      						return $temp;

      	});
	};


	$this->IMCIV1_EXTINTB = function($county){ 
	 	//Tools Availability_2



		$EXTINTBHeading = array('Exit Interview', 'Self','Spouse','Relative','Friend','Community Health Worker','Media','Other','No information provided' );
		return $IMCIV1_EXTINTB = Cache::remember('IMCIV1_vEXTINTB'.$county,180,function() use($EXTINTBHeading){
      					$temp =	  self::SevenOptionsFullStack( 'IMCIV1SEC6BLK2RW',$EXTINTBHeading,0,2,3,'COL01','COL02','/^/');
      						
      						
      						return $temp;

      	});
	};


		$this->IMCIV1_CERTIFICATIONCRITERIA = function($county){ 
	 	//Tools Availability_2

		$CERTIFICATIONCRITERIAHeading = array('Criteria For Certification : Section A', 'Yes', 'No','No information provided' );
		return $IMCIV1_CERTIFICATIONCRITERIA = Cache::remember('IMCIV1_CERTIFICATIONCRITERIA'.$county,180,function() use($CERTIFICATIONCRITERIAHeading){
      					$temp =  self::twoOptionsFullStack( 'IMCIV1SEC6BLK4RW',$CERTIFICATIONCRITERIAHeading,0,1,6,'COL01','COL02','/^/');
      					$temp2 = array(self::imciYN('IMCIV1SEC6BLK4RW',array(1,2,3,4,5),'COL01','COL02','COL02','Meet All Criteria'));
      					array_splice( $temp, 1, 0, $temp2 );	
      					return $temp;
      	});
      	};

	$this->IMCIV1_CERTIFICATION = function($county){ 
	 	//Tools Availability_2

		$CertificationHeading = array('Certification', 'Yes', 'No','No information provided' );
		return $IMCIV1_CERTIFICATION = Cache::remember('IMCIV1_CERTIFICATION'.$county,180,function() use($CertificationHeading){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC6BLK7RW',$CertificationHeading,0,1,4,'COL01','COL02','/^/');
      						


      						return $temp;

      	});
	};




	 		$this->CHV2_Tools = function($county){ global $term;
	 	//Tools Availability_2

		$ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $CHV2_Tools = Cache::remember('CHV2_Tools'.$county.$term,180,function() use($ToolsHeading){
      					$temp =	  self::twoOptionsFullStack( 'CHV2SEC2BLK2RW',$ToolsHeading,0,2,10,'COL01','COL02','/^/');
      						$temp[2][0] = 'EID Register';
      						$temp[2][0] = 'Under 5 Register';
      						return $temp;

      	});
	};
	 	
	 	$this->CHV2_Guidelines = function($county){ global $term;

	 		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $CHV2_Guidelines = Cache::remember('CHV2_Guidelines'.$county.$term,180,function() use($GuidelinesHeading){
      					$temp =	 self::twoOptionsFullStack( 'CHV2SEC2BLK1RW',$GuidelinesHeading,33,2,10,'COL01','COL02','/^ated/ ?');
      				$temp[8][0] = 'EID Algorithim 2009/2012/2014';
      				return $temp;
      	});		

	 	};

	 

		$this->CHV2_DTreatmentCommodities= function($county){ global $term;
		//DTreatmentCommodities_3
		$DTreatmentCommoditiesExclude = array(11,12);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV2_DTreatmentCommodities = Cache::remember('CHV2_DTreatmentCommodities'.$county.$term,180,function() use($DTreatmentCommoditiesExclude,$DTreatmentCommoditiesH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentCommoditiesH,0,9,17,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	});	
	};

	$this->CHV2_DTreatmentAvailability= function($county){ global $term;
	//DTreatmentAvailability_4
		$DTreatmentAvailabilityExclude = array(11,12);
		$DTreatmentAvailabilityH = array('Diarhoea Treatment Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		return $CHV2_DTreatmentAvailability = Cache::remember('CHV2_DTreatmentAvailability'.$county.$term,180,function() use($DTreatmentAvailabilityExclude,$DTreatmentAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentAvailabilityH,0,9,17,'COL01','COL04','/^/',$DTreatmentAvailabilityExclude);
	});		
	};	
		
	//Antibiotics_5

	$this->CHV2_Antibiotics= function($county){ global $term;
		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV2_Antibiotics = Cache::remember('CHV2_Antibiotics'.$county.$term,180,function() use($AntibioticsH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
      	});	
	};
    //AntibioticsAvailability_6

	$this->CHV2_AntibioticsAvailability= function($county){ global $term;
		$AntibioticsAvailabilityH = array('Antibiotics  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		return $CHV2_AntibioticsAvailability = Cache::remember('CHV2_AntibioticsAvailability'.$county.$term,180,function() use($AntibioticsAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsAvailabilityH,0,5,9,'COL01','COL04','/^/');
      	});	

      	};	

      	$this->CHV2_Malaria= function($county){ global $term;
	//Malaria_7
		$MalariaH = array('Malaria  Availability', 'Available', 'Not Available','No information provided' );

		return $CHV2_Malaria = Cache::remember('CHV2_Malaria'.$county.$term,180,function() use($MalariaH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/');
      	});
	};

		$this->CHV2_MalariaAvaialability= function($county){ global $term;
     //MalariaAvaialability_8
		$MalariaAvaialabilityH = array('Malaria  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );

		return $CHV2_MalariaAvaialability = Cache::remember('CHV2_MalariaAvaialability'.$county.$term,180,function() use($MalariaAvaialabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaAvaialabilityH,0,2,5,'COL01','COL04','/^/');
      	});
	};
		
	//ortf_9

	$this->CHV2_ortf= function($county){ global $term;
		$ortfExclude = array(4,5);
		$ortfH = array('Ort Functionality', 'Yes', 'No','No information provided' );

		return $CHV2_ortf = Cache::remember('CHV2_ortf'.$county.$term,180,function() use($ortfExclude,$ortfH){
      					$temp = 	 self::twoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,3,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
      						
      					$temp[1][0] = 'Does the facility have an ORT corner?';
      					$temp[2][0] = 'Are there drugsavailable in the ORTCorner?';
      					$temp[3][0] = 'Is the ORT register upto date (Including zero-reporting)?';
      					$temp[]=self::ortfunction();
      					$temp[4][0] = 'ORT Corner Functionality';

      					return $temp;

      	});
	};
		
		$this->CHV2_supplies= function($county){ global $term;
	//supplies_10
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available','No information provided' );


		return $CHV2_supplies = Cache::remember('CHV2_supplies'.$county.$term,180,function() use($suppliesH){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC6BLK2RW',$suppliesH,0,2,9,'COL01','COL02','/^/');
      	});
	};
		
	//resources_11

		$this->CHV2_resources= function($county){ global $term;
		$resourcesH = array('Resource Availability', 'Available', 'Not Available','No information provided' );


		return $CHV2_resources = Cache::remember('CHV2_resources'.$county.$term,180,function() use($resourcesH){
      					return 	self::twoOptionsFullStack( 'CHV2SEC7BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	
      	});
	};

		$this->CHV2_ownership= function($county){ global $term;
	  //ownership_16
		return $CHV2_ownership = Cache::remember('CHV2_ownership'.$county.$term,180,function() {

			return self::ownership();
		});

	};
		$this->CHV2_types= function($county){ global $term;
	//types_17
		return $CHV2_types = Cache::remember('CHV2_types'.$county.$term,180,function() {

			return self::types();
		});
	};

	$this->CHV2_staff_trained= function($county){ global $term;
	//staff_trained_18
		return $CHV2_staff_trained = Cache::remember('CHV2_staff_trained'.$county.$term,180,function(){
			return self::staff_trained();
		});
	};
	$this->CHV2_comm_strategy= function($county){ global $term;
	//comm_strategy_19
		return $CHV2_comm_strategy = Cache::remember('CHV2_comm_strategybn'.$county.$term,180,function(){
			return self::commstrategy();
		});
	};

	//lort_20
	$this->CHV2_lort= function($county){ global $term;
		return $CHV2_lort = Cache::remember('CHV2_lort'.$county.$term,180,function(){
			return self::ortloc();
		});
	};
	//genopd_21
	$this->CHV2_genopd= function($county){ global $term;
		return $CHV2_genopd = Cache::remember('CHV2_genopd'.$county.$term,180,function(){
			return self::opdgen();
		});
	};

	//u5Register_12Year1
		$this->CHV2_u5Register= function($county,$Year){ global $term;
		return $CHV2_u5Register = Cache::remember('CHV2_u5Register'.$county.$Year.$term,180,function() use($Year){
      					return self::u5Register($Year);
      	});
	};

	//u5RegisterN_13Year3
		$this->CHV2_u5RegisterN= function($county,$Year){ global $term;
		return $CHV2_u5RegisterN = Cache::remember('CHV2_u5RegisterN'.$county.$Year.$term,180,function() use($Year){
      					return self::u5RegisterN($Year);
      	});
	};
	//annualtrends_14Year2
	$this->CHV2_annualtrends= function($county,$Year){ global $term;
		return $CHV2_annualtrends = Cache::remember('CHV2_annualtrends'.$county.$Year.$term,180,function() use($Year){
      					return self::annualtrends($Year);
      	});
	};
		
	//annualtrends_15Year4
	$this->CHV2_annualtrendsN= function($county,$Year){ global $term;
		return $CHV2_annualtrendsN = Cache::remember('CHV2_annualtrendsN'.$county.$Year.$term,180,function() use($Year){
      					return self::annualtrendsN($Year);
      	});
	};

	$this->MNHV2_Guidelines = function($county){ global $term;
		//Guidelines Availability
		 $GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $Guidelines = Cache::remember('MNHV2_GuidelinesMNH'.$county.$term,180,function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV2SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});	

      	};

      	$this->MNHV2_Tools = function($county){ global $term;
	//Tools Availability
		 $ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $Tools = Cache::remember('MNHV2_ToolsMNH'.$county.$term,180,function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK3RW',$ToolsHeading,0,3,13,'COL01','COL02','/^/');
      	});	

	};

	 	$this->MNHV2_DService = function($county){ global $term;
      	//DService
		$DSheading = array('Provsion of Delivery Services', 'Yes', 'No','No information provided' );
		return $DService = Cache::remember('MNHV2_DService'.$county.$term,180,function() use($DSheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK1RW',$DSheading,0,2,3,'COL01','COL02','/^/');
      	});				
			};


			$this->MNHV2_EquipAvail = function($county){ global $term;
		//EquipAvail
		$EquipAvailheading = array('Equipment Availability', 'Available', 'Not Available','No information provided' );
		return $EquipAvail = Cache::remember('MNHV2_EquipAvail'.$county.$term,180,function() use($EquipAvailheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC6BLK1RW',$EquipAvailheading,0,3,20,'COL01','COL02','/^/');
      	});	
      	};	




      	$this->MNHV2_jjavailability = function($county){ global $term;
		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		return $jjavailability = Cache::remember('MNHV2_JaidsMNH'.$county.$term,180,function() use($jheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$jheading,21,3,11,'COL01','COL02','/^have/');
      	});			
      	};	

		
		$this->MNHV2_HMan = function($county){ global $term;
		// Health Facilitty Management
		$HManH = array('Health Facilitty Management', 'Yes', 'No','No information provided' );
		return $HMan = Cache::remember('MNHV2_HMan'.$county.$term,180,function() use($HManH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK4RW',$HManH,28,3,9,'COL01','COL02','/^a/');
      	});		
      	};

		$this->MNHV2_Bemonc = function($county){ global $term;	
		// 	Bemonc
		$BemoncH = array('BEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Bemonc = Cache::remember('MNHV2_Bemonc'.$county.$term,180,function() use($BemoncH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncH,0,3,11,'COL01','COL02','/^/');
      	});		
      	};

		$this->MNHV2_BemoncChallenge = function($county){ global $term;
 		// BemoncChallenge

		$BemoncChallengeH = array('BEmONC Signal Functions Challenges', 'Inadequate Drugs', 'Inadequate Skills','Inadequate Supplies','No Job Aids','Inadequate Equipment','Case Never Present','No Challenged Experienced','No information provided' );
		return $BemoncChallenge = Cache::remember('MNHV2_BemoncChallenge'.$county.$term,180,function() use($BemoncChallengeH){
      					return 	  self::SevenOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncChallengeH,0,3,11,'COL01','COL03','/^/');
      	});		
		};

		$this->MNHV2_Cemonc = function($county){ global $term;
      	//Cemonc

      	$CemoncExclude = array(4,10,11);

		$CemoncH = array('CEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Cemonc = Cache::remember('MNHV2_CemonC'.$county.$term,180,function() use($CemoncH,$CemoncExclude){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK3RW',$CemoncH,0,3,9,'COL01','COL02','/^(1)(2)(3)(4)Does this facility/',$CemoncExclude);
      	});		

		};
      	

		$this->MNHV2_HIVTest = function($county){ global $term;
			//HIVTest
		$HIVTestheadings = array('Provision og HIV & Testing', 'Yes', 'No','No information provided' );
		return $HIVTest = Cache::remember('MNHV2_HIVTest'.$county.$term,180,function() use($HIVTestheadings){
      					$temp =  self::twoOptionsFullStack( 'MNHV2SEC2BLK4RW',$HIVTestheadings,4,3,12,'COL01','COL02','/^/');
      					$temp[2][0] = 'A'.$temp[2][0];
      					return $temp;
      	});		
      	};



		$this->MNHV2_ownership = function($county){ global $term;
    //ownership
		return $ownership = Cache::remember('MNHV2_ownershipMNH'.$county.$term,180,function() {

			return self::ownership();
		});
		};

		$this->MNHV2_types = function($county){ global $term;
	//types
		return $types = Cache::remember('MNHV2_typesMNH'.$county.$term,180,function() {

			return self::types();
		});
		};

		$this->MNHV2_dserviceconduct = function($county){ global $term;
	//dserviceconduct
		return $dserviceconduct = Cache::remember('MNHV2_dserviceconduct'.$county.$term,180,function() {

			return self::dserviceconduct();
		});
		};
	
		$this->MNHV2_NewBornCare = function($county){ global $term;
	//NewBornCare
		$NewBornCareHeadings = array('New Born Care','Yes','No','No information provided');
		return $NewBornCare = Cache::remember('MNHV2_NewBornCare'.$county.$term,180,function() use ($NewBornCareHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK5RW03COL02',$NewBornCareHeadings);
		});
		};

		$this->MNHV2_Kangaroo1 = function($county){ global $term;
//Kangaroo1
		$Kangaroo1Headings = array('Kangaroo Awarness','Yes','No','No information provided');
		return $Kangaroo1 = Cache::remember('MNHV2_Kangaroo1'.$county.$term,180,function() use ($Kangaroo1Headings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK6RW03COL02',$Kangaroo1Headings);
		});
		};

		$this->MNHV2_Kangaroo2 = function($county){ global $term;
		//Kangaroo1
		$Kangaroo2Headings = array('Kangaroo Corner','Yes','No','No information provided');
		return $Kangaroo2 = Cache::remember('MNHV2_Kangaroo2'.$county.$term,180,function() use ($Kangaroo2Headings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK6RW04COL02',$Kangaroo2Headings);
		});
		};

		$this->MNHV2_devpep = function($county){ global $term;
		//devpep
		$devpepHeadings = array('Preparedness for Delivery','Yes','No','No information provided');
		return $devpep = Cache::remember('MNHV2_devpep'.$county.$term,180,function() use ($devpepHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK7RW04COL02',$devpepHeadings);
		});
		};

		$this->MNHV2_skillbirth = function($county){ global $term;
		//skillbirth
		return $skillbirth = Cache::remember('MNHV2_skillbirth'.$county.$term,180,function(){
			return self::skillbirth();
		});
		};
		$this->MNHV2_bedcapacity = function($county){ global $term;
		//bedcapacity
		return $bedcapacity = Cache::remember('MNHV2_bedcapacity'.$county.$term,180,function(){

			return self::bedcapacity();
		});
		};

		$this->MNHV2_hours24 = function($county){ global $term;
		//hours24
		$hours24headings = array('24 hour service delivery', 'Yes', 'No','No information provided' );
		return $hours24 = Cache::remember('MNHV2_hours24'.$county.$term,180,function()use($hours24headings){

			return self::FacilityTypes2Stack('MNHV2SEC1BLK3RW03COL02',$hours24headings);
		});
		};

		$this->MNHV2_testing = function($county){ global $term;
		//testing
		$testingheadings = array('Testing Supplies', 'Available', 'Not Available','No information provided' );
		return $testing = Cache::remember('MNHV2_testing'.$county.$term,180,function()use($testingheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK2RW02COL02',$testingheadings);
		});
		};

		$this->MNHV2_devkit = function($county){ global $term;
		//devkit
		$devkitheadings = array('Delivery kit components', 'Available', 'Not Available','No information provided' );
		return $devkit = Cache::remember('MNHV2_devkit'.$county.$term,180,function()use($devkitheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK3RW03COL02',$devkitheadings);
		});
};
		$this->MNHV2_staff_trained = function($county){ global $term;
		//staff_trained_18
		return $staff_trained = Cache::remember('MNHV2_staff_trained'.$county.$term,180,function(){
			return self::staff_trained_MNH();
		});

};
		$this->MNHV2_MainBlood = function($county){ global $term;
		//MainBlood
		$MainBloodSLices = array('Blood Bank Available ','Transfusion Done But No Blood Bank','Other','No information provided');
		return $MainBlood  = Cache::remember('MNHV2_MainBlood'.$county.$term,180,function() use ($MainBloodSLices){
			return self::MNHPies($MainBloodSLices,'MNHV2SEC2BLK3RW04COL02');
		});
};
		$this->MNHV2_ReasonBlood = function($county){ global $term;
		//ReasonBlood
		$ReasonBloodSLices = array('Blood Bank Not Available ','Supplies and equipment not available','Other','No information provided');
		return $ReasonBlood  = Cache::remember('MNHV2_ReasonBlood'.$county.$term,180,function() use ($ReasonBloodSLices){
			return self::MNHPies($ReasonBloodSLices,'MNHV2SEC2BLK3RW05COL02');
		});

		};

	

		$this->MNHV2_Reasoncs = function($county){ global $term;
		//Reasoncs
		$ReasoncsSLices = array('Supplies and equipment not available','Theatre Space Not Available','Human Resource','Other','No information provided');
		return $Reasoncs  = Cache::remember('MNHV2_Reasoncs'.$county.$term,180,function() use ($ReasoncsSLices){
			return self::MNHPies($ReasoncsSLices,'MNHV2SEC2BLK3RW09COL02');
		});

	};


		//EXCEL RAWS
	// $this->CHV2_Tools = function(Excel $excel){ 

		

	// 	};













	 	

      
    }

	


	protected static function ortfunction(){
		global $surveys;

			$recset = $surveys;
$countB = count($recset);
      	 $Data = $recset->load(['x' => function($query)
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC5BLK1RW03COL02')
    	  ->where('Data','=','1')
    	  ->orwhere('ColumnSetID', '=', 'CHV2SEC5BLK1RW06COL02')
    	   ->where('Data','=','1')
    	  ->orwhere('ColumnSetID', '=', 'CHV2SEC5BLK1RW07COL02')
    	   ->where('Data','=','1');
}])->lists('x');
      	 $countF = 0;
      foreach ($Data as $data) {

      	if(count($data) == 3){

      		$countF++;
      	}

      
      }
     

 return array('Functionality',$countF,$countB-$countF,0);
	}

	protected  static function count_YN($cl){
 global $surveys;
 

 $recset = $surveys;
// echo $recset;
		$Data = $recset->load(['y' => function($query) use ($cl)
{
	
    $query->where('ColumnSetID', '=', $cl);
}])->lists('y');

		$Data = collect($Data)->lists('Data');


$Data = array_filter($Data);
$big0 = array_count_values($Data);



return $big0;


	}

	protected static function array_sum_identical_keys() {
    $arrays = func_get_args();
    $keys = array_keys(array_reduce($arrays, function ($keys, $arr) { return $keys + $arr; }, array()));
    $sums = array();

    foreach ($keys as $key) {
        $sums[$key] = array_reduce($arrays, function ($sum, $arr) use ($key) { return $sum + @$arr[$key]; });
    }
    return $sums;
}
	


	protected static function count_YNrowsIMCI($Block,$rows,$cl){

		global $surveys;
		

 	foreach ($rows as $i ) {

 			$array []= $Block.sprintf('%02d',$i).$cl;

 		}



 $recset = $surveys;
 //print_r( $array[0]);
 	
 		$query = '$Data = $recset->load(["x" => function($query) 
{
	
    $query->where("ColumnSetID", "=","'.$array[0].'" )
    	  ';

    	  array_shift($array);

    	  foreach ($array as $a) {
    	  $query.='->orwhere("ColumnSetID", "=","'.$a.'" )
    	  		   ';
    	  }


 		

 		$query .= ';}])->lists("x");';

		 eval($query);


		 foreach ($Data as $d ) {
		 if($d->sum('Data')==count($d)) $finalarray [] = 1;
		 else $finalarray [] = 2;
		 }

 	return $finalarray;

}
	
	protected  static function count_IMCIYN($Block,$cl1,$cl2,$rows){
global $surveys;
 			
 			

 $recset = $surveys;


 		$count=count($surveys);
// echo $recset;
		$Data1 = self::count_YNrowsIMCI($Block,$rows,$cl1);

		$Data2 = self::count_YNrowsIMCI($Block,$rows,$cl2);

	$DataC = self::array_sum_identical_keys($Data1,$Data2);


	// return array('Data1'=>$Data1,'Data2'=>$Data2,'DataC'=>$DataC);


	$Data = array_filter($DataC);
	$ArrayVals = array_count_values($Data);

	if(!isset($ArrayVals[2])) $ArrayVals[2]=0;
	if(!isset($ArrayVals[3])) $ArrayVals[3]=0;
	if(!isset($ArrayVals[4])) $ArrayVals[4]=0;

	$Yes = $ArrayVals[2];
	$No = $ArrayVals[3] + $ArrayVals[4];
	$Noinfo = $count - $Yes - $No;

	return  array(1=>$Yes,2=>$No,-51=>$Noinfo);





	}


protected static function getLabel($trim,$col){

// trim($binary, "\x00..\x1F");
	$Label = substr( Column_set::where('column_setID','=',$col)->with('field_set.field')->get()[0]->field_set->field->Label,$trim);
	
	return $Label;


}
	protected static function twoOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
	{

			$array [] = $headings;

		for ($i=$b; $i < $t; $i++) { 
			if(!(in_array($i,$exclude))){
			$o = self::count_YN($Block.sprintf('%02d',$i).$DataCol);
			if(!(isset($o[1]))) $o[1]=0;
			if(!(isset($o[2]))) $o[2]=0;
			if(!(isset($o[-51]))) $o[-51]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o[1],
			 	$o[2],
			 	$o[-51]);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}

	protected static function imciYN($Block,$rows=array(),$LabelCol,$Data1Col,$Data2Col,$label)
	{

			

		
		
			$o = self::count_IMCIYN($Block,$Data1Col,$Data2Col,$rows);

			if(!(isset($o[1]))) $o[1]=0;
			if(!(isset($o[2]))) $o[2]=0;
			if(!(isset($o[-51]))) $o[-51]=0;
			
			$array = array (
			 	 $label, 
			 	$o[1],
			 	$o[2],
			 	$o[-51]);
		
		
		
		return $array;

	}

	protected static function fourOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
	{

			$array [] = $headings;

		for ($i=$b; $i < $t; $i++) { 
			if(!(in_array($i,$exclude))){
			$o = self::count_YN($Block.sprintf('%02d',$i).$DataCol);
			if(!(isset($o[1]))) $o[1]=0;
			if(!(isset($o[2]))) $o[2]=0;
			if(!(isset($o[3]))) $o[3]=0;
			if(!(isset($o[-51]))) $o[-51]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o[1],
			 	$o[2],
			 	$o[3],
			 	$o[-51]
			 	);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}

	protected static function SevenOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
	{

			$array [] = $headings;

		for ($i=$b; $i < $t; $i++) { 
			if(!(in_array($i,$exclude))){
			$o = self::count_YN($Block.sprintf('%02d',$i).$DataCol);
			if(!(isset($o[1]))) $o[1]=0;
			if(!(isset($o[2]))) $o[2]=0;
			if(!(isset($o[3]))) $o[3]=0;
			if(!(isset($o[4]))) $o[4]=0;
			if(!(isset($o[5]))) $o[5]=0;
			if(!(isset($o[6]))) $o[6]=0;
			if(!(isset($o[7]))) $o[7]=0;
			if(!(isset($o[-51]))) $o[-51]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o[1],
			 	$o[2],
			 	$o[3],
			 	$o[4],
			 	$o[5],
			 	$o[6],
			 	$o[7],
			 	$o[-51]
			 	);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}
	

	
	protected static function u5Register($Year1){
		//$Year1 = 3;
		global $surveys;

		



    $Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name'));
    $array [] = array('Diarrhoea Cases',$Years[$Year1],$Years[$Year1-1],$Years[$Year1-2]);
		for ($i=2; $i < 9; $i++) {

			$index =  sprintf('%02d',$i);
			//echo ("world","Peter","Hello world!");

			$Label1 =  str_replace('Treatment with ','',(self::getLabel(0,'CHV2SEC3BLK99DRW'.$index.'COL01')));
			$Label = $Label1;
			if ( strstr($Label1, '(Example', true)) $Label = strstr($Label1, '(Example', true);

			$Row = self::u5RegisterRow('RW'.$index,$Year1);
				
			$array [] = array (
			  $Label, 
			 	$Row[$Year1],
			 	$Row[$Year1-1],
			 	$Row[$Year1-2]);
		

		}


		$array[4][0] = 'Zinc';
		//echo collect($array);
		return $array;


	}

	protected static function u5RegisterRow($Row,$Year1){
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'));
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterVal($Years[$i].$Row);
		//	echo $Years[$i].' '.$i.'<br>';

		}

		return($array);
	}
	protected static function u5RegisterVal($cl){
		global $surveys;

		//print_r ($Years);
		$recset = $surveys;

		$Data = $recset->load(['x' => function($query) use ($cl)
{		
	 
    $query->where('ColumnSetID', 'Like',$cl.'COL%' );
}]);
		
		//echo $Data;
		$total = 0;




		foreach ($Data as $obj ) {

		
	$tt= ( $obj->x->sum('Data'));
	//echo $tt.'	';
	$total += $tt;
	$thearrray [] = $tt;


}

		


	//echo '<br>'.$total.'<br>';
	return $total;
		
	}
	


	

	protected static function annualtrends($Year2){

		$Block = array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'))[$Year2];

		//print_r ($Years[3]);
		$Array [] = array('Treatment Trends','ORS+ Zinc','ORS','Zinc','Antibiotics','Others','No Treatment')
	;for ($i=2; $i <14 ; $i++) { 
		$index = sprintf('%02d',$i);
		$Data= self::annualtrendsM($Block,'COL'.$index);
		$Array [] = array(
			(self::getLabel(0,'CHV2SEC3BLK96DRW01COL'.$index)),
			$Data[0],
			$Data[1],
			$Data[2],
			$Data[3],
			$Data[4],
			$Data[5]
			);
		
		
	}
		
	return($Array);


	}

	protected static function annualtrendsM($Block,$Col){

			global $surveys;

				$recset = $surveys;
				
				for ($i=3; $i <9 ; $i++) { 
					$index = sprintf('%02d',$i);
		  $mcol = $Block.'RW'.$index.$Col;



					$Data = $recset->load(['y' => function($query) use ($mcol)
		{		
			 
		    $query->where('ColumnSetID', '=',$mcol);
		}])->lists('y');

				$Data = collect($Data);
				$Month [] = ($Data->sum('Data'));
					
				}
				return ($Month);



	}


		protected static function u5RegisterN($Year1){
		//$Year1 = 3;

    $Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name'));
    $array [] = array('Non Diarrhoea Cases',$Years[$Year1],$Years[$Year1-1],$Years[$Year1-2]);
		for ($i=10; $i < 13; $i++) {

			//$index =  sprintf('%02d',$i);
			$Label1 =  (self::getLabel(0,'CHV2SEC3BLK99DRW'.$i.'COL01'));
			$Label = $Label1;
			if ( strstr($Label1, '(Example', true)) $Label = strstr($Label1, '(Example', true);

			$Row = self::u5RegisterNRow('RW'.$i,$Year1);
				
			$array [] = array (
			  $Label, 
			 	$Row[$Year1],
			 	$Row[$Year1-1],
			 	$Row[$Year1-2]);
		

		}

		return $array;


	}

	protected static function u5RegisterNRow($Row,$Year1){
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'));
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterNVal($Years[$i].$Row);
		//	echo $Years[$i].' '.$i.'<br>';

		}

		return($array);
	}
	protected static function u5RegisterNVal($cl){
		global $surveys;

		//print_r ($Years);
		$recset = $surveys;
		$Data = $recset->load(['x' => function($query) use ($cl)
{		
	 
    $query->where('ColumnSetID', 'Like',$cl.'COL%' );
}]);
		
		$total = 0;
		foreach ($Data as $obj ) {

		
	$total += ( $obj->x->sum('Data'));
	

}

	return $total;
		
	}



	protected static function annualtrendsN($Year2){

		$Block = array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'))[$Year2];

		//print_r ($Years[3]);
		$Array [] = array('Annual ORT Treatment Trends','Total Number of Documented Cases')
	;for ($i=2; $i <14 ; $i++) { 
		$index = sprintf('%02d',$i);
		$Data= self::annualtrendsNM($Block,'COL'.$index);
		$Array [] = array(
			(self::getLabel(0,'CHV2SEC3BLK96DRW01COL'.$index)),
			$Data
			);
		
		
	}
		
	return($Array);


	}

	protected static function annualtrendsNM($Block,$Col){

			global $surveys;

				$recset = $surveys;
				
				
					$index = 13;
		  $mcol = $Block.'RW'.$index.$Col;



					$Data = $recset->load(['y' => function($query) use ($mcol)
		{		
		    $query->where('ColumnSetID', '=',$mcol );
		}])->lists('y');

				$Data = collect($Data);
				$Month = ($Data->sum('Data'));
					
				
				return ($Month);


}
	

	protected static function types(){
global $surveys;

		 $recset = $surveys;

	
		 	$Data = $recset->groupby('Type');
      	

      		foreach ($Data as $v) {

		$array [] = array( $v[0]['Type'], count($v));
		
	}

if(!isset($array))$array [] = array('No data',0);
		
 return $array;


// $Data = $recset->load(['z' => function($query)
// {
	
//     $query->select('FacilityCode','Type');
// }])->lists('z');


// $x = collect($Data);


// $z =  $x->groupby('Type');


// 	foreach ($z as $v) {

// 		$array [] = array( $v[0]['Type'], count($v));
		
// 	}

//  return ($array);
	
			}




			protected static function practicing(){
				global $surveys;

				$recset = $surveys;

				$count =  count($surveys);

				$Data = $recset->load(['y' => function($query)
{
	
    $query->where('ColumnSetID', '=', 'IMCIV1SEC6BLK3RW01COL01')
    		->where('Data','=','1');
}])->lists('y');

				$Data1 = count (array_filter($Data));

					$Data = $recset->load(['y' => function($query)
{
	
    $query->where('ColumnSetID', '=', 'IMCIV1SEC6BLK3RW01COL01')
    		->where('Data','=','2');
}])->lists('y');

				$Data2 = count (array_filter($Data));


					$Data = $recset->load(['y' => function($query)
{
	
    $query->where('ColumnSetID', '=', 'IMCIV1SEC6BLK3RW01COL01')
    		->where('Data','=','3');
}])->lists('y');

				$Data3 = count (array_filter($Data));

					$Data = $recset->load(['y' => function($query)
{
	
    $query->where('ColumnSetID', '=', 'IMCIV1SEC6BLK3RW01COL01')
    		->where('Data','=','4');
}])->lists('y');

				$Data4 = count (array_filter($Data));
				
				$array = array(
					array('Assessment Outcome','Yes','No'),
					array('Fully Practicing IMCI',$Data1,$count-$Data1),
					array('Practicing IMCI with gaps',$Data2,$count-$Data2),
					array('Not Practicing IMC',$Data3,$count-$Data3),
					array('No Information Provided',$Data4,$count-$Data4)


					);

				      
 return $array;



			}



	protected static function ownership(){
global $surveys;

		 $recset = $surveys;

$Data = $recset->load(['z' => function($query)
{
	
    $query->select('FacilityCode','Owner');
}])->lists('z');
$x = collect($Data);


$z =  $x->groupby('Owner');


	foreach ($z as $v) {

		$array [] = array( $v[0]['Owner'], count($v));
		
	}
if(!isset($array))$array [] = array('No data',0);
 return ($array);
	
			}

protected static function staff_trained(){

	$Array [] = array('No.of Staff Trained', 'Doctors', 'Nurses','R.C.0.s');
	for ($i=4; $i <10 ; $i++) { 

		$index = sprintf('%02d',$i);
		$col = self::staff_trained_col('COL'.$index);
		$Label = trim(self::getLabel(0,'CHV2SEC1BLK1RW01COL'.$index)  ,'/^No umber of staf train/');
		$Array [] = array(

			trim(str_replace("in ", "", $Label),'/^d/'),
			$col[0],
			$col[1],
			$col[2]
			);



		
	}
	return ($Array);
	

}			


protected static function staff_trained_MNH(){

	$Array [] = array('No.of Staff Trained', 'Doctors', 'Nurses','R.C.0.s');
	for ($i=4; $i <13 ; $i++) { 

		$index = sprintf('%02d',$i);
		$col = self::staff_trained_col_MNH('COL'.$index);
		$Label = trim(self::getLabel(0,'MNHV2SEC4BLK1RW02COL'.$index)  ,'/^# of staf trained in/');
		$Array [] = array(

			trim(str_replace("in ", "", $Label),'/^d/'),
			$col[0],
			$col[1],
			$col[2]
			);



		
	}
	return ($Array);
	

}	

protected static function staff_trained_col_MNH($col){

	global $surveys;
	//CHV2SEC1BLK1RW02COL04chslabelless_number_box1
	//MNHV2SEC4BLK1RW03COL04
	$recset = $surveys;
	$DataD = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'MNHV2SEC4BLK1RW03'.$col);
}])->lists('y');

$DataD = collect($DataD)->sum('Data');

	$DataN = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'MNHV2SEC4BLK1RW04'.$col);
}])->lists('y');

$DataN = collect($DataN)->sum('Data');

	$DataR = $recset->load(['y' => function($query) use($col)
{
	 
    $query->where('ColumnSetID', '=', 'MNHV2SEC4BLK1RW05'.$col);
}])->lists('y');

	$DataR = collect($DataR)->sum('Data');


	return  array($DataD,$DataN,$DataR);
}



protected static function staff_trained_col($col){

	global $surveys;
	//CHV2SEC1BLK1RW02COL04chslabelless_number_box1
	$recset = $surveys;
	$DataD = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK1RW02'.$col);
}])->lists('y');

$DataD = collect($DataD)->sum('Data');

	$DataN = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK1RW03'.$col);
}])->lists('y');

$DataN = collect($DataN)->sum('Data');

	$DataR = $recset->load(['y' => function($query) use($col)
{
	 
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK1RW04'.$col);
}])->lists('y');

	$DataR = collect($DataR)->sum('Data');


	return  array($DataD,$DataN,$DataR);
}


	protected static function opdgen(){
		global $surveys;

		$recset = $surveys;
	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK2RW01COL02');
}])->lists('y');

	$RawData = array_filter(collect($Data)->lists('Data'));
	

	$x = array_count_values($RawData);
	

	$ones = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'1') !== false) {
    $ones += $value;
			}
		
	}



	$twos = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'2') !== false) {
    $twos += $value;
			}
		
	}

	

	$threes = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'3') !== false) {
    $threes += $value;
			}
		
	}

	

	$others = 0;
	foreach ($x as $key => $value) {

		if ( (trim($key,'123,')) !== ''   )   {

			$others+=$value;
		}
		
	}

	



	$Array [] = array('General OPD',$ones);
	$Array [] = array('Paediatric OPD',$twos);
	$Array [] = array('MCH',$threes);
	$Array [] = array('Other',$others);

	return ($Array);




	
	}

	protected static function commstrategy(){
		global $surveys;

		$recset = $surveys;

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW02COL02');
		}])->lists('y');

	$TCU = collect($Data)->count('Data');
echo $TCU;

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW03COL02');
		}])->lists('y');

	
		$Data=collect($Data);
	$Data = $Data->groupby('Data');
	 if(isset($Data['0'])) $count1 = count($Data['0']); else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = count($Data['00']); else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = count($Data['000']); else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = count($Data['0000']); else $count4 = 0; 
	 
	$TCUnt =$count1 + $count2 + $count3 +$count4;
	$TCUt = $TCU-$TCUnt;

	// $Data = $recset->load(['y' => function($query) 
	// 	{
	
 //    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW05COL02');
	// 	}])->lists('y');

	// $CHEWS = collect($Data)->sum('Data');
	

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW06COL02');
		}])->lists('y');

		$Data=collect($Data);
	$Data = $Data->groupby('Data');
		 if(isset($Data['0'])) $count1 = count($Data['0']); else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = count($Data['00']); else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = count($Data['000']); else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = count($Data['0000']); else $count4 = 0; 
	 
	$CHEWSnt =$count1 + $count2 + $count3 +$count4;
	//	$CHEWSnt =  count($Data['0'])+count($Data['00'])+count($Data['000'])+count($Data['0000']);
		$CHEWSt = $TCU-$CHEWSnt;

	// $Data = $recset->load(['y' => function($query) 
	// 	{
	
 //    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW07COL02');
	// 	}])->lists('y');

	// $CHV = collect($Data)->sum('Data');
	

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW08COL02');
		}])->lists('y');

	$Data=collect($Data);
	$Data = $Data->groupby('Data');
 if(isset($Data['0'])) $count1 = count($Data['0']); else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = count($Data['00']); else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = count($Data['000']); else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = count($Data['0000']); else $count4 = 0; 
	 
	$CHVnt =$count1 + $count2 + $count3 +$count4;
	//$CHVnt =  count($Data['0'])+count($Data['00'])+count($Data['000'])+count($Data['0000']);
	
	$CHVt = $TCU-$CHVnt;

		$Array [] = array ('Community Strategy','Trained (>0)','Not Trained (0)');
		$Array [] = array ('Community Units',$TCUt,$TCUnt);
		$Array [] = array ('CHEWS',$CHEWSt,$CHEWSnt);
		$Array [] = array ('CHVs',$CHVt,$CHVnt);

		return ( $Array);



	}


	protected static function ortloc(){
		global $surveys;

		$recset = $surveys;

	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC5BLK1RW04COL02');
}])->lists('y');

	$RawData = array_filter(collect($Data)->lists('Data'));
	$all = collect($Data)->count('Data');
	
	$x = array_count_values($RawData);
	//print_r($x);
	//echo "<br><br><br>";
	if (!(isset($x[2]))) {$x[2]=0;}
	$MCH = $x[2];
	if (!(isset($x[3]))) {$x[3]=0;}
	$U5_Clinic = $x[3];
	if (!(isset($x[1]))) {$x[1]=0;}
	$OPD = $x[1];
	if (!(isset($x[4]))) {$x[4]=0;}
	$Ward = $x[4];
	$Other = $all - $MCH -$U5_Clinic - $OPD -$Ward;

	//echo $Other;

	$Array [] = array('MCH',$MCH);
	$Array [] = array('U5 Clinic',$U5_Clinic);
	$Array [] = array('OPD',$OPD);
	$Array [] = array('Ward',$Ward);
	$Array [] = array('Other',$Other);

	return ($Array);
	
	}








		protected static function dserviceconduct()
		{


			global $surveys;

							$recset = $surveys;
	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'MNHV2SEC1BLK1RW03COL02');
}])->lists('y');

	$RawData = array_filter(collect($Data)->lists('Data'));
	
	$x = array_count_values($RawData);
	

	$ones = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'1') !== false) {
    $ones += $value;
			}
		
	}



	$twos = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'2') !== false) {
    $twos += $value;
			}
		
	}

	

	$threes = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'3') !== false) {
    $threes += $value;
			}
		
	}

	$fours = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'4') !== false) {
    $threes += $value;
			}
		
	}
	$fives = 0;
	foreach ($x as $key => $value) {

		if (strpos($key,'5') !== false) {
    $threes += $value;
			}
		
	}

	

	$others = 0;
	foreach ($x as $key => $value) {

		if ( (trim($key,'12345,')) !== ''   )   {

			$others+=$value;
		}
		
	}

	








	$Array [] = array('Inadequate skill',$ones);
	$Array [] = array('Inadequate staff',$twos);
	$Array [] = array('Inadequate infrastructure',$threes);
	$Array [] = array('Inadequate Equipment',$fours);
	$Array [] = array('Inadequate Commodities and Suppliers',$fives);
	$Array [] = array('Others',$others);

	return ($Array);



		}

		protected static function bedcapacity(){
			global $surveys;

			$array [] = array('Bed Capacity','New Born','Maternal','Total');
	$recset = $surveys;

				$Rec = $recset->groupby('Type');
      	

      		foreach ($Rec as $v) {

      			$type = $v[0]['Type'];




	$Data = $recset->load(['y' => function($query) use ($type)
		{
	
    $query->where('Type','=',$type)
    ->where('ColumnSetID', '=', 'MNHV2SEC1BLK2RW06COL02');
		}])->lists('y');

	$Total = collect($Data)->sum('Data');

	$Data = $recset->load(['y' => function($query) use ($type)
		{
	
    $query->where('Type','=',$type)
    ->where('ColumnSetID', '=', 'MNHV2SEC1BLK2RW07COL02');
		}])->lists('y');

	$Maternity = collect($Data)->sum('Data');

	$Data = $recset->load(['y' => function($query) use ($type)
		{
	
    $query->where('Type','=',$type)
    ->where('ColumnSetID', '=', 'MNHV2SEC1BLK2RW08COL02');
		}])->lists('y');

	$NewBorn = collect($Data)->sum('Data');



		
		$array[]=array($type,$NewBorn,$Maternity,$Total);
		
		
	}

	

	return $array;



		}

	protected static function skillbirth(){

		global $surveys;

		$array [] = array('Skilled birth attendants','0','1-5','6-10','>10');
	$recset = $surveys;

				$Rec = $recset->groupby('Type');
      	

      		foreach ($Rec as $v) {

      			$type = $v[0]['Type'];




	$Data = $recset->load(['y' => function($query) use ($type)
		{
	
    $query->where('Type','=',$type)
    ->where('ColumnSetID', '=', 'MNHV2SEC1BLK2RW03COL02');
		}])->lists('y');

	
		$Data=collect($Data);
	$Data = $Data->groupby('Data')->toArray();

	$keys = array_keys($Data);

	$count0 = 0;
	$count5 = 0;
	$countBeyond = 0;
	$count10 = 0;

	
	foreach ($keys as $key ) {

	

		if ($key > 0 && $key < 6  && $key!= "") {
			$count5 += count($Data[$key]);
		}
		elseif ($key >= 6 && $key<=10 && $key!="") {
			$count10 += count($Data[$key]);
		}
		elseif($key >10 && $key!=""){
			$countBeyond += count($Data[$key]);
		}

		else{
			if(isset($Data[0]))
			$count0 = count($Data[0]);
		else $count0 = 0;
		}

		}


		$array [] = array($type,$count0,$count5,$count10,$countBeyond);
		
		
	}

	

	return $array;
	}


	protected static function FacilityTypes2Stack($col,$headings){

		global $surveys;

		$array [] = $headings;


	$recset = $surveys;

				$Rec = $recset->groupby('Type');
      	

      		foreach ($Rec as $v) {

      			$type = $v[0]['Type'];




	$Data = $recset->load(['y' => function($query) use ($type,$col)
		{
	
    $query->where('Type','=',$type)
    ->where('ColumnSetID', '=', $col);
		}])->lists('y');

		 $Data = collect($Data)->groupby('Data')->toArray();

		 if(!isset($Data[1])) $Data[1] = array();
		 if(!isset($Data[2])) $Data[2] = array();
		 if(!isset($Data[-51])) $Data[-51] = array();
		
		 $array [] = array($type,count($Data[1]),count($Data[2]),count($Data[-51]));

	}


	return $array;



	}


	protected static function MNHPies($slices,$col){



				// $slices = array('Blood Bank Available ','Transfusion Done But No Blood Bank','Other (Specify)','No information provided');

		global $surveys;
		 $recset = $surveys;

$Data = $recset->load(['y' => function($query) use ($col)
{
	
    $query->where('ColumnSetID','=',$col);
}])->lists('y');

	$Data=array_filter(collect($Data)->lists('Data'));

	$x =  array_count_values($Data);

	 $otherval = count($slices)-1;
	 $noinfoval = count($slices);



	
	foreach ($x as $key => $value) {

		if (is_numeric($key)) {

			if(!isset($vl[$key])) $vl[$key] = 0;

			$vl[$key] += $value; 
   			
			}
			elseif ($key==-51) {
if(!isset($vl[$noinfoval])) $vl[$noinfoval] = 0;
				$vl[$noinfoval] += $value; 
				
			}else{

if(!isset($vl[$otherval])) $vl[$otherval] = 0;
				$vl[$otherval] += $value; 
			}



		
	}

	// return $vl;

	foreach ($slices as $key => $slice ) {

		if(!isset($vl[($key+1)])) $vl[($key+1)] = 0;
		$array [] =  array($slice,$vl[($key+1)]);

	}

		
	
	return $array;

	}


	public static function trained($surveys){

		//global $surveys;
		 $recset = $surveys;


// 		 $Data = $recset->load(['y' => function($query) use ($col)
// {
	
//     $query->where('ColumnSetID','=',$col);
// }])->lists('y');


// 	}

		 return $recset;



}



}