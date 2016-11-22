<?php namespace App\Http\Controllers;

use App\Models\Assessments;
use App\Models\Facilities;
use Excel;
 
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

	public function mnhv2_types($version = 'MNHV2'){
		ini_set('max_execution_time', -1);
		$mnhv2_facilities =  Assessments::Submitted('MNHV2')->select('Facility_ID','Assessment_Term')->where('Status','=','Submitted') ->offset(10)
                ->limit(5)->groupBy('Facility_ID')->get()->toArray();
		foreach ($mnhv2_facilities as $key => $value) {
			$Facility_ID = $value['Facility_ID'];
			$term = $value['Assessment_Term'];
			$owner = Facilities::Owner($Facility_ID);
			$type = Facilities::Type($Facility_ID);
			$facility_name = null;
			$county = null;
			$subcounty = null;
			$facility_details = Facilities::Details($Facility_ID);
			foreach ($facility_details as $keys=> $values) {
				$facility_name = $values['FacilityName'];
				$county = $values['County'];
				$subcounty = $values['District'];
			}			
			$final_array[$Facility_ID] = array('facility_code'=>$Facility_ID,'name'=>$facility_name,'county'=>$county,'subcounty'=>$subcounty,'term'=>$term,'owner'=>$owner,'type'=>$type);

		}
		
		$filename  = $version.' ownership';
		$titles = array('Facility Name','County','Subcounty','Ownership','Type','Term');
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Ownership and Types', function($sheet) use ($final_array) {
         	$sheet->cell('A1', function($cell) {
    			$cell->setValue('Facility Name');
    		});
    		$sheet->cell('B1', function($cell) {
    			$cell->setValue('Facility Code');
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
	    			$cell->setValue($value['facility_code']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['name']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['county']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['subcounty']);
	    		});
	    		$sheet->cell('E'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['owner']);
	    		});
	    		$sheet->cell('F'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['type']);
	    		});
	    		$sheet->cell('G'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['term']);
	    		});
	    		$counter++;

    		}
    	});
	
		$report->download('xls');


			
		echo "<pre>";  
		print_r($final_array);die;
		// $mnhv2 =  Assessments::Submitted('MNHV2')->select('Facility_ID','')->get();  		
		return $mnhv2;
	}

	public function raw_types($version = 'MNHV2'){
		ini_set('max_execution_time', -1);
		$mnhv2_facilities =  Assessments::Submitted('MNHV2')->select('Facility_ID','Assessment_Term')->where('Status','=','Submitted')->groupBy('Facility_ID')->get()->toArray();
		foreach ($mnhv2_facilities as $key => $value) {
			$Facility_ID = $value['Facility_ID'];
			$term = $value['Assessment_Term'];
			$owner = Facilities::Owner($Facility_ID);
			$type = Facilities::Type($Facility_ID);
			$facility_name = null;
			$county = null;
			$subcounty = null;
			$facility_details = Facilities::Details($Facility_ID);
			foreach ($facility_details as $keys=> $values) {
				$facility_name = $values['FacilityName'];
				$county = $values['County'];
				$subcounty = $values['District'];
			}			
			$final_array[$Facility_ID] = array('facility_code'=>$Facility_ID,'name'=>$facility_name,'county'=>$county,'subcounty'=>$subcounty,'term'=>$term,'owner'=>$owner,'type'=>$type);

		}
		
		$filename  = $version.' ownership';
		$titles = array('Facility Name','County','Subcounty','Ownership','Type','Term');
		$report = Excel::create($filename);
		$summary = $report->sheet($version.' Ownership and Types', function($sheet) use ($final_array) {
         	$sheet->cell('A1', function($cell) {
    			$cell->setValue('Facility Name');
    		});
    		$sheet->cell('B1', function($cell) {
    			$cell->setValue('Facility Code');
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
	    			$cell->setValue($value['facility_code']);
	    		});
	    		$sheet->cell('B'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['name']);
	    		});
	    		$sheet->cell('C'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['county']);
	    		});
	    		$sheet->cell('D'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['subcounty']);
	    		});
	    		$sheet->cell('E'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['owner']);
	    		});
	    		$sheet->cell('F'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['type']);
	    		});
	    		$sheet->cell('G'.$counter, function($cell) use ($value){
	    			$cell->setValue($value['term']);
	    		});
	    		$counter++;

    		}
    	});
	
		$report->download('xls');


			
		echo "<pre>";  
		print_r($final_array);die;
		// $mnhv2 =  Assessments::Submitted('MNHV2')->select('Facility_ID','')->get();  		
		return $mnhv2;
	}
}
