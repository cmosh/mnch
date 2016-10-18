<?php namespace App\Helpers;

use Cache;
global $term;

class Analysis_Constructor extends Analysis_Helper {	

	
	
	 public function __construct() {
	 	


	 		
	 	 $this->IMCIV1_trained = function($county){ 
		return $IMCIV1_trained = Cache::remember('IMCIV1_trained'.$county,config('cache.timeout'),function()use($county){
			return self::trained($county);
      	});
      		};

		 $this->IMCIV1_outcome = function($county){ 
		return $IMCIV1_outcome = Cache::remember('IMCIV1_aoutcome'.$county,config('cache.timeout'),function(){


					return self::practicing();

      	});
	};

	 		 $this->IMCIV1_sec3 = function($county){ 
		return $IMCIV1_sec3 = Cache::remember('IMCIV1_sechh3'.$county,config('cache.timeout'),function(){

						/*$filter = function(&$data){
							$data = $data->where('IMCIV1SEC5BLK1RW01COL02','1')
										;
						};*/

						$temp = array(
							array('Section 3','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC5BLK1RW',array(3,4,5,6,7),'COL02','COL04','Malnutrition'),
							self::imciYN('IMCIV1SEC5BLK2RW',array(3),'COL02','COL04','Anemic'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(3),'COL02','COL04','HIV'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(5),'COL02','COL04','Immunization'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(6),'COL02','COL04','Vitamin A'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(9),'COL02','COL04','Deworming'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(10),'COL02','COL04','Child\'s Feeding'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(11),'COL02','COL04','Care for development'),
							self::imciYN('IMCIV1SEC5BLK3RW',array(13),'COL02','COL04','Mother\'s condition'),  						 
							);
      						return $temp;

      	});
	};

			 $this->IMCIV1_Observation = function($county){ 
		return $IMCIV1_Observation = Cache::remember('IMCIV1_Observation'.$county,config('cache.timeout'),function(){

						$temp = array(
							array('Observation of Case Management','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC2BLK2RW',array(2,3,4,5,6,7),'COL02','COL02','Triage'),
							self::imciYN('IMCIV1SEC2BLK3RW',array(2,3,4,5,6),'COL02','COL02','Danger Signs'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(2,3,4,5,6),'COL02','COL04','Cough & difficulty breathing'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(2,3,4,5,6,7),'COL02','COL04','Diarrhoea'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(3,4,5,6,7,8),'COL02','COL04','Fever'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(2,3,4,5,6,7),'COL02','COL04','Ear Infection') 						 
							);
      						return $temp;

      	});
	};



	 $this->IMCIV1_Classification = function($county){ 
		return $IMCIV1_Classification = Cache::remember('IMCIV1_Classification'.$county,config('cache.timeout'),function(){

						$temp = array(
							array('Classification','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(7),'COL02','COL04','Classification for cough'),
							self::imciYN('IMCIV1SEC3BLK2RW',array(8),'COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(8),'COL02','COL04','Correct Assessment & Classify Diarrhoea'),
							self::imciYN('IMCIV1SEC3BLK4RW',array(9),'COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(9),'COL02','COL04','Classification for Fever'),
							self::imciYN('IMCIV1SEC3BLK6RW',array(10),'COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(7),'COL02','COL04','Classification for Ear Infection'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(8),'COL04','COL04','Correct Classification')						 
							);
      						return $temp;

      	});
	};

		 $this->IMCIV1_ObservationB = function($county){ 
		return $IMCIV1_ObservationB = Cache::remember('IMCIV1_ObservationB'.$county,config('cache.timeout'),function(){

						$temp = array(
							array('Observation of Case Management','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22),'COL02','COL04','Very Servere Disease'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(2,3),'COL02','COL04','Jaundice'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(2,3,4,5,6,7,8,9,10,11,12),'COL02','COL04','Eye Infection'),
							self::imciYN('IMCIV1SEC3BLK8RW',array(2,3,4,5,6,7),'COL02','COL04','Diarrhoea'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(2,4,6,8),'COL02','COL04','Breast Feeding Problem'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(3,5,7,9),'COL02','COL04','Breast Feeding') 						 
							);
      						return $temp;

      	});
	};

		 $this->IMCIV1_ClassificationB = function($county){ 
		return $IMCIV1_ClassificationB = Cache::remember('IMCIV1_ClassificationB'.$county,config('cache.timeout'),function(){

						$temp = array(
							array('Classification','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(23),'COL02','COL04','Correctly Assessed and Classified VSD'),
							self::imciYN('IMCIV1SEC4BLK2RW',array(24),'COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(4),'COL02','COL04','Jaundice Classification Done'),
							self::imciYN('IMCIV1SEC4BLK4RW',array(5),'COL04','COL04','Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(13),'COL02','COL04','Eye Infection Correctly Assessed'),
							self::imciYN('IMCIV1SEC4BLK6RW',array(14),'COL04','COL04','Eye Infection Classification Done'),
							self::imciYN('IMCIV1SEC4BLK8RW',array(8),'COL02','COL04','Diarrhoea Correctly Assessed & Classified'),
							self::imciYN('IMCIV1SEC4BLK8RW',array(9),'COL04','COL04','Diarrhoea Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(11),'COL02','COL04','Breast Feeding Correct Classification'),
							self::imciYN('IMCIV1SEC4BLK10RW',array(12),'COL04','COL04','Feeding Correctly Assessed & Classified'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(4),'COL04','COL04','Feeding Correct Classification')
							);
      						return $temp;

      	});
	};

	 $this->IMCIV1_WeightTaken = function($county){ 
		return $IMCIV1_WeightTaken = Cache::remember('IMCIV1_WeightTaken'.$county,config('cache.timeout'),function(){

						$temp = array(
							array('Weight','Yes','No','No Information Provided'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(2),'COL02','COL04','Weight Taken'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(3),'COL02','COL04','Correct Assessment and Classification'),
							self::imciYN('IMCIV1SEC4BLK11RW',array(4),'COL04','COL04','Correct Classification')												 
							);
      						return $temp;

      	});
	};

	 $this->IMCIV1_SpecialNeeds = function($county){ 
		return $IMCIV1_SpecialNeeds = Cache::remember('IMCIV1_SpecialNeeds'.$county,config('cache.timeout'),function(){
				$values = self::imciYN('IMCIV1SEC4BLK12RW',array(2,3,4,5,6),'COL02','COL04','Special Needs');
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
		return $IMCIV1_WORKLOC = Cache::remember('IMCIV1_WORKLOCC'.$county,config('cache.timeout'),function() use($WORKLOCHeading,$WORKLOCEX){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC1BLK5RW',$WORKLOCHeading,0,2,6,'COL01','COL02','/^Was/',$WORKLOCEX);
      						


      						return $temp;

      	});
	};



	 		$this->IMCIV1_CONSOBSV = function($county){ 
	 	//Tools Availability_2

	 			$CONSOBSVEX = array(3,6,7,8);

		$CONSOBSVHeading = array('Consultation Observation', 'Yes', 'No','No information provided' );
		return $IMCIV1_CONSOBSV = Cache::remember('IMCIV1_CVONSOBSV'.$county,config('cache.timeout'),function() use($CONSOBSVHeading,$CONSOBSVEX){
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
		return $IMCIV1_EXTINT = Cache::remember('IMCIV1_EXTINT'.$county,config('cache.timeout'),function() use($EXTINTHeading,$EXTINTEX){
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
		return $IMCIV1_EXTINTB = Cache::remember('IMCIV1_vEXTINTB'.$county,config('cache.timeout'),function() use($EXTINTBHeading){
      					$temp =	  self::SevenOptionsFullStack( 'IMCIV1SEC6BLK2RW',$EXTINTBHeading,0,2,3,'COL01','COL02','/^/');
      						
      						
      						return $temp;

      	});
	};


		$this->IMCIV1_CERTIFICATIONCRITERIA = function($county){ 
	 	//Tools Availability_2

		$CERTIFICATIONCRITERIAHeading = array('Criteria For Certification : Section A', 'Yes', 'No','No information provided' );
		return $IMCIV1_CERTIFICATIONCRITERIA = Cache::remember('IMCIV1_CERTIFICATIONCRITERIA'.$county,config('cache.timeout'),function() use($CERTIFICATIONCRITERIAHeading){
      					$temp =  self::twoOptionsFullStack( 'IMCIV1SEC6BLK4RW',$CERTIFICATIONCRITERIAHeading,0,1,6,'COL01','COL02','/^/');
      					$temp2 = array(self::imciYN('IMCIV1SEC6BLK4RW',array(1,2,3,4,5),'COL02','COL02','Meet All Criteria'));
      					array_splice( $temp, 1, 0, $temp2 );	
      					return $temp;
      	});
      	};

	$this->IMCIV1_CERTIFICATION = function($county){ 
	 	//Tools Availability_2

		$CertificationHeading = array('Certification', 'Yes', 'No','No information provided' );
		return $IMCIV1_CERTIFICATION = Cache::remember('IMCIV1_CERTIFICATION'.$county,config('cache.timeout'),function() use($CertificationHeading){
      					$temp =	  self::twoOptionsFullStack( 'IMCIV1SEC6BLK7RW',$CertificationHeading,0,1,4,'COL01','COL02','/^/');
      						


      						return $temp;

      	});
	};




	 		$this->CHV2_Tools = function($county){ global $term;
	 	//Tools Availability_2

		$ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $CHV2_Tools = Cache::remember('CHV2_Tools'.$county.$term,config('cache.timeout'),function() use($ToolsHeading){
      					$temp =	  self::twoOptionsFullStack( 'CHV2SEC2BLK2RW',$ToolsHeading,0,2,10,'COL01','COL02','/^/');
      						$temp[2][0] = 'EID Register';
      						$temp[2][0] = 'Under 5 Register';
      						return $temp;

      	});
	};



	 		$this->CHV1_Tools = function($county){ global $term;
	 	//Tools Availability_2

		$ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $CHV1_Tools = Cache::remember('CHV1_Tools'.$county.$term,config('cache.timeout'),function() use($ToolsHeading){
      					$temp =	  self::twoOptionsFullStack( 'CHV1SEC2BLK2RW',$ToolsHeading,0,2,9,'COL01','COL02','/^/');
      						// $temp[2][0] = 'EID Register';
      						// $temp[2][0] = 'Under 5 Register';
      						return $temp;

      	});
	};
	 	
	 	$this->CHV2_Guidelines = function($county){ global $term;

	 		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $CHV2_Guidelines = Cache::remember('CHV2_Guidelines'.$county.$term,config('cache.timeout'),function() use($GuidelinesHeading){
      					$temp =	 self::twoOptionsFullStack( 'CHV2SEC2BLK1RW',$GuidelinesHeading,33,2,10,'COL01','COL02','/^ated/ ?');
      				$temp[8][0] = 'EID Algorithim 2009/2012/2014';
      				return $temp;
      	});		

	 	};


	 		$this->CHV1_Guidelines = function($county){ global $term;

	 		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $CHV1_Guidelines = Cache::remember('CHV1_Guidelines'.$county.$term,config('cache.timeout'),function() use($GuidelinesHeading){
      					$temp =	 self::twoOptionsFullStack( 'CHV1SEC2BLK1RW',$GuidelinesHeading,27,2,11,'COL01','COL02','/^updated/ ?');
      				$temp[1][0] = 'EID Algorithim 2009/2012/2014';
      				return $temp;
      	});		

	 	};

	 

		$this->CHV2_DTreatmentCommodities= function($county){ global $term;
		//DTreatmentCommodities_3
		$DTreatmentCommoditiesExclude = array(11,12);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV2_DTreatmentCommodities = Cache::remember('CHV2_DTreatmentCommodities'.$county.$term,config('cache.timeout'),function() use($DTreatmentCommoditiesExclude,$DTreatmentCommoditiesH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentCommoditiesH,0,9,17,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	});	
	};

	$this->CHV1_DTreatmentCommodities= function($county){ global $term;
		//DTreatmentCommodities_3
		$DTreatmentCommoditiesExclude = array(5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,
24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV1_DTreatmentCommodities = Cache::remember('CHV1_DTreatmentCommodities'.$county.$term,config('cache.timeout'),function() use($DTreatmentCommoditiesExclude,$DTreatmentCommoditiesH){
      					return 	  self::twoOptionsFullStack( 'CHV1SEC4BLK2RW',$DTreatmentCommoditiesH,0,3,43,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	});	
	};


	$this->CHV2_DTreatmentAvailability= function($county){ global $term;
	//DTreatmentAvailability_4
		$DTreatmentAvailabilityExclude = array(11,12);
		$DTreatmentAvailabilityH = array('Diarhoea Treatment Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		return $CHV2_DTreatmentAvailability = Cache::remember('CHV2_DTreatmentAvailability'.$county.$term,config('cache.timeout'),function() use($DTreatmentAvailabilityExclude,$DTreatmentAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentAvailabilityH,0,9,17,'COL01','COL04','/^/',$DTreatmentAvailabilityExclude);
	});		
	};	


	$this->CHV1_DTreatmentAvailability= function($county){ global $term;
	//DTreatmentAvailability_4
		$DTreatmentAvailabilityExclude = array(5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,
24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41);
		$DTreatmentAvailabilityH = array('Diarhoea Treatment Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		return $CHV1_DTreatmentAvailability = Cache::remember('CHV1_DTreatmentAvailability'.$county.$term,config('cache.timeout'),function() use($DTreatmentAvailabilityExclude,$DTreatmentAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV1SEC4BLK2RW',$DTreatmentAvailabilityH,0,3,43,'COL01','COL04','/^/',$DTreatmentAvailabilityExclude);
	});		
	};	
		
	//Antibiotics_5

	$this->CHV2_Antibiotics= function($county){ global $term;
		

		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV2_Antibiotics = Cache::remember('CHV2_Antibiotics'.$county.$term,config('cache.timeout'),function() use($AntibioticsH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
      	});	
	};

	$this->CHV1_Antibiotics= function($county){ global $term;
			$AntibioticsAvailabilityExclude = array(9,10,11,12,15);
		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'Not Available','No information provided' );
		
		return $CHV1_Antibiotics = Cache::remember('CHV1_Antibiotics'.$county.$term,config('cache.timeout'),function() use($AntibioticsH,$AntibioticsAvailabilityExclude){
      					return 	  self::twoOptionsFullStack( 'CHV1SEC4BLK2RW',$AntibioticsH,0,8,17,'COL01','COL03','/^/',$AntibioticsAvailabilityExclude);
      	});	
	};

    //AntibioticsAvailability_6

	$this->CHV2_AntibioticsAvailability= function($county){ global $term;
		$AntibioticsAvailabilityH = array('Antibiotics  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		
		return $CHV2_AntibioticsAvailability = Cache::remember('CHV2_AntibioticsAvailability'.$county.$term,config('cache.timeout'),function() use($AntibioticsAvailabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsAvailabilityH,0,5,9,'COL01','COL04','/^/');
      	});	

      	};	

      $this->CHV1_AntibioticsAvailability= function($county){ global $term;
		$AntibioticsAvailabilityH = array('Antibiotics  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );
		$AntibioticsAvailabilityExclude = array(9,10,11,12,15);
		
		return $CHV1_AntibioticsAvailability = Cache::remember('CHV1_AntibioticsAvailability'.$county.$term,config('cache.timeout'),function() use($AntibioticsAvailabilityH,$AntibioticsAvailabilityExclude){
      					return 	  self::fourOptionsFullStack( 'CHV1SEC4BLK2RW',$AntibioticsAvailabilityH,0,8,17,'COL01','COL04','/^/',$AntibioticsAvailabilityExclude);
      	});	

      	};	

      	$this->CHV2_Malaria= function($county){ global $term;
	//Malaria_7
      
		$MalariaH = array('Malaria  Availability', 'Available', 'Not Available','No information provided' );

		return $CHV2_Malaria = Cache::remember('CHV2_Malaria'.$county.$term,config('cache.timeout'),function() use($MalariaH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/',$MalariaExclude);
      	});
	};

	 	$this->CHV1_Malaria= function($county){ global $term;
	//Malaria_7
	 			$MalariaExclude = array(21,22);
		$MalariaH = array('Malaria  Availability', 'Available', 'Not Available','No information provided' );

		return $CHV1_Malaria = Cache::remember('CHV1_Malari'.$county.$term,config('cache.timeout'),function() use($MalariaH,$MalariaExclude){
      					return 	  self::twoOptionsFullStack( 'CHV1SEC4BLK2RW',$MalariaH,0,20,25,'COL01','COL03','/^/',$MalariaExclude);
      	});
	};

		$this->CHV2_MalariaAvaialability= function($county){ global $term;
     //MalariaAvaialability_8
		$MalariaAvaialabilityH = array('Malaria  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );

		return $CHV2_MalariaAvaialability = Cache::remember('CHV2_MalariaAvaialability'.$county.$term,config('cache.timeout'),function() use($MalariaAvaialabilityH){
      					return 	  self::fourOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaAvaialabilityH,0,2,5,'COL01','COL04','/^/');
      	});
	};
		
		$this->CHV1_MalariaAvaialability= function($county){ global $term;
     //MalariaAvaialability_8
			$MalariaExclude = array(21,22);
		$MalariaAvaialabilityH = array('Malaria  Availability', 'Not ordered', 'Ordered but not yet received','Expired','No information provided' );

		return $CHV1_MalariaAvaialability = Cache::remember('CHV1_MalariaAvaialabilit'.$county.$term,config('cache.timeout'),function() use($MalariaAvaialabilityH,$MalariaExclude){
      					return 	  self::fourOptionsFullStack('CHV1SEC4BLK2RW',$MalariaAvaialabilityH,0,20,25,'COL01','COL04','/^/',$MalariaExclude);
      	});
	};
		
	//ortf_9

	$this->CHV2_ortf= function($county){ global $term;
		$ortfExclude = array(4,5);
		$ortfH = array('Ort Functionality', 'Yes', 'No','No information provided' );

		return $CHV2_ortf = Cache::remember('CHV2_ortf'.$county.$term,config('cache.timeout'),function() use($ortfExclude,$ortfH){
      					$temp = 	 self::MtwoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,3,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
      						
      					$temp[1][0] = 'Does the facility have an ORT corner?';
      					$temp[2][0] = 'Are there drugsavailable in the ORTCorner?';
      					$temp[3][0] = 'Is the ORT register upto date (Including zero-reporting)?';
      					$temp[]=self::ortfunction();
      					$temp[4][0] = 'ORT Corner Functionality';

      					return $temp;

      	});
	};

	$this->CHV1_ortf= function($county){ global $term;
		$ortfExclude = array(3);
		$ortfH = array('Ort Functionality', 'Yes', 'No','No information provided' );

		return $CHV1_ortf = Cache::remember('CHV1_ort'.$county.$term,config('cache.timeout'),function() use($ortfExclude,$ortfH){
      					$temp = 	 self::twoOptionsFullStack( 'CHV1SEC5BLK2RW',$ortfH,0,2,6,'COL01','COL02','/^(A)(B)/',$ortfExclude);
      						
      					$temp[1][0] = 'Does the facility have an ORT corner?';
      					$temp[2][0] = 'Are there drugsavailable in the ORTCorner?';
      					$temp[3][0] = 'Is the ORT register upto date (Including zero-reporting)?';
      					$temp[]=self::ortfunction_v1();
      					$temp[4][0] = 'ORT Corner Functionality';

      					return $temp;

      	});
	};
		
		$this->CHV2_supplies= function($county){ global $term;
	//supplies_10
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available','No information provided' );


		return $CHV2_supplies = Cache::remember('CHV2_supplies'.$county.$term,config('cache.timeout'),function() use($suppliesH){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC6BLK2RW',$suppliesH,0,2,9,'COL01','COL02','/^/');
      	});
	};


		$this->CHV1_supplies= function($county){ global $term;
	//supplies_10
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available','No information provided' );
		$suppliesE = array(9);

		return $CHV1_supplies = Cache::remember('CHV1_supplies'.$county.$term,config('cache.timeout'),function() use($suppliesH,$suppliesE){
      					return 	 self::twoOptionsFullStack( 'CHV1SEC7BLK2RW',$suppliesH,0,2,14,'COL01','COL02','/^/',$suppliesE);
      	});
	};
		
	//resources_11

		$this->CHV2_resources= function($county){ global $term;
		$resourcesH = array('Resource Availability', 'Available', 'Not Available','No information provided' );


		return $CHV2_resources = Cache::remember('CHV2_resources'.$county.$term,config('cache.timeout'),function() use($resourcesH){
      					return 	self::twoOptionsFullStack( 'CHV2SEC7BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	
      	});
	};

	$this->CHV1_resources= function($county){ global $term;
		$resourcesH = array('Resource Availability', 'Available', 'Not Available','No information provided' );


		return $CHV1_resources = Cache::remember('CHV1_resources'.$county.$term,config('cache.timeout'),function() use($resourcesH){
      					return 	self::twoOptionsFullStack( 'CHV1SEC8BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	
      	});
	};


		$this->CHV2_ownership= function($county){ global $term;
	  //ownership_16
		return $CHV2_ownership = Cache::remember('CHV2_ownership'.$county.$term,config('cache.timeout'),function() {

			return self::ownership();
		});

	};
		$this->CHV2_types= function($county){ global $term;
	//types_17
		return $CHV2_types = Cache::remember('CHV2_types'.$county.$term,config('cache.timeout'),function() {

			return self::types();
		});
	};

	$this->CHV1_ownership= function($county){ global $term;
	  //ownership_16
		return $CHV1_ownership = Cache::remember('CHV1_ownership'.$county.$term,config('cache.timeout'),function() {

			return self::ownership();
		});

	};
		$this->CHV1_types= function($county){ global $term;
	//types_17
		return $CHV1_types = Cache::remember('CHV1_types'.$county.$term,config('cache.timeout'),function() {

			return self::types();
		});
	};

	$this->CHV2_staff_trained= function($county){ 
	 global $term;
	 return Cache::remember('CHV2_staff_trained'.$county.$term,config('cache.timeout'),function(){
			return self::staff_trained();
		});
		
	};


	$this->CHV1_staff_trained= function($county){ 
	 global $term;
	 return Cache::remember('CHV1_staff_trained'.$county.$term,config('cache.timeout'),function(){
			return self::staff_trained_v1();
		});
		
	};

	$this->CHV2_comm_strategy= function($county){ global $term;
	//comm_strategy_19
		return $CHV2_comm_strategy = Cache::remember('CHV2_comm_strategybn'.$county.$term,config('cache.timeout'),function(){
			return self::commstrategy();
		});
	};

	$this->CHV1_comm_strategy= function($county){ global $term;
	//comm_strategy_19
		return $CHV1_comm_strategy = Cache::remember('CHV1_comm_strategybn'.$county.$term,config('cache.timeout'),function(){
			return self::commstrategy_v1();
		});
	};

	//lort_20

	$this->CHV2_lort= function($county){ global $term;
		return $CHV2_lort = Cache::remember('CHV2_lort'.$county.$term,config('cache.timeout'),function(){
			return self::ortloc();
		});
		// return self::ortloc();

	};

	$this->CHV1_lort= function($county){ global $term;
		return $CHV1_lort = Cache::remember('CHV1_lort'.$county.$term,config('cache.timeout'),function(){
			return self::ortloc_v1();
		});
		// return self::ortloc();

	};

	//genopd_21
	$this->CHV2_genopd= function($county){ global $term;
		return $CHV2_genopd = Cache::remember('CHV2_genopd'.$county.$term,config('cache.timeout'),function(){
			return self::opdgen();
		});
	};

	$this->CHV1_genopd= function($county){ global $term;
		return $CHV1_genopd = Cache::remember('CHV1_genopd'.$county.$term,config('cache.timeout'),function(){
			return self::opdgen_v1();
		});
	};

	//u5Register_12Year1
		$this->CHV2_u5Register= function($county,$Year){ global $term;
		return $CHV2_u5Register = Cache::remember('CHV2_u5Register'.$county.$Year.$term,config('cache.timeout'),function() use($Year){
      					return self::u5Register($Year);
      	});
	};

	//u5RegisterN_13Year3
		$this->CHV2_u5RegisterN= function($county,$Year){ global $term;
		return $CHV2_u5RegisterN = Cache::remember('CHV2_u5RegisterN'.$county.$Year.$term,config('cache.timeout'),function() use($Year){
      					return self::u5RegisterN($Year);
      	});
	};
	//annualtrends_14Year2
	$this->CHV2_annualtrends= function($county,$Year){ global $term;
		return $CHV2_annualtrends = Cache::remember('CHV2_annualtrends'.$county.$Year.$term,config('cache.timeout'),function() use($Year){
      					return self::annualtrends($Year);
      	});
	};
		
	//annualtrends_15Year4
	$this->CHV2_annualtrendsN= function($county,$Year){ global $term;
		return $CHV2_annualtrendsN = Cache::remember('CHV2_annualtrendsN'.$county.$Year.$term,config('cache.timeout'),function() use($Year){
      					return self::annualtrendsN($Year);
      	});
	};

	$this->MNHV2_Guidelines = function($county){ global $term;
		//Guidelines Availability
		 $GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $Guidelines = Cache::remember('MNHV2_GuidelinesMNH'.$county.$term,config('cache.timeout'),function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV2SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});	

      	};

     $this->MNHV1_Guidelines = function($county){ global $term;
		//Guidelines Availability
		 $GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No','No information provided' );
			return $Guidelines = Cache::remember('MNHV1_GuidelinesMNH'.$county.$term,config('cache.timeout'),function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV1SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});	

      	};


      	$this->MNHV2_Tools = function($county){ global $term;
	//Tools Availability
		 $ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $Tools = Cache::remember('MNHV2_ToolsMNH'.$county.$term,config('cache.timeout'),function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK3RW',$ToolsHeading,0,3,13,'COL01','COL02','/^/');
      	});	

	};


	$this->MNHV1_Tools = function($county){ global $term;
	//Tools Availability
		 $ToolsHeading = array('Tools Availability', 'Yes', 'No','No information provided' );
		return $Tools = Cache::remember('MNHV1_ToolsMNH'.$county.$term,config('cache.timeout'),function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC3BLK3RW',$ToolsHeading,4,3,13,'COL01','COL02','/^/',[5,6]);
      	});	

	};

	 	$this->MNHV2_DService = function($county){ global $term;
      	//DService
		$DSheading = array('Provsion of Delivery Services', 'Yes', 'No','No information provided' );
		return $DService = Cache::remember('MNHV2_DService'.$county.$term,config('cache.timeout'),function() use($DSheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK1RW',$DSheading,0,2,3,'COL01','COL02','/^/');
      	});				
			};



	 	$this->MNHV1_DService = function($county){ global $term;
      	//DService
		$DSheading = array('Provsion of Delivery Services', 'Yes', 'No','No information provided' );
		return $DService = Cache::remember('MNHV1_DService'.$county.$term,config('cache.timeout'),function() use($DSheading){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC1BLK1RW',$DSheading,0,2,3,'COL01','COL02','/^/');
      	});				
			};


			$this->MNHV2_EquipAvail = function($county){ global $term;
		//EquipAvail
		$EquipAvailheading = array('Equipment Availability', 'Available', 'Not Available','No information provided' );
		return $EquipAvail = Cache::remember('MNHV2_EquipAvail'.$county.$term,config('cache.timeout'),function() use($EquipAvailheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC6BLK1RW',$EquipAvailheading,0,3,20,'COL01','COL02','/^/');
      	});	
      	};	


			$this->MNHV1_EquipAvail = function($county){ global $term;
		//EquipAvail
		$EquipAvailheading = array('Equipment Availability', 'Available', 'Not Available','No information provided' );
		return $EquipAvail = Cache::remember('MNHV1_EquipAvail_v1'.$county.$term,config('cache.timeout'),function() use($EquipAvailheading){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC7BLK1RW',$EquipAvailheading,0,3,20,'COL01','COL02','/^/');
      	});	
      	};	




      	$this->MNHV2_jjavailability = function($county){ global $term;
		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		return $jjavailability = Cache::remember('MNHV2_JaidsMNH'.$county.$term,config('cache.timeout'),function() use($jheading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK2RW',$jheading,21,3,11,'COL01','COL02','/^have/');
      	});			
      	};	

      	$this->MNHV1_jjavailability = function($county){ global $term;
		//Job aids Availability
		$jheading = array('Job Aids Availability', 'Yes', 'No','No information provided' );
		return $jjavailability = Cache::remember('MNHV1_JaidsMNHsv1'.$county.$term,config('cache.timeout'),function() use($jheading){
      					$temp =  self::twoOptionsFullStack( 'MNHV1SEC3BLK2RW',$jheading,21,3,11,'COL01','COL02','/^have an updated/');
						$temp[1][0] = "PPH (AMSTL)";
						$temp[2][0] = "Breastfeeding";
						$temp[3][0] = "Neonatal Resuscitation";
						$temp[4][0] = "MgS04";
						$temp[5][0] = "HBB Action Plan (Asphyxia)";
						$temp[6][0] = "Guidelines of Blood Transfusion in Pregnancy";
						$temp[7][0] = "Methods of Oxygen Administration";
						$temp[8][0] = "KMC ";
						return $temp;
      	});			
      	};	

		
		$this->MNHV2_HMan = function($county){ global $term;
		// Health Facilitty Management
		$HManH = array('Health Facilitty Management', 'Yes', 'No','No information provided' );
		return $HMan = Cache::remember('MNHV2_HMan'.$county.$term,config('cache.timeout'),function() use($HManH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC1BLK4RW',$HManH,28,3,9,'COL01','COL02','/^a/');
      	});		
      	};


      		$this->MNHV1_HMan = function($county){ global $term;
		// Health Facilitty Management
		$HManH = array('Health Facilitty Management', 'Yes', 'No','No information provided' );
		return $HMan = Cache::remember('MNHV1_HMan'.$county.$term,config('cache.timeout'),function() use($HManH){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC1BLK4RW',$HManH,28,3,9,'COL01','COL02','/^a/');
      	});		
      	};


		$this->MNHV2_Bemonc = function($county){ global $term;	
		// 	Bemonc
		$BemoncH = array('BEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Bemonc = Cache::remember('MNHV2_Bemonc'.$county.$term,config('cache.timeout'),function() use($BemoncH){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncH,0,3,11,'COL01','COL02','/^/');
      	});		
      	};


      	$this->MNHV1_Bemonc = function($county){ global $term;	
		// 	Bemonc
		$BemoncH = array('BEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Bemonc = Cache::remember('MNHV1_Bemonc'.$county.$term,config('cache.timeout'),function() use($BemoncH){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC2BLK2RW',$BemoncH,0,3,11,'COL01','COL02','/^/');
      	});		
      	};


		$this->MNHV2_BemoncChallenge = function($county){ global $term;
 		// BemoncChallenge

		$BemoncChallengeH = array('BEmONC Signal Functions Challenges', 'Inadequate Drugs', 'Inadequate Skills','Inadequate Supplies','No Job Aids','Inadequate Equipment','Case Never Present','No Challenged Experienced','No information provided' );
		return $BemoncChallenge = Cache::remember('MNHV2_BemoncChallenge'.$county.$term,config('cache.timeout'),function() use($BemoncChallengeH){
      					return 	  self::SevenOptionsFullStack( 'MNHV2SEC2BLK2RW',$BemoncChallengeH,0,3,11,'COL01','COL03','/^/');
      	});		
		};


		$this->MNHV1_BemoncChallenge = function($county){ global $term;
 		// BemoncChallenge

		$BemoncChallengeH = array('BEmONC Signal Functions Challenges', 'Inadequate Drugs', 'Inadequate Skills','Inadequate Supplies','No Job Aids','Inadequate Equipment','Case Never Present','No Challenged Experienced','No information provided' );
		return $BemoncChallenge = Cache::remember('MNHV1_BemoncChallenge'.$county.$term,config('cache.timeout'),function() use($BemoncChallengeH){
      					return 	  self::SevenOptionsFullStack( 'MNHV1SEC2BLK2RW',$BemoncChallengeH,0,3,11,'COL01','COL03','/^/');
      	});		
		};


		$this->MNHV2_Cemonc = function($county){ global $term;
      	//Cemonc

      	$CemoncExclude = array(4,10,11);

		$CemoncH = array('CEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Cemonc = Cache::remember('MNHV2_CemonC'.$county.$term,config('cache.timeout'),function() use($CemoncH,$CemoncExclude){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC2BLK3RW',$CemoncH,0,3,9,'COL01','COL02','/^(1)(2)(3)(4)Does this facility/',$CemoncExclude);
      	});		

		};
      	

      	$this->MNHV1_Cemonc = function($county){ global $term;
      	//Cemonc

      	$CemoncExclude = array(4,10,11);

		$CemoncH = array('CEmONC SIGNAL FUNCTIONS', 'Yes', 'No','No information provided' );
		return $Cemonc = Cache::remember('MNHV1_CemonC'.$county.$term,config('cache.timeout'),function() use($CemoncH,$CemoncExclude){
      					return 	  self::twoOptionsFullStack( 'MNHV1SEC2BLK3RW',$CemoncH,0,3,9,'COL01','COL02','/^(1)(2)(3)(4)Does this facility/',$CemoncExclude);
      	});		

		};
      	


		$this->MNHV2_HIVTest = function($county){ global $term;
			//HIVTest
		$HIVTestheadings = array('Provision of HIV & Testing', 'Yes', 'No','No information provided' );
		return $HIVTest = Cache::remember('MNHV2_HIVTest'.$county.$term,config('cache.timeout'),function() use($HIVTestheadings){
      					$temp =  self::twoOptionsFullStack( 'MNHV2SEC2BLK4RW',$HIVTestheadings,4,3,12,'COL01','COL02','/^/');
      					$temp[2][0] = 'A'.$temp[2][0];
      					return $temp;
      	});		
      	};


      	$this->MNHV1_HIVTest = function($county){ global $term;
			//HIVTest
		$HIVTestheadings = array('Provision of HIV & Testing', 'Yes', 'No','No information provided' );
		return $HIVTest = Cache::remember('MNHV1_HIVTest'.$county.$term,config('cache.timeout'),function() use($HIVTestheadings){
      					$temp =  self::twoOptionsFullStack( 'MNHV1SEC2BLK4RW',$HIVTestheadings,4,3,12,'COL01','COL02','/^/');
      					$temp[2][0] = 'A'.$temp[2][0];
      					return $temp;
      	});		
      	};


		$this->MNHV2_ownership = function($county){ global $term;
    //ownership
		return $ownership = Cache::remember('MNHV2_ownershipMNH'.$county.$term,config('cache.timeout'),function() {

			return self::ownership();
		});
		};

			$this->MNHV1_ownership = function($county){ global $term;
    //ownership
		return $ownership = Cache::remember('MNHV1_ownershipMNH'.$county.$term,config('cache.timeout'),function() {

			return self::ownership();
		});
		};

		$this->MNHV2_types = function($county){ global $term;
	//types
		return $types = Cache::remember('MNHV2_typesMNH'.$county.$term,config('cache.timeout'),function() {

			return self::types();
		});
		};


			$this->MNHV1_types = function($county){ global $term;
	//types
		return $types = Cache::remember('MNHV1_typesMNH'.$county.$term,config('cache.timeout'),function() {

			return self::types();
		});
		};


		$this->MNHV2_dserviceconduct = function($county){ global $term;
	//dserviceconduct
		return $dserviceconduct = Cache::remember('MNHV2_dserviceconduct'.$county.$term,config('cache.timeout'),function() {

			return self::dserviceconduct();
		});
		};


			$this->MNHV1_dserviceconduct = function($county){ global $term;
	//dserviceconduct
		return $dserviceconduct = Cache::remember('MNHV1_dserviceconduct_v1'.$county.$term,config('cache.timeout'),function() {
			//REPLACE
			return self::dserviceconduct_v1();
		});
		};
	
		$this->MNHV2_NewBornCare = function($county){ global $term;
	//NewBornCare
		$NewBornCareHeadings = array('New Born Care','Yes','No','No information provided');
		return $NewBornCare = Cache::remember('MNHV2_NewBornCare'.$county.$term,config('cache.timeout'),function() use ($NewBornCareHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK5RW03COL02',$NewBornCareHeadings);
		});
		};

			$this->MNHV1_NewBornCare = function($county){ global $term;
	//NewBornCare
		$NewBornCareHeadings = array('New Born Care','Yes','No','No information provided');
		return $NewBornCare = Cache::remember('MNHV1_NewBornCares'.$county.$term,config('cache.timeout'),function() use ($NewBornCareHeadings){

			return self::FacilityTypes2Stack('MNHV1SEC2BLK5RW03COL02',$NewBornCareHeadings);
		});
		};

		$this->MNHV2_Kangaroo1 = function($county){ global $term;
//Kangaroo1
		$Kangaroo1Headings = array('Kangaroo Awarness','Yes','No','No information provided');
		return $Kangaroo1 = Cache::remember('MNHV2_Kangaroo1'.$county.$term,config('cache.timeout'),function() use ($Kangaroo1Headings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK6RW03COL02',$Kangaroo1Headings);
		});
		};

		$this->MNHV1_Kangaroo1 = function($county){ global $term;
//Kangaroo1
		$Kangaroo1Headings = array('Kangaroo Awarness','Yes','No','No information provided');
		return $Kangaroo1 = Cache::remember('MNHV1_Kangaroo1v1'.$county.$term,config('cache.timeout'),function() use ($Kangaroo1Headings){

			return self::FacilityTypes2Stack('MNHV1SEC2BLK6RW03COL02',$Kangaroo1Headings);
		});
		};

		$this->MNHV2_Kangaroo2 = function($county){ global $term;
		//Kangaroo1
		$Kangaroo2Headings = array('Kangaroo Corner','Yes','No','No information provided');
		return $Kangaroo2 = Cache::remember('MNHV2_Kadsdsangaroo2'.$county.$term,config('cache.timeout'),function() use ($Kangaroo2Headings){

			return self::kangaroo2('MNHV2SEC2BLK6RW04COL02',$Kangaroo2Headings);
		});
		};

		$this->MNHV1_Kangaroo2 = function($county){ global $term;
		//Kangaroo1
		$Kangaroo2Headings = array('Kangaroo Corner','Yes','No','No information provided');
		return $Kangaroo2 = Cache::remember('MNHV1_Kadsdsangaroov1'.$county.$term,config('cache.timeout'),function() use ($Kangaroo2Headings){

			return self::kangaroo2_v1('MNHV1SEC2BLK6RW04COL02',$Kangaroo2Headings);
		});
		};

		$this->MNHV2_devpep = function($county){ global $term;
		//devpep
		$devpepHeadings = array('Preparedness for Delivery','Yes','No','No information provided');
		return $devpep = Cache::remember('MNHV2_devpep'.$county.$term,config('cache.timeout'),function() use ($devpepHeadings){

			return self::FacilityTypes2Stack('MNHV2SEC2BLK7RW04COL02',$devpepHeadings);
		});
		};

		$this->MNHV1_devpep = function($county){ global $term;
		//devpep
		$devpepHeadings = array('Preparedness for Delivery','Yes','No','No information provided');
		return $devpep = Cache::remember('MNHV1_devpeps'.$county.$term,config('cache.timeout'),function() use ($devpepHeadings){

			return self::FacilityTypes2Stack('MNHV1SEC2BLK7RW04COL02',$devpepHeadings);
		});
		};

		$this->MNHV2_skillbirth = function($county){ global $term;
		//skillbirth
		return $skillbirth = Cache::remember('MNHV2_skillbirth'.$county.$term,config('cache.timeout'),function(){
			return self::skillbirth('V2');
		});
		};

		$this->MNHV1_skillbirth = function($county){ global $term;
		//skillbirth
		return $skillbirth = Cache::remember('MNHV1_skillbirth'.$county.$term,config('cache.timeout'),function(){

			//REPLACE
			return self::skillbirth('V1');
		});
		};


		$this->MNHV2_bedcapacity = function($county){ global $term;
		//bedcapacity
		return $bedcapacity = Cache::remember('MNHV2_bedcapacity'.$county.$term,config('cache.timeout'),function(){

			return self::bedcapacity('V2');
		});
		};

			$this->MNHV1_bedcapacity = function($county){ global $term;
		//bedcapacity
		return $bedcapacity = Cache::remember('MNHV1_bedcapacity'.$county.$term,config('cache.timeout'),function(){
			//REPLACE
			return self::bedcapacity('V1');
		});
		};


		$this->MNHV2_hours24 = function($county){ global $term;
		//hours24
		$hours24headings = array('24 hour service delivery', 'Yes', 'No','No information provided' );
		return $hours24 = Cache::remember('MNHV2_hours24'.$county.$term,config('cache.timeout'),function()use($hours24headings){

			return self::FacilityTypes2Stack('MNHV2SEC1BLK3RW03COL02',$hours24headings);
		});

		
		};


		$this->MNHV1_hours24 = function($county){ global $term;
		//hours24
		$hours24headings = array('24 hour service delivery', 'Yes', 'No','No information provided' );
		return $hours24 = Cache::remember('MNHV1_hours24'.$county.$term,config('cache.timeout'),function()use($hours24headings){

			return self::FacilityTypes2Stack('MNHV1SEC1BLK3RW03COL02',$hours24headings);
		});

		
		};

		$this->MNHV2_testing = function($county){ global $term;
		//testing
		$testingheadings = array('Testing Supplies', 'Available', 'Not Available','No information provided' );
		return $testing = Cache::remember('MNHV2_testing'.$county.$term,config('cache.timeout'),function()use($testingheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK2RW02COL02',$testingheadings);
		});
		};

		$this->MNHV1_testing = function($county){ global $term;
		//testing
		$testingheadings = array('Testing Supplies', 'Available', 'Not Available','No information provided' );
		return $testing = Cache::remember('MNHV1_testings'.$county.$term,config('cache.timeout'),function()use($testingheadings){

			return self::FacilityTypes2Stack('MNHV1SEC7BLK2RW02COL02',$testingheadings);
		});
		};


		$this->MNHV2_devkit = function($county){ global $term;
		//devkit
		$devkitheadings = array('Delivery kit components', 'Available', 'Not Available','No information provided' );
		return $devkit = Cache::remember('MNHV2_devkit'.$county.$term,config('cache.timeout'),function()use($devkitheadings){

			return self::FacilityTypes2Stack('MNHV2SEC6BLK3RW03COL02',$devkitheadings);
		});
};

		
		$this->MNHV1_devkit = function($county){ global $term;
		//devkit
		$devkitheadings = array('Delivery kit components', 'Available', 'Not Available','No information provided' );
		return $devkit = Cache::remember('MNHV1_devkits'.$county.$term,config('cache.timeout'),function()use($devkitheadings){

			return self::FacilityTypes2Stack('MNHV1SEC7BLK3RW03COL02',$devkitheadings);
		});
};



		$this->MNHV2_staff_trained = function($county){ global $term;
		//staff_trained_18
		return $staff_trained = Cache::remember('MNHV2_staff_trained'.$county.$term,config('cache.timeout'),function(){
			return self::staff_trained_MNH();
		});

};


	$this->MNHV1_staff_trained = function($county){ global $term;
		//staff_trained_18
		return $staff_trained = Cache::remember('MNHV1_staff_trained'.$county.$term,config('cache.timeout'),function(){
			//REPLACE
			return self::staff_trained_MNH();
		});

};

		$this->MNHV2_MainBlood = function($county){ global $term;
		//MainBlood
			/*TODO Transfusion Done But No Blood Bank*/
		$MainBloodSLices = array('Blood Bank Available ','No Blood Bank Available','Other','No information provided');
		return $MainBlood  = Cache::remember('MNHV2_MainBlood'.$county.$term,config('cache.timeout'),function() use ($MainBloodSLices){
			return self::MNHPies($MainBloodSLices,'MNHV2SEC2BLK3RW04COL02');
		});
};


		$this->MNHV1_MainBlood = function($county){ global $term;
		//MainBlood
			/*TODO Transfusion Done But No Blood Bank*/
		$MainBloodSLices = array('Blood Bank Available ','No Blood Bank Available','Other','No information provided');
		return $MainBlood  = Cache::remember('MNHV1_MainBlood'.$county.$term,config('cache.timeout'),function() use ($MainBloodSLices){
			return self::MNHPies($MainBloodSLices,'MNHV1SEC2BLK3RW04COL02');
		});
};


		$this->MNHV2_ReasonBlood = function($county){ global $term;
		//ReasonBlood
		$ReasonBloodSLices = array('Blood Bank Not Available ','Supplies and equipment not available','Other','No information provided');
		return $ReasonBlood  = Cache::remember('MNHV2_ReasonBlood'.$county.$term,config('cache.timeout'),function() use ($ReasonBloodSLices){
			return self::MNHPies($ReasonBloodSLices,'MNHV2SEC2BLK3RW05COL02');
		});

		};


	$this->MNHV1_ReasonBlood = function($county){ global $term;
		//ReasonBlood
		$ReasonBloodSLices = array('Blood Bank Not Available ','Supplies and equipment not available','Other','No information provided');
		return $ReasonBlood  = Cache::remember('MNHV1_ReasonBloods'.$county.$term,config('cache.timeout'),function() use ($ReasonBloodSLices){
			return self::MNHPies($ReasonBloodSLices,'MNHV1SEC2BLK3RW05COL02');
		});

		};

	

			$this->MNHV2_Reasoncs = function($county){ global $term;
			//Reasoncs
			$ReasoncsSLices = array('Supplies and equipment not available','Theatre Space Not Available','Human Resource','Other','No information provided');
			return $Reasoncs  = Cache::remember('MNHV2_Reasoncs'.$county.$term,config('cache.timeout'),function() use ($ReasoncsSLices){
				return self::MNHPies($ReasoncsSLices,'MNHV2SEC2BLK3RW09COL02');
			});

		};
	

		$this->MNHV1_Reasoncs = function($county){ global $term;
		//Reasoncs
		$ReasoncsSLices = array('Supplies and equipment not available','Theatre Space Not Available','Human Resource','Other','No information provided');
		return $Reasoncs  = Cache::remember('MNHV1_Reasoncs'.$county.$term,config('cache.timeout'),function() use ($ReasoncsSLices){
			return self::MNHPies($ReasoncsSLices,'MNHV1SEC2BLK3RW09COL02');
		});

	};
}


}