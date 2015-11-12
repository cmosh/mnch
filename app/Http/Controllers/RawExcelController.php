<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tables\CHSubSurvey;


use Maatwebsite\Excel\Excel;

use App\Tables\MNHSubSurvey;



	
class RawExcelController extends Controller {


public function getIndex(){


	return view('analytics.CH.raw');
}

public function getFacilitySummary(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC1BLK1%');
}]);
 $f->load('z');
					$excel->create('Facility Summary', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term'	
     


			)
	    		
	    		);

	 

 	   $sheet->cells('A1:K1', function($cells) {

    // manipulate the range of cells
    $cells->setFontWeight('bold');
    $cells->setAlignment('center');
     $cells->setValignment('middle');
     

});


	    		
	    		$counter2=0;
	    		
				

	    		foreach ($f as $value) {
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     		
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');


	

}
	public function getStaffTraining(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC1BLK1%');
}]);
	  $f->load('z');

					$excel->create('Staff Training', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	  
 	   $sheet->row(1, array(
     '',	''	,''	,'',
     '',	'',	''	,'',
     '','',''	,
     'IMCI','','',
     'ICCM','','',
     'Enhanced Diarhoea Management','','',
     'Diarrhoea & Pneumonia CMEs for U5s','','',
     'EID Sample Collection','','',
     'Trained in IMCI & Still Working in CHU','',''

			)
 	   );

	    		$sheet->row(2, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term'	,
     'Doctor','Nurse','RCO',
     'Doctor','Nurse','RCO',
     'Doctor','Nurse','RCO',
     'Doctor','Nurse','RCO',
     'Doctor','Nurse','RCO',
     'Doctor','Nurse','RCO'


			)
	    		
	    		);

	   $sheet->mergeCells('L1:N1');
	   $sheet->mergeCells('O1:Q1');
 	$sheet->mergeCells('R1:T1');
 	 $sheet->mergeCells('U1:W1');
 	  $sheet->mergeCells('X1:Z1');
 	   $sheet->mergeCells('AA1:AC1');
 	   $sheet->setHeight(1, 50) ;
 	   $sheet->getStyle('A1:AC1') ->getAlignment()->setWrapText(true); 

 	   $sheet->cells('A1:AC2', function($cells) {

    // manipulate the range of cells
    $cells->setFontWeight('bold');
    $cells->setAlignment('center');
     $cells->setValignment('middle');
     

});


	    		
	    		$counter2=1;
	    		
				

	    		foreach ($f as $value) {
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$value->x[2]->Data,$value->x[10]->Data,$value->x[18]->Data,
		     			$value->x[3]->Data,$value->x[11]->Data,$value->x[19]->Data,
		     			$value->x[4]->Data,$value->x[12]->Data,$value->x[20]->Data,
		     			$value->x[5]->Data,$value->x[13]->Data,$value->x[21]->Data,
		     			$value->x[6]->Data,$value->x[14]->Data,$value->x[22]->Data,
		     			$value->x[7]->Data,$value->x[15]->Data,$value->x[23]->Data
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');


	

}



public function getGuidelines(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC2BLK1%');
}]);

 $f->load('z');



			$excel->create('Guidelines', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
     '2012 IMCI Guidelines','ORT Guidelines','ICCM',
     'Paediatric Protocol 2010/3',	'Diarrhoea Management Job Aid',
     'IEC Materials',	'ART Guidelines',	'EID Algorithm 2009/12/14'	
	
     


			)
	    		
	    		);

	 

 	   $sheet->cells('A1:K1', function($cells) {

    // manipulate the range of cells
    $cells->setFontWeight('bold');
    $cells->setAlignment('center');
     $cells->setValignment('middle');
     

});


 
 	  


	    		
	    		$counter2=0;
	    		
				

	    		foreach ($f as $value) {


$arr=array();
	    				for($i=0;$i<8;$i++) {

 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{$arr[$i]='Yes';}
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='No';
 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='No Information';
 	   	}



 	   	# code...
 	   }
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],
		     			$arr[5],$arr[6],$arr[7]
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');


	

}






}
