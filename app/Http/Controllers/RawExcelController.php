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


public function getHealthServices(Excel $excel)
{

	$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC2BLK2%');
}]);

 $f->load('z');



			$excel->create('Health Services', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
    'General OPD',	'Paediatric OPD'	,'MCH',	'Others'


	
     


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


$arr=array('','','','');
	

 	   	
 	   	
 	   	if( $value->x[0]->Data=='1')
 	   		{$arr[0]='X';}
 	   	elseif($value->x[0]->Data=='2')
 	   	{
 	   		$arr[1]='X';
 	   	}
 	   	elseif($value->x[0]->Data=='3')
 	   	{
 	   		$arr[2]='X';
 	   	}
 	   		elseif($value->x[0]->Data=='4')
 	   	{
 	   		$arr[3]='X';
 	   	}
 	   	


 	   	# code...
 	  
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],$arr[2],$arr[3]
		     			
		     			
						
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



			$excel->create('Guidelines Availability', function($ex) use($f)  {

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




public function getTools(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC2BLK2%');
}]);

 $f->load('z');



			$excel->create('Tools Availability', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
    'EID Register',	'Under 5 Register',	'ORT Corner Register (Improvised)',
    'Mother Child Booklet',	'ORT Corner Register (MoH)','IMCI Case Recording Form',	'Referral Slips	ICCM Tools'

	
     


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


public function getDiarrhoea(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC4BLK2%');
}]);

 $f->load('z');



			$excel->create('Diarrhoea Treatment', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
   'Artemether + Leumefantrine (AL)'	,'Reason'	,
   'Artesunate Injection',	'Reason',	
   'Injection Quinine','Reason',	
   'Tablet Metronidazole','Reason',	
   'Syrup Metronidazole','Reason',	
   'Syrup Amoxicillin'	,'Reason',	
   'Syrup Cotrimoxazole','Reason',	
   'Tablet Amoxicillin','Reason',	
   'Tablet Paed Cotrimoxazole','Reason',	
   'Low Osmolarity Oral Rehydration Salts (ORS)','Reason',	
   'Vitamin A	50,000 IU','Reason',	
   'Vitamin A	100,000 IU','Reason',	
   'Vitamin A	200,000 IU','Reason',	
   'Zinc Sulphate','Reason',	
   'ORS & Zinc Co-pack','Reason',	
   'Rota Virus Vaccine','Reason'
	 
     


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

	    				for($i=0;$i<=28;$i++) {

		 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{
 	   			$arr[$i]='Available';
 	   		$arr[$i+1]='';

 	   }
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='Not Available';
 	   		if( $value->x[$i+1]->Data=='1')
 	   		{
 	   			$arr[$i+1]='Not Ordered';
 	   		}
 	   		elseif( $value->x[$i+1]->Data=='2')
 	   		{
 	   			$arr[$i+1]='Ordered but not yet received';
 	   		}
 	   		elseif( $value->x[$i+1]->Data=='3')
 	   		{
 	   			$arr[$i+1]='Expired';
 	   		}
 	   		else
 	   		{
 	   			$arr[$i+1]='';
 	   		}



 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='';
 	   		$arr[$i+1]='';
 	   	}
 	   	$i++;

 	   	# code...
 	   }
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],
		     			$arr[2],$arr[3],
		     			$arr[4],$arr[5],
		     			$arr[6],$arr[7],
		     			$arr[8],$arr[9],
		     			$arr[10],$arr[11],
		     			$arr[12],$arr[13],
		     			$arr[14],$arr[15],
		     			$arr[16],$arr[17],
		     			$arr[18],$arr[19],
		     			$arr[20],$arr[21],
		     			$arr[22],$arr[23],
		     			$arr[24],$arr[25],
		     			$arr[26],$arr[27],
		     			$arr[28],$arr[29]
						
						));
					
				}

				


	       

	    });







	})->download('csv');
}




public function getOrtFunctionality(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC8BLK1%');
}]);
	  $f->load('z');

					$excel->create('ORT Corner Functionality', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term'	,
     'Availability of Designated ORT Corner',	'Availability of Drugs in ORT Corner',	'ORT Register up to date'
   

			)
	    		
	    		);


 	   $sheet->cells('A1:AC2', function($cells) {

    // manipulate the range of cells
    $cells->setFontWeight('bold');
    $cells->setAlignment('center');
     $cells->setValignment('middle');
     

});
			
	    		$counter2=0;
	    		
				

	    		foreach ($f as $value) {

	    	for($i=0;$i<4;$i++) {

 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{$arr[$i]='Yes';}
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='No';
 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='';
 	   	}


}
	    
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			
		     			$arr[0],$arr[2],$arr[3]
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');


	

}



public function getOrtLocation(Excel $excel)
{

	$f = CHSubSurvey::all();
	

	 $f->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC5BLK1RW04COL02');
}]);

 $f->load('z');



			$excel->create('Location of ORT', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
    'MCH',	'U5 Clinic',	'OPD',	'Ward',	'Other'



	
     


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


$arr=array('','','','','');
	

 	   	
 	   	
 	   	if( $value->y->Data=='1')
 	   		{$arr[0]='X';}
 	   	elseif($value->y->Data=='2')
 	   	{
 	   		$arr[1]='X';
 	   	}
 	   	elseif($value->y->Data=='3')
 	   	{
 	   		$arr[2]='X';
 	   	}
 	   		
 	   	elseif($value->y->Data=='4')
 	   	{
 	   		$arr[3]='X';
 	   	}
 	   	elseif($value->y->Data=='5')
 	   	{
 	   		$arr[4]='X';
 	   	}


 	   	# code...
 	  
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],$arr[2],$arr[3],$arr[4]
		     			
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');



}



public function getSuppliesAvailability(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC6BLK2%');
}]);

 $f->load('z');



			$excel->create('Supplies Availability', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
     'Spacer','Suction Machine',
   'NG Tube'	,'Disposable Syringes'	,
   'Insulin Syringes',	'IV Starter Kit',	
   'Nebulizer'	
  
     


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

	    				for($i=0;$i<7;$i++) {

		 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{
 	   			$arr[$i]='Available';

 	   }
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='Not Available';
 	 
 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='';
 	   		
 	   	}
 	  

 	   	# code...
 	   }
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],
		     			$arr[2],$arr[3],
		     			$arr[4],$arr[5],
		     			$arr[6]
						
						));
					
				}

				


	       

	    });







	})->download('csv');
}

public function getResourceAvailability(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC7BLK2%COL02');
}]);

 $f->load('z');



			$excel->create('Resource Availability', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
     'Safe Water Source','Electricity',
   'TV'	,'DVD Player'	
  
     


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

	    				for($i=0;$i<4;$i++) {

		 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{
 	   			$arr[$i]='Available';

 	   }
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='Not Available';
 	 
 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='';
 	   		
 	   	}
 	  

 	   	# code...
 	   }
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],
		     			$arr[2],$arr[3]
		     			
						));
					
				}

				


	       

	    });







	})->download('csv');
}


	public function getCommunityStrategy(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC8BLK1%');
}]);
	  $f->load('z');

					$excel->create('Community Strategy', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	  
 	   $sheet->row(1, array(
     '',	''	,''	,'',
     '',	'',	''	,'',
     '','',''	,
     'Community Units','',
     'CHEWs','',
     'CHVs','',
     
			)
 	   );

	    		$sheet->row(2, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term'	,
     'Trained','Not Trained',
'Trained','Not Trained',
'Trained','Not Trained'    

			)
	    		
	    		);

	   $sheet->mergeCells('L1:M1');
	   $sheet->mergeCells('N1:O1');
 		$sheet->mergeCells('P1:Q1');
 	   $sheet->setHeight(1, 20) ;
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
		     			$value->x[1]->Data,$value->x[0]->Data-$value->x[1]->Data,
		     			$value->x[4]->Data,$value->x[3]->Data-$value->x[4]->Data,
		     			$value->x[6]->Data,$value->x[5]->Data-$value->x[6]->Data,
		     			
		     			
						
						));
					
				}

				


	       

	    });







	})->download('csv');


	

}



}
