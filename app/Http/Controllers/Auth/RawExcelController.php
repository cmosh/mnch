<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Tables\CHSubSurvey;


use Maatwebsite\Excel\Excel;

use App\Tables\MNHSubSurvey;



	
class RawExcelController extends Controller {

	public function StaffTraining(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC1BLK1%');
}]);

					$excel->create('Staff Training', function($ex) use($f)  {

	    $ex->sheet('Sheetname', function($sheet) use($f){
	    	
	  
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







	})->download('xls');


	

}






}
