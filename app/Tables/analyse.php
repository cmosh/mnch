<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Cache;
use LRedis;
use Excel;
$surveys = null;

class analyse extends Controller {
 
  

	private  static function count_YN($cl){
 global $surveys;
 

 $recset = $surveys;

		$Data = $recset->load(['y' => function($query) use ($cl)
{
	
    $query->where('ColumnSetID', '=', $cl);
}])->lists('y');

		$Data = collect($Data)->lists('Data');


// foreach ($Data as $obj ) {
// 	if(isset($obj->x[0]->Data))
// 	$objs[] = $obj->x[0]->Data;

// }
$big0 = array_count_values($Data);



return $big0;


	}
private static function getLabel($trim,$col){

// trim($binary, "\x00..\x1F");
	$Label = substr( Column_set::where('column_setID','=',$col)->with('field_set.field')->get()[0]->field_set->field->Label,$trim);
	
	return $Label;


}
	private static function twoOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
	{

			$array [] = $headings;

		for ($i=$b; $i < $t; $i++) { 
			if(!(in_array($i,$exclude))){
			$o = self::count_YN($Block.sprintf('%02d',$i).$DataCol);
			if(!(isset($o[1]))) $o[1]=0;
			if(!(isset($o[2]))) $o[2]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o[1],
			 	$o[2]);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}
	public static function fourOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
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
	public static function sec3Years($surveys){
		global $surveys;
		$recset = $surveys;

	$Years = Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name');
	return $Years;


	}

	
	public static function u5Register($Year1){
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

	public static function u5RegisterRow($Row,$Year1){
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'));
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterVal($Years[$i].$Row);
		//	echo $Years[$i].' '.$i.'<br>';

		}

		return($array);
	}
	public static function u5RegisterVal($cl){
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



	public static function mnhanalytics($data,$county){
	//Feed in survey
		global $surveys;
		$surveys = $data;

		

	//Guidelines Availability
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No' );
			$Guidelines = Cache::remember('Guidelines'.$county,180,function() use($GuidelinesHeading){
      					return 	 self::twoOptionsFullStack( 'MNHV2SEC3BLK1RW',$GuidelinesHeading,33,3,9,'COL01','COL02','/^ated/ ?');
      	});		
	//Tools Availability
		$ToolsHeading = array('Tools Availability', 'Yes', 'No' );
		$Tools = Cache::remember('Tools'.$county,180,function() use($ToolsHeading){
      					return 	  self::twoOptionsFullStack( 'MNHV2SEC3BLK3RW',$ToolsHeading,0,3,13,'COL01','COL02','/^/');
      	});				


		

    //ownership
		$ownership = Cache::remember('ownership'.$county,180,function() {

			return self::ownership();
		});
	//types
		$types = Cache::remember('types'.$county,180,function() {

			return self::types();
		});
	

	

	//Json Making

		$JsonArray = (array(
			 'Guidelines' =>$Guidelines, 
			 'Tools' =>$Tools,
			
			'ownership' => $ownership,
			'types' => $types

			
			));




		return $JsonArray;
	}
	//public static function 

	public static function annualtrends($Year2){

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

	public static function annualtrendsM($Block,$Col){

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


		public static function u5RegisterN($Year1){
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

	public static function u5RegisterNRow($Row,$Year1){
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'));
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterNVal($Years[$i].$Row);
		//	echo $Years[$i].' '.$i.'<br>';

		}

		return($array);
	}
	public static function u5RegisterNVal($cl){
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



	public static function annualtrendsN($Year2){

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

	public static function annualtrendsNM($Block,$Col){

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
	

	public static function types(){
global $surveys;

		 $recset = $surveys;

$Data = $recset->load(['z' => function($query)
{
	
    $query->select('FacilityCode','Type');
}])->lists('z');
$x = collect($Data);


$z =  $x->groupby('Type');


	foreach ($z as $v) {

		$array [] = array( $v[0]['Type'], count($v));
		
	}

 return ($array);
	
			}






	public static function ownership(){
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

 return ($array);
	
			}

public static function staff_trained(){

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

public static function staff_trained_col($col){

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


	public static function opdgen(){
		global $surveys;

		$recset = $surveys;
	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK2RW01COL02');
}])->lists('y');

	$RawData = collect($Data)->lists('Data');

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

	private static function commstrategy(){
		global $surveys;

		$recset = $surveys;

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW02COL02');
		}])->lists('y');

	$TCU = collect($Data)->sum('Data');


	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW03COL02');
		}])->lists('y');

	$TCUt = collect($Data)->sum('Data');
	$TCUnt = abs($TCU -$TCUt);

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW05COL02');
		}])->lists('y');

	$CHEWS = collect($Data)->sum('Data');
	

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW06COL02');
		}])->lists('y');

	$CHEWSt = collect($Data)->sum('Data');
	$CHEWSnt = abs($CHEWS -$CHEWSt);
	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW07COL02');
		}])->lists('y');

	$CHV = collect($Data)->sum('Data');
	

	$Data = $recset->load(['y' => function($query) 
		{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC8BLK1RW08COL02');
		}])->lists('y');

	$CHVt = collect($Data)->sum('Data');
	$CHVnt = abs($CHV -$CHVt);


		$Array [] = array ('Community Strategy','Trained','Not Trained');
		$Array [] = array ('Community Units',$TCUt,$TCUnt);
		$Array [] = array ('CHEWS',$CHEWSt,$CHEWSnt);
		$Array [] = array ('CHVs',$CHVt,$CHVnt);

		return ( $Array);



	}


	public static function ortloc(){
		global $surveys;

		$recset = $surveys;

	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC5BLK1RW04COL02');
}])->lists('y');

	$RawData = collect($Data)->lists('Data');
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


	
	
}
