<?php namespace App\Http\Controllers;

use App\Models\Assessments;
use App\Models\Facilities;
use Excel;
use Cache;
use Input;
 
class GtRawController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| GT RawData Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$location= 'Raw Data';
		return view('raw.main')->with('location',$location)->with('title',$location);
	}



	public function generate_ownership_types($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term')->where('Status','=','Submitted')->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}

	public function generate_guidelines_job_aids($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}

	public function generate_tools_availability($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->where('Survey',$version)->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}

	public function generate_supplies_availability($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->where('Survey',$version)->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}
	public function generate_resource_availability($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->where('Survey',$version)->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}

	public function generate_community_strategy($version){		
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->where('Survey',$version)->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	}

	public function generate_staff_training($version){	
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();
	    

	}

	public function generate_health_services($version){	
		return $facilities =  Assessments::Submitted($version)->select('Facility_ID','Assessment_Term','Data')->where('Status','=','Submitted')->with('facility_short.ftype','facility_short.fownername')->groupBy('Facility_ID','Assessment_Term')->get()->toArray();    

	}
	public function tools_availability_excels($version = 'CHV2'){
		$final_array = Cache::remember('facility_tools_availability_array'.$version,1440,function() use ($version){			
			return $this->generate_tools_availability($version);
      	});				
		$final_array = $this->generate_tools_availability($version);
		$filename  = $version.' tools availability';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Tools Availability', function($sheet) use ($final_array,$version) {
			if($version=='CHV2'){
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Early Infant Diagnosis (EID) register');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Diarrhoea Treatment in Under 5 Register');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('ORT corner register (improvised)');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('Mother Child Booklet');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('ORT corner register (MOH)');
	    		});
	    		$sheet->cell('J1', function($cell) {
	    			$cell->setValue('IMCI case recording form');
	    		}); 
	    		$sheet->cell('K1', function($cell) {
	    			$cell->setValue('Referal Slips');
	    		});
	    		$sheet->cell('L1', function($cell) {
	    			$cell->setValue('ICCM Tools');
	    		});    		    		 	
			}elseif ($version=='CHV1') {
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Under 5 Register');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('ORT corner register (improvised)');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('Mother Child Booklet');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('ORT corner register (MOH)');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('IMCI case recording form');
	    		});
	    		$sheet->cell('J1', function($cell) {
	    			$cell->setValue('Referral Slips');
	    		}); 
	    		$sheet->cell('K1', function($cell) {
	    			$cell->setValue(' ICCM Tools');
	    		});	    		
			}
         	
    		$counter = 2;
    		
    		foreach ($final_array as $value) {       		
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW02COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW02COL02']==2)?'No':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW03COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW03COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW04COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW04COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW05COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW05COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW06COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW06COL02']==2)?'No':'No Information Provided');	
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW07COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW07COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW08COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW08COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('L'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK2RW09COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK2RW09COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
	    		}else if($version=='CHV1'){	    			
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW02COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW02COL02']==2)?'No':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW03COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW03COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW04COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW04COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW05COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW05COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW06COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW06COL02']==2)?'No':'No Information Provided');	
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW07COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW07COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK2RW08COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK2RW08COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		
	    		}
	    		
	    		
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function supplies_availability_excels($version = 'CHV2'){
		$final_array = Cache::remember('facility_supplies_availability_array'.$version,1440,function() use ($version){			
			return $this->generate_supplies_availability($version);
      	});				
		// $final_array = $this->generate_supplies_availability($version);
		$filename  = $version.' supplies availability';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Supplies Availability', function($sheet) use ($final_array,$version) {
			if($version=='CHV2'){
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Spacer');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Suction');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('NG Tube');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('Disposable Syringe');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('Insulin Syringe');
	    		});
	    		$sheet->cell('J1', function($cell) {
	    			$cell->setValue('IV Starter');
	    		}); 
	    		$sheet->cell('K1', function($cell) {
	    			$cell->setValue('Nebulizer');
	    		});
	    		    		    		 	
			}elseif ($version=='CHV1') {
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Spacer');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Suction');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('NG Tube');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('Disposable Syringe');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('Insulin Syringe');
	    		});
	    		$sheet->cell('J1', function($cell) {
	    			$cell->setValue('IV Starter');
	    		}); 
	    		$sheet->cell('K1', function($cell) {
	    			$cell->setValue('Nebulizer');
	    		});
	    		
			}
         	
    		$counter = 2;
    		
    		foreach ($final_array as $value) {       		
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW02COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW02COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW03COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW03COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW04COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW04COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW05COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW05COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW06COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW06COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW07COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW07COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC6BLK2RW08COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC6BLK2RW08COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		
	    		}else if($version=='CHV1'){	    			
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW02COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW02COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW03COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW03COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW04COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW04COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW05COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW05COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW06COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW06COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW07COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW07COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC7BLK2RW08COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC7BLK2RW08COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});

		    		
	    		}
	    		
	    		
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function resource_availability_excels($version = 'CHV2'){
		$final_array = Cache::remember('facility_resource_availability_array'.$version,1440,function() use ($version){			
			return $this->generate_resource_availability($version);
      	});				
		// $final_array = $this->generate_resource_availability($version);
		$filename  = $version.' resource availability';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Resource Availability', function($sheet) use ($final_array,$version) {
			if($version=='CHV2'){
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Safe Water Source(AL)');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Electricity');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('TV');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('DVD Player');
	    		});	    		
	    		    		    		 	
			}elseif ($version=='CHV1') {
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Safe Water Source(AL)');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Electricity');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('TV');
	    		});
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('DVD Player');
	    		});
	    		
			}
         	
    		$counter = 2;
    		
    		foreach ($final_array as $value) {       		
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC7BLK2RW02COL02']!=1) ? 'Available' :(($value['Data']['CHV2SEC7BLK2RW02COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC7BLK2RW03COL02']!=1) ? 'Available' :(($value['Data']['CHV2SEC7BLK2RW03COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC7BLK2RW04COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC7BLK2RW04COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC7BLK2RW05COL02']==1) ? 'Available' :(($value['Data']['CHV2SEC7BLK2RW05COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});		    		
		    		
	    		}else if($version=='CHV1'){	    			
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC8BLK2RW05COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC8BLK2RW05COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC8BLK2RW02COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC8BLK2RW02COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC8BLK2RW03COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC8BLK2RW03COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC8BLK2RW04COL02']==1) ? 'Available' :(($value['Data']['CHV1SEC8BLK2RW04COL02']==2)?'Not Available':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		
	    		}
	    		
	    		
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function community_strategy_excels($version = 'CHV2'){
		$final_array = Cache::remember('facility_community_strategy_array'.$version,1440,function() use ($version){			
			return $this->generate_community_strategy($version);
      	});				
		$final_array = $this->generate_community_strategy($version);
		$filename  = $version.' community strategy';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Community Strategy', function($sheet) use ($final_array,$version) {
			if($version=='CHV2'){
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Community Units');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('CHEWS');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('CVHs');
	    		});
	    			    		    		    		 	
			}elseif ($version=='CHV1') {
				$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('County');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('SubCounty');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('Community Units');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('CHEWS');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('CVHs');
	    		});
	    		
			}
         	
    		$counter = 2;
    		
    		foreach ($final_array as $value) {       		
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC8BLK1RW03COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC8BLK1RW06COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV2SEC8BLK1RW08COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    			    		
		    		
	    		}else if($version=='CHV1'){	    			
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC9BLK1RW04COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC9BLK1RW10COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice= ($value['Data']['CHV1SEC9BLK1RW12COL02']!=0) ? 'Trained (>0)' :'Not Trained (0)';
		    			$cell->setValue($choice);
		    		});
		    		
	    		}
	    		
	    		
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function guidelines_job_aids_excels($version = 'CHV2'){
		$final_array = Cache::remember('facility_guidelines_job_aids_array'.$version,1440,function() use ($version){			
			return $this->generate_guidelines_job_aids($version);
      	});				
		$final_array = $this->generate_guidelines_job_aids($version);
		$filename  = $version.' guidelines and job aids';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Guidelines and Job Aids', function($sheet) use ($final_array,$version) {
         	$sheet->cell('A1', function($cell) {
    			$cell->setValue('Facility Code');
    		});
    		$sheet->cell('B1', function($cell) {
    			$cell->setValue('Facility Name');
    		});
    		$sheet->cell('C1', function($cell) {
    			$cell->setValue('County');
    		});
    		$sheet->cell('D1', function($cell) {
    			$cell->setValue('SubCounty');
    		});
    		$sheet->cell('E1', function($cell) {
    			$cell->setValue('2012 IMCI Guidelines');
    		});
    		$sheet->cell('F1', function($cell) {
    			$cell->setValue('ORT Guidelines');
    		});
    		$sheet->cell('G1', function($cell) {
    			$cell->setValue('ICCM Guidelines');
    		});
    		$sheet->cell('H1', function($cell) {
    			$cell->setValue('Paediatric Protocol 2010/2013');
    		});
    		$sheet->cell('I1', function($cell) {
    			$cell->setValue('Diarrhoea management job aid 2014');
    		});
    		$sheet->cell('J1', function($cell) {
    			$cell->setValue('IEC materials');
    		}); 
    		$sheet->cell('K1', function($cell) {
    			$cell->setValue('ART guidelines 2012');
    		});
    		$sheet->cell('L1', function($cell) {
    			$cell->setValue('EID Algorithm');
    		});    		    		 
    		$counter = 2;
    		
    		foreach ($final_array as $value) {       		
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW02COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW02COL02']==2)?'No':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW03COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW03COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW04COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW04COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW05COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW05COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW06COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW06COL02']==2)?'No':'No Information Provided');	
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW07COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW07COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW08COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW08COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('L'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV2SEC2BLK1RW09COL02']==1) ? 'Yes' :(($value['Data']['CHV2SEC2BLK1RW09COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
	    		}else if($version=='CHV1'){	    			
	    			$sheet->cell('E'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW02COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW02COL02']==2)?'No':'No Information Provided');
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('F'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW03COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW03COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('G'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW04COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW04COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('H'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW05COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW05COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('I'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW06COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW06COL02']==2)?'No':'No Information Provided');	
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('J'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW07COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW07COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('K'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW08COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW08COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
		    		$sheet->cell('L'.$counter, function($cell) use ($value){
		    			$choice = ($value['Data']['CHV1SEC2BLK1RW09COL02']==1) ? 'Yes' :(($value['Data']['CHV1SEC2BLK1RW09COL02']==2)?'No':'No Information Provided');	    
		    			$cell->setValue($choice);
		    		});
	    		}
	    		
	    		
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function generate_ownership_types_excels($version = 'MNHV2'){

		$final_array = Cache::remember('facility_ownership_types_array'.$version,1440,function() use ($version){			
			return $this->generate_ownership_types($version);
      	});				

		$filename  = $version.' ownership';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Ownership and Types', function($sheet) use ($final_array) {
         	$sheet->cell('A1', function($cell) {
    			$cell->setValue('Facility Code');
    		});
    		$sheet->cell('B1', function($cell) {
    			$cell->setValue('Facility Name');
    		});
    		$sheet->cell('C1', function($cell) {
    			$cell->setValue('County');
    		});
    		$sheet->cell('D1', function($cell) {
    			$cell->setValue('SubCounty');
    		});
    		$sheet->cell('E1', function($cell) {
    			$cell->setValue('Ownership');
    		});
    		$sheet->cell('F1', function($cell) {
    			$cell->setValue('Type');
    		});
    		$sheet->cell('G1', function($cell) {
    			$cell->setValue('Term');
    		});    		
    		$counter = 2;
    		
    		foreach ($final_array as $value) {    			
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		$sheet->cell('E'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['fownername']['Group']);
	    		});
	    		$sheet->cell('F'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['ftype']['FacilityGroup']);
	    		});
	    		$sheet->cell('G'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['Assessment_Term']);
	    		});
	    		$counter++;

    		}
    	});
	
		$report->download('xls');
	}
	public function generate_health_services_excels($version = 'MNHV2'){

		$final_array = Cache::remember('health_services_array'.$version,1440,function() use ($version){			
			return $this->generate_health_services($version);
      	});				
		
		$filename  = $version.' health services';		
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Health Services', function($sheet) use ($final_array,$version) {
         	$sheet->cell('A1', function($cell) {
    			$cell->setValue('Facility Code');
    		});
    		$sheet->cell('B1', function($cell) {
    			$cell->setValue('Facility Name');
    		});
    		$sheet->cell('C1', function($cell) {
    			$cell->setValue('County');
    		});
    		$sheet->cell('D1', function($cell) {
    			$cell->setValue('SubCounty');
    		});
    		$sheet->cell('E1', function($cell) {
    			$cell->setValue('General OPD');
    		});
    		$sheet->cell('F1', function($cell) {
    			$cell->setValue('Paediatric OPD');
    		});
    		$sheet->cell('G1', function($cell) {
    			$cell->setValue('MCH');
    		});
    		$sheet->cell('H1', function($cell) {
    			$cell->setValue('Other');
    		});    		
    		$counter = 2;    		
    		foreach ($final_array as $value) {    			
    			$sheet->cell('A'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityCode']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['FacilityName']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['County']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['facility_short']['District']);
	    		});
	    		if($version=='CHV2'){
	    			if(in_array('CHV2SEC1BLK2RW01COL02', $value['Data'])){
	    				$services = $value['Data']['CHV2SEC1BLK2RW01COL02'];		    			
	    			}else{
	    				$services = array(5);	    				
	    			}		    				    			
	    		}else{
	    			if(in_array('CHV1SEC1BLK2RW01COL02', $value['Data'])){
	    				$services = $value['Data']['CHV1SEC1BLK2RW01COL02'];		    			
	    			}else{
	    				$services = array(5);
	    				
	    			}		    			
	    		}	    		
	    		$sheet->cell('E'.$counter, function($cell) use ($services){
	    			$used = 'No';
	    			if (in_array(1, $services)) {
					    $used = 'Yes';
					}	    			
	    			$cell->setValue($used);
	    		});
	    		$sheet->cell('F'.$counter, function($cell) use ($services){
	    			$used = 'No';
	    			if (in_array(2, $services)) {
					    $used = 'Yes';
					}	    				    			
	    			$cell->setValue($used);
	    		});
	    		$sheet->cell('G'.$counter, function($cell) use ($services){
	    			$used = 'No';
	    			if (in_array(3, $services)) {
					    $used = 'Yes';
					}	    					    			
	    			$cell->setValue($used);
	    		});
	    		$sheet->cell('H'.$counter, function($cell) use ($services){
	    			$used = 'No';
	    			if (in_array(4, $services)) {
					    $used = 'Yes';
					}	    			    			
	    			$cell->setValue($used);
	    		});
	    		$counter++;
    		}	    	
    	});
	
		$report->download('xls');
	}

	public function generate_training_excels($version = 'MNHV2'){
		if($version=='CHV2'){			
			$final_array = Cache::remember('facility_staff_training_array'.$version,1440,function() use ($version){			
				return $this->generate_staff_training($version);
	      	});
			$final_array =  $this->generate_staff_training($version);	      	
			$filename  = $version.' training excel';		
			$report = Excel::create($filename);
			$summary = $report->sheet($version.' Training', function($sheet) use ($final_array) {
	         	$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('Clinical Staff');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('IMCI');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('ICCM');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('Enhanced Diarrhoea Management');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('Diarrhoea and Pneumonia CMEs for U5s');
	    		}); 
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('EID Sample Collection Training');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('Staff still Working in Child Health Unit');
	    		});    	

	    		$counter = 2;	    		
				$row_one = 2;		
				foreach ($final_array as $key => $value) {					
					$row_two = $row_one+1;
					$row_three = $row_one+2;
					$counter_two = $counter+1;
					$counter_three = $counter+2;
					$mfl = $value['Facility_ID'];					
					$fname = $value['facility_short']['FacilityName'];					
					$sheet->setMergeColumn(array(
					    'columns' => array('A','B'),
					    'rows' => array(
					        array($counter,$counter_two),
					        array($counter_two,$counter_three),
					    )
					));
					$sheet->cell('C'.$counter, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Doctors');
					});
					$sheet->cell('C'.$counter_two, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Nurses');
					});
					$sheet->cell('C'.$counter_three, function($cell) {
						// manipulate the cell
		    			$cell->setValue('R.C.O.s');
					});
					$sheet->cell('A'.$counter, function($cell) use ($value){
						$cell->setValue($value['facility_short']['FacilityCode']);		    			
		    		});
		    		$sheet->cell('B'.$counter, function($cell) use ($value){
		    			$cell->setValue($value['facility_short']['FacilityName']);
		    			// $cell->setValue($value['Facility_ID']);
		    		});
		    		$letters = array('D','E','F','G','H','I');
		    		for ($i=0; $i < count($letters); $i++) {
		    			$col = $i+3; 
		    			$sheet->cell($letters[$i].$counter, function($cell) use ($value,$row_one,$col){
			    			$cell->setValue(intval($value['Data']['CHV2SEC1BLK1RW0'.$row_one.'COL0'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_two, function($cell) use ($value,$row_two,$col){
			    			$cell->setValue(intval($value['Data']['CHV2SEC1BLK1RW0'.$row_two.'COL0'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_three, function($cell) use ($value,$row_three,$col){
			    			$cell->setValue(intval($value['Data']['CHV2SEC1BLK1RW0'.$row_three.'COL0'.$col]));
			    		});
			    		$col++;
		    		}		    		

					$counter = $counter_three+1;
				}
	    		
    		});
		}
		if($version=='CHV1'){			
			$final_array = Cache::remember('facility_staff_training_array'.$version,1440,function() use ($version){			
				return $this->generate_staff_training($version);
	      	});
			$final_array =  $this->generate_staff_training($version);	
			// echo "<pre>";print_r($final_array[0]);die;      	
			$filename  = $version.' training excel';		
			$report = Excel::create($filename);
			$summary = $report->sheet($version.' Training', function($sheet) use ($final_array) {
	         	$sheet->cell('A1', function($cell) {
	    			$cell->setValue('Facility Code');
	    		});
	    		$sheet->cell('B1', function($cell) {
	    			$cell->setValue('Facility Name');
	    		});
	    		$sheet->cell('C1', function($cell) {
	    			$cell->setValue('Clinical Staff');
	    		});
	    		$sheet->cell('D1', function($cell) {
	    			$cell->setValue('IMCI (Before 2010)');
	    		});
	    		$sheet->cell('E1', function($cell) {
	    			$cell->setValue('IMCI (After 2010)');
	    		});
	    		$sheet->cell('F1', function($cell) {
	    			$cell->setValue('ICCM (Before 2010)');
	    		});
	    		$sheet->cell('G1', function($cell) {
	    			$cell->setValue('ICCM (After 2010)');
	    		}); 
	    		$sheet->cell('H1', function($cell) {
	    			$cell->setValue('Enhanced Diarrhoea Management (Before 2010)');
	    		});
	    		$sheet->cell('I1', function($cell) {
	    			$cell->setValue('Enhanced Diarrhoea Management (After 2010)');
	    		}); 
	    		$sheet->cell('J1', function($cell) {
	    			$cell->setValue('Diarrhoea and Pneumonia CMEs for U5s (Before 2010)');
	    		});
	    		$sheet->cell('K1', function($cell) {
	    			$cell->setValue('Diarrhoea and Pneumonia CMEs for U5s (After 2010)');
	    		}); 	    		
	    		$sheet->cell('L1', function($cell) {
	    			$cell->setValue('Staff still Working in Child Health Unit');
	    		});    	

	    		$counter = 2;	    		
				$row_one = 3;		
				foreach ($final_array as $key => $value) {					
					$row_two = $row_one+1;
					$row_three = $row_one+2;
					$row_four = $row_one+3;
					$row_five = $row_one+4;
					$counter_two = $counter+1;
					$counter_three = $counter+2;
					$counter_four = $counter+3;
					$counter_five = $counter+4;
					$mfl = $value['Facility_ID'];					
					$fname = $value['facility_short']['FacilityName'];					
					$sheet->setMergeColumn(array(
					    'columns' => array('A','B'),
					    'rows' => array(
					        array($counter,$counter_two),
					        array($counter_two,$counter_three),
					        array($counter_three,$counter_four),
					        array($counter_four,$counter_five),
					    )
					));
					$sheet->cell('C'.$counter, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Doctors');
					});
					$sheet->cell('C'.$counter_two, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Nurses');
					});
					$sheet->cell('C'.$counter_three, function($cell) {
						// manipulate the cell
		    			$cell->setValue('R.C.O.s');
					});
					$sheet->cell('C'.$counter_four, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Pharmaceutical Staff');
					});
					$sheet->cell('C'.$counter_five, function($cell) {
						// manipulate the cell
		    			$cell->setValue('Lab Staff');
					});	
					$sheet->cell('A'.$counter, function($cell) use ($value){
						$cell->setValue($value['facility_short']['FacilityCode']);		    			
		    		});
		    		$sheet->cell('B'.$counter, function($cell) use ($value){
		    			$cell->setValue($value['facility_short']['FacilityName']);
		    			// $cell->setValue($value['Facility_ID']);
		    		});		    		
		    		$letters = array('D','E','F','G','H','I','J','K','L');
		    		for ($i=0; $i < count($letters); $i++) {
		    			$col = $i+3;
		    			$col = ($col < 10 ? '0'.$col : $col); 
		    			
		    			$sheet->cell($letters[$i].$counter, function($cell) use ($value,$row_one,$col){
			    			$cell->setValue(intval($value['Data']['CHV1SEC1BLK1RW0'.$row_one.'COL'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_two, function($cell) use ($value,$row_two,$col){
			    			$cell->setValue(intval($value['Data']['CHV1SEC1BLK1RW0'.$row_two.'COL'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_three, function($cell) use ($value,$row_three,$col){
			    			$cell->setValue(intval($value['Data']['CHV1SEC1BLK1RW0'.$row_three.'COL'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_four, function($cell) use ($value,$row_five,$col){
			    			$cell->setValue(intval($value['Data']['CHV1SEC1BLK1RW0'.$row_five.'COL'.$col]));
			    		});
			    		$sheet->cell($letters[$i].$counter_five, function($cell) use ($value,$row_five,$col){
			    			$cell->setValue(intval($value['Data']['CHV1SEC1BLK1RW0'.$row_five.'COL'.$col]));
			    		});
			    		$col++;
		    		}		    		

					$counter = $counter_five+1;
				}
	    		
    		});
		}
		$report->download('xls');


	}


}
