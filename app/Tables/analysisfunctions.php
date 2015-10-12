<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class analysisfunctions extends Controller {



	


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

	private  static function count_YN($cl){
 global $surveys;
 

 $recset = $surveys;
// echo $recset;
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








		protected static function dserviceconduct()
		{


			global $surveys;

							$recset = $surveys;
	$Data = $recset->load(['y' => function($query) 
{
	
    $query->where('ColumnSetID', '=', 'MNHV2SEC1BLK1RW03COL02');
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
			$count0 = count($Data[0]);
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

global $surveys;

				// $slices = array('Blood Bank Available ','Transfusion Done But No Blood Bank','Other (Specify)','No information provided');


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









}