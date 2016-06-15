<?php namespace App\Helpers;

use App\Models\Column_set;
use App\Models\Block;
use App\Models\Facilities;
use App\Models\Participants;


class Analysis_Helper {		
	
	protected static function ortfunction(){
		global $surveys;
	    $countB = count($surveys->lists('Data')->where('CHV2SEC5BLK1RW03COL02',"1"));

      	$Data = $surveys->lists('Data')->where('CHV2SEC5BLK1RW03COL02',"1")
										->where('CHV2SEC5BLK1RW06COL02',"1")
										->where('CHV2SEC5BLK1RW07COL02',"1");
      	$countF = count($Data);
      	return array('Functionality',$countF,$countB-$countF,0);
	}

	protected  static function count_YN($cl){
	global $surveys;
 
 	$Data = $surveys->lists('Data')->lists($cl)->toArray();
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
			if(!(isset($o["1"]))) $o["1"]=0;
			if(!(isset($o["2"]))) $o["2"]=0;
			if(!(isset($o["-51"]))) $o["-51"]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o["1"],
			 	$o["2"],
			 	$o["-51"]);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}

	protected static function imciYN($Block,$rows=array(),$Data1Col,$Data2Col,$label,$filter="string")
	{
		global $surveys;
			
		$Data = $surveys->lists('Data');

		if(is_callable ($filter)) $filter($Data);

		$Total = count($Data);
		 $YesData = $Data;
		$NoData  = $Data;

		
		

		foreach ($rows as $row) {
			$Col1 = $Block.sprintf('%02d',$row).$Data1Col;
			$Col2 =  $Block.sprintf('%02d',$row).$Data2Col;
			$YesData = $YesData->where($Col1,'1');
			$YesData = $YesData->where($Col2,'1');

			}

		$Yes = count($YesData);

		foreach ($rows as $row) {
			$Col1 = $Block.sprintf('%02d',$row).$Data1Col;
			$Col2 =  $Block.sprintf('%02d',$row).$Data2Col;
			$NoData = $NoData->where($Col1,'-51');
			$NoData = $NoData->where($Col2,'-51');

			}

		$Noinfo = count($NoData);



			
			
		return [$label,$Yes,$Total-$Yes-$Noinfo,$Noinfo];

			

	}

	protected static function fourOptionsFullStack($Block,$headings,$trim,$b,$t,$LabelCol,$DataCol,$extratrim,$exclude=array(),$extrarow=null)
	{

			$array [] = $headings;

		for ($i=$b; $i < $t; $i++) { 
			if(!(in_array($i,$exclude))){
			$o = self::count_YN($Block.sprintf('%02d',$i).$DataCol);
			if(!(isset($o["1"]))) $o["1"]=0;
			if(!(isset($o["2"]))) $o["2"]=0;
			if(!(isset($o["3"]))) $o["3"]=0;
			if(!(isset($o["-51"]))) $o["-51"]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o["1"],
			 	$o["2"],
			 	$o["3"],
			 	$o["-51"]
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
			if(!(isset($o["1"]))) $o["1"]=0;
			if(!(isset($o["2"]))) $o["2"]=0;
			if(!(isset($o["3"]))) $o["3"]=0;
			if(!(isset($o["4"]))) $o["4"]=0;
			if(!(isset($o["5"]))) $o["5"]=0;
			if(!(isset($o["6"]))) $o["6"]=0;
			if(!(isset($o["7"]))) $o["7"]=0;
			if(!(isset($o["-51"]))) $o["-51"]=0;
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o["1"],
			 	$o["2"],
			 	$o["3"],
			 	$o["4"],
			 	$o["5"],
			 	$o["6"],
			 	$o["7"],
			 	$o["-51"]
			 	);
		}

		}
		if($extrarow!==null)$array[]=$extrarow;
		return $array;

	}
	

	
	protected static function u5Register($Year1){
	
		
    $Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('name')->toArray());
    $array [] = array('Diarrhoea Cases',$Years[$Year1],$Years[$Year1-1],$Years[$Year1-2]);
		for ($i=2; $i < 9; $i++) {

			$index =  sprintf('%02d',$i);

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

       $array[1][1] = $array[2][1] + $array[3][1] + $array[4][1] + $array[5][1] + $array[6][1] +$array[7][1];
		 $array[1][2] = $array[2][2] + $array[3][2] + $array[4][2] + $array[5][2] + $array[6][2] +$array[7][2];
		 $array[1][3] = $array[2][3] + $array[3][3] + $array[4][3] + $array[5][3] + $array[6][3] +$array[7][3];
		$array[4][0] = 'Zinc';
		
		return $array;


	}

	protected static function u5RegisterRow($Row,$Year1){
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID')->toArray());
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterVal($Years[$i].$Row);
		

		}

		return($array);
	}

	protected static function u5RegisterVal($cl){
		global $surveys;

		$Data = $surveys->lists('Data');
		$columns = Column_set::where('column_setID','Like',$cl.'%')->get()->lists('column_setID')->toArray();
		
		return $Data->sum(function ($assessment) use ($columns){
		$assessment = collect($assessment);
		$filtered = $assessment->only($columns);
		return 	$filtered->values()->sum();
		
			});

	}


	protected static function annualtrends($Year2){

		$Block = array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID')->toArray())[$Year2];

		//print_r ($Years[3]);
		$Array [] = array('Treatment Trends','ORS+ Zinc','ORS','Zinc','Antibiotics','Others','No Treatment');

		for ($i=2; $i <14 ; $i++) { 
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
				
		for ($i=3; $i <9 ; $i++) 

				{ 
		  $index = sprintf('%02d',$i);
		  $mcol = $Block.'RW'.$index.$Col;
		  $Data = $surveys->lists($mcol);
		  $Month [] = $Data->sum();					
				}

		return ($Month);

	}


		protected static function u5RegisterN($Year1){
		//$Year1 = 3;

    $Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('name')->toArray());
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
		
		$Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID')->toArray());
		
		$array = array ();
		for ($i=$Year1; $i > $Year1-3 ; $i--) { 

			$array [$i] = self::u5RegisterNVal($Years[$i].$Row);
		//	echo $Years[$i].' '.$i.'<br>';

		}

		return($array);
	}
	protected static function u5RegisterNVal($cl){

		global $surveys;

		$Data = $surveys->lists('Data');
		$columns = Column_set::where('column_setID','Like',$cl.'%')->get()->lists('column_setID')->toArray();
		
		return $Data->sum(function ($assessment) use ($columns){
		$assessment = collect($assessment);
		$filtered = $assessment->only($columns);
		return 	$filtered->values()->sum();
		
			});


		}



	protected static function annualtrendsN($Year2){

		$Block = array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID')->toArray())[$Year2];

		//print_r ($Years[3]);
		$Array [] = array('Annual ORT Treatment Trends','Total Number of Documented Cases');

		for ($i=2; $i <14 ; $i++) { 
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
				
	
		  $index = 13;
		  $mcol = $Block.'RW'.$index.$Col;
		  $Data = $surveys->lists($mcol);
		  $Month [] = $Data->sum();					
				

		return ($Month);

}
	

	protected static function types(){
global $surveys;

		 $Data = $surveys->lists('Facility_ID');
	 
	 $Facilities = Facilities::whereIn('FacilityCode',$Data)
									->select('FacilityID','Type')
									->with('ftypes')
									->get()
									->lists('ftypes');
									// return
	$Types = $Facilities->groupby('FacilityGroup');

	foreach ($Types as $Group=>$Type) {

		$array [] = [$Group, count($Type)];
		
	}

if(!isset($array))$array [] = ['No data',0];
		
 return $array;
	
			}




protected static function practicing(){

				global $surveys;
				$recset = $surveys->lists('Data');
				$count =  count($surveys);
				$Data1 = count($recset->where('IMCIV1SEC6BLK3RW01COL01','1'));
				$Data2 = count($recset->where('IMCIV1SEC6BLK3RW01COL01','2'));
				$Data3 = count($recset->where('IMCIV1SEC6BLK3RW01COL01','3'));
				$Data4 = count($recset->where('IMCIV1SEC6BLK3RW01COL01','4'));				
				return [

					['Assessment Outcome','Yes','No'],
					['Fully Practicing IMCI',$Data1,$count-$Data1],
					['Practicing IMCI with gaps',$Data2,$count-$Data2],
					['Not Practicing IMC',$Data3,$count-$Data3],
					['No Information Provided',$Data4,$count-$Data4]

					];

				}



	protected static function ownership(){
global $surveys;

		 $Data = $surveys->lists('Facility_ID');
	 
	 $Facilities = Facilities::whereIn('FacilityCode',$Data)
									->select('FacilityID','Owner')
									->with('fowner')
									->get()
									->lists('fowner');
									// return
	$Owners = $Facilities->groupby('Group');

	foreach ($Owners as $Group=>$Owner) {

		$array [] = [$Group, count($Owner)];
		
	}

if(!isset($array))$array [] = ['No data',0];
		
 return $array;
}

protected static function staff_trained(){
global $surveys;
		$Data = $surveys->lists('Data');

		$Array [] = ['Staff Trained','Doctors','Nurses','R.C.O.s'];
	$Array []=['IMCI',$Data->sum('CHV2SEC1BLK1RW02COL04'),$Data->sum('CHV2SEC1BLK1RW03COL04'),$Data->sum('CHV2SEC1BLK1RW03COL04')];
$Array []=['ICCM',$Data->sum('CHV2SEC1BLK1RW02COL05'),$Data->sum('CHV2SEC1BLK1RW03COL05'),$Data->sum('CHV2SEC1BLK1RW03COL05')];
$Array []=['Enhanced Diarrhoea Management',$Data->sum('CHV2SEC1BLK1RW02COL06'),$Data->sum('CHV2SEC1BLK1RW03COL06'),$Data->sum('CHV2SEC1BLK1RW03COL06')];
$Array []=['Diarrhoea and Pneumonia CMEs for U5s',$Data->sum('CHV2SEC1BLK1RW02COL07'),$Data->sum('CHV2SEC1BLK1RW03COL07'),$Data->sum('CHV2SEC1BLK1RW03COL07')];
$Array []=['EID sample collection training',$Data->sum('CHV2SEC1BLK1RW02COL08'),$Data->sum('CHV2SEC1BLK1RW03COL08'),$Data->sum('CHV2SEC1BLK1RW03COL08')];
$Array []=['Staff Still Working in Child Health Unit',$Data->sum('CHV2SEC1BLK1RW02COL09'),$Data->sum('CHV2SEC1BLK1RW03COL09'),$Data->sum('CHV2SEC1BLK1RW03COL09')];



return($Array);

		
	
	

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

$DataD = $DataD->sum('Data');

	$DataN = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'MNHV2SEC4BLK1RW04'.$col);
}])->lists('y');

$DataN = $DataN->sum('Data');

	$DataR = $recset->load(['y' => function($query) use($col)
{
	 
    $query->where('ColumnSetID', '=', 'MNHV2SEC4BLK1RW05'.$col);
}])->lists('y');

	$DataR = $DataR->sum('Data');


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

$DataD = $DataD->sum('Data');

	$DataN = $recset->load(['y' => function($query) use($col)
{
	
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK1RW03'.$col);
}])->lists('y');

$DataN = $DataN->sum('Data');

	$DataR = $recset->load(['y' => function($query) use($col)
{
	 
    $query->where('ColumnSetID', '=', 'CHV2SEC1BLK1RW04'.$col);
}])->lists('y');

	$DataR = $DataR->sum('Data');


	return  array($DataD,$DataN,$DataR);
}


	protected static function opdgen(){
		global $surveys;

    $Data = $surveys->lists('Data')->lists('CHV2SEC1BLK2RW01COL02')->collapse()->toArray();
	$x = array_count_values($Data);

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

	$recset = $surveys->lists('Data');

	$Data = $recset->lists('CHV2SEC8BLK1RW02COL02');
	$TCU = count($Data);

	$Data = $recset->lists('CHV2SEC8BLK1RW03COL02')->toArray();	
		
	$Data = array_count_values($Data);

	 if(isset($Data['0'])) $count1 = $Data['0']; else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = $Data['00']; else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = $Data['000']; else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = $Data['0000']; else $count4 = 0; 
	 
	$TCUnt =$count1 + $count2 + $count3 +$count4;
	$TCUt = $TCU-$TCUnt;


	$Data = $recset->lists('CHV2SEC8BLK1RW06COL02');

	$Data = array_count_values($Data->toArray());

	 if(isset($Data['0'])) $count1 = $Data['0']; else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = $Data['00']; else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = $Data['000']; else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = $Data['0000']; else $count4 = 0; 
	 
	$CHEWSnt =$count1 + $count2 + $count3 +$count4;
	
		$CHEWSt = $TCU-$CHEWSnt;
	

	$Data = $recset->lists('CHV2SEC8BLK1RW08COL02');

	$Data = array_count_values($Data->toArray());

	 if(isset($Data['0'])) $count1 = $Data['0']; else $count1 = 0; 
	 if(isset($Data['00'])) $count2 = $Data['00']; else $count2 = 0; 
	 if(isset($Data['000'])) $count3 = $Data['000']; else $count3 = 0; 
	 if(isset($Data['0000'])) $count4 = $Data['0000']; else $count4 = 0; 
	 
	$CHVnt =$count1 + $count2 + $count3 +$count4;

	$CHVt = $TCU-$CHVnt;

		$Array [] = array ('Community Strategy','Trained (>0)','Not Trained (0)');
		$Array [] = array ('Community Units',$TCUt,$TCUnt);
		$Array [] = array ('CHEWS',$CHEWSt,$CHEWSnt);
		$Array [] = array ('CHVs',$CHVt,$CHVnt);

		return ( $Array);



	}


	protected static function ortloc(){
		global $surveys;

		$recset = $surveys->lists('Data');

	 $Data = $recset->lists('CHV2SEC5BLK1RW04COL02');
	 $all =count($Data);
	
	$x = array_count_values($Data->collapse()->toArray());
	
	if (!(isset($x["2"]))) {$x[2]=0;}
	$MCH = $x["2"];
	if (!(isset($x["3"]))) {$x[3]=0;}
	$U5_Clinic = $x["3"];
	if (!(isset($x["1"]))) {$x[1]=0;}
	$OPD = $x["1"];
	if (!(isset($x["4"]))) {$x[4]=0;}
	$Ward = $x["4"];
	$Other = $all - $MCH -$U5_Clinic - $OPD -$Ward;

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
			$recset = $surveys->lists('Data');
			$Data = $recset->lists('MNHV2SEC1BLK1RW03COL02')->collapse()->toArray();	

			$x = array_count_values(array_filter($Data));

			$others = 0;
			foreach ($x as $key => $value) {
				if($key !== "1" && $key !== "2" && $key !== "3" && $key !== "4" && $key !== "5")
					$others += $value;

			}
				isset($x["1"]) ?: $x["1"]=0;
				isset($x["2"]) ?: $x["2"]=0;
				isset($x["3"]) ?: $x["3"]=0;
				isset($x["4"]) ?: $x["4"]=0;
				isset($x["5"]) ?: $x["5"]=0;

				$Array [] = array('Inadequate skill',$x["1"]);
				$Array [] = array('Inadequate staff',$x["2"]);
				$Array [] = array('Inadequate infrastructure',$x["3"]);
				$Array [] = array('Inadequate Equipment',$x["4"]);
				$Array [] = array('Inadequate Commodities and Suppliers',$x["5"]);
				$Array [] = array('Others',$others);

				return $Array;
		}

		protected static function bedcapacity(){
			global $surveys;

			$array [] = array('Bed Capacity','New Born','Maternal','Total');
			
			 foreach ($surveys as $survey) {

		  	$recset [] =[
		  	"Assessment_ID" => $survey['Assessment_ID'],
		 	"Assessment_Term"=> $survey['Assessment_Term'],
		 	"Data"=>$survey['Data'],
		 	"Date"=> $survey['Date'],
		 	"Facility_ID"=> $survey['Facility_ID'],
		 	"PartID"=> $survey['PartID'],
		 	"Status"=> $survey['Status'],
		 	"Survey"=> $survey['Survey'],
		 	"UserId"=> $survey['UserId'],
		 	"_id"=> $survey['_id'],
		 	"Type"=> Facilities::Type($survey['Facility_ID'])
		 	];
		  	
		  }	 	 

		 $Rec = collect($recset)->groupby('Type');
		 foreach ($Rec as $v) {

      			$type = $v[0]['Type'];
      			$Data = collect($v)->lists('Data')->lists('MNHV2SEC1BLK2RW06COL02');      			
      			$Data = $v->lists('Data')->lists('MNHV2SEC1BLK2RW07COL02');
      			$Maternity = $Data->sum();
      			$Data = $v->lists('Data')->lists('MNHV2SEC1BLK2RW08COL02');
      			$NewBorn = $Data->sum();
      			$Total = $NewBorn + $Maternity;
      			$array[]=array($type,$NewBorn,$Maternity,$Total);
      		}
      		return $array;
      	}

	protected static function skillbirth(){

		global $surveys;

		$array [] = array('Skilled birth attendants','0','1-5','6-10','>10');

		

		  foreach ($surveys as $survey) {

		  	$recset [] =[
		  	"Assessment_ID" => $survey['Assessment_ID'],
		 	"Assessment_Term"=> $survey['Assessment_Term'],
		 	"Data"=>$survey['Data'],
		 	"Date"=> $survey['Date'],
		 	"Facility_ID"=> $survey['Facility_ID'],
		 	"PartID"=> $survey['PartID'],
		 	"Status"=> $survey['Status'],
		 	"Survey"=> $survey['Survey'],
		 	"UserId"=> $survey['UserId'],
		 	"_id"=> $survey['_id'],
		 	"Type"=> Facilities::Type($survey['Facility_ID'])
		 	];
		  	
		  }	 	 

		 $Rec = collect($recset)->groupby('Type');
		 foreach ($Rec as $v) {
		 	$type = $v[0]['Type'];
		 	$Data = $v->lists('Data')->lists('MNHV2SEC1BLK2RW03COL02')->all();
		 	$Data = array_count_values($Data);
      		$keys = array_keys($Data);
      		$count0 = 0;
      		$count5 = 0;
      		$countBeyond = 0;
      		$count10 = 0;

      			foreach ($keys as $key ) {
			      				if ($key > 0 && $key < 6  && $key!= "") {
			      					$count5 += $Data[$key];
			      				}
			      				elseif ($key >= 6 && $key<=10 && $key!="") {
			      					$count10 += $Data[$key];
			      				}
			      				elseif($key >10 && $key!=""){
			      					$countBeyond += $Data[$key];
			      				}
			      				else{
				      				if(isset($Data[0]))
				      					$count0 = $Data[0];
				      				else $count0 = 0;
				      				}
				      			}
				$array [] = array($type,$count0,$count5,$count10,$countBeyond);
			}
			return $array;
		}

		protected static function kangaroo2($col,$headings){

		global $surveys;

		 $array [] = $headings;

		 // $recset;

		  foreach ($surveys as $survey) {

		  	$recset [] =[
		  	"Assessment_ID" => $survey['Assessment_ID'],
		 	"Assessment_Term"=> $survey['Assessment_Term'],
		 	"Data"=>$survey['Data'],
		 	"Date"=> $survey['Date'],
		 	"Facility_ID"=> $survey['Facility_ID'],
		 	"PartID"=> $survey['PartID'],
		 	"Status"=> $survey['Status'],
		 	"Survey"=> $survey['Survey'],
		 	"UserId"=> $survey['UserId'],
		 	"_id"=> $survey['_id'],
		 	"Type"=> Facilities::Type($survey['Facility_ID'])
		 	];
		  	
		  }	 	 

		 $Rec = collect($recset)->groupby('Type');
      	
		
      		foreach ($Rec as $type => $assessment) {

      		

		 $Data = $assessment->lists('Data')->where('MNHV2SEC2BLK6RW03COL02','1');
		 $Data = $Data->groupby($col);
		
		 isset($Data["1"]) ?: $Data["1"] = [];
		  isset($Data["2"]) ?: $Data["2"] = [];
		   isset($Data["-51"]) ?: $Data["-51"] = [];
	
		 $array [] = array($type,count($Data["1"]),count($Data["2"]),count($Data["-51"]));

	}


	return $array;



	}

	protected static function FacilityTypes2Stack($col,$headings){

		global $surveys;

		 $array [] = $headings;

		 // $recset;

		  foreach ($surveys as $survey) {

		  	$recset [] =[
		  	"Assessment_ID" => $survey['Assessment_ID'],
		 	"Assessment_Term"=> $survey['Assessment_Term'],
		 	"Data"=>$survey['Data'],
		 	"Date"=> $survey['Date'],
		 	"Facility_ID"=> $survey['Facility_ID'],
		 	"PartID"=> $survey['PartID'],
		 	"Status"=> $survey['Status'],
		 	"Survey"=> $survey['Survey'],
		 	"UserId"=> $survey['UserId'],
		 	"_id"=> $survey['_id'],
		 	"Type"=> Facilities::Type($survey['Facility_ID'])
		 	];
		  	
		  }	 	 

		 $Rec = collect($recset)->groupby('Type');
      	
		
      		foreach ($Rec as $type => $assessment) {

      		

		 $Data = $assessment->lists('Data');

		 $Data = $Data->groupby($col);
		 isset($Data["1"]) ?: $Data["1"] = [];
		  isset($Data["2"]) ?: $Data["2"] = [];
		   isset($Data["-51"]) ?: $Data["-51"] = [];
	
		 $array [] = array($type,count($Data["1"]),count($Data["2"]),count($Data["-51"]));

	}


	return $array;



	}


	protected static function MNHPies($slices,$col){



		global $surveys;
		 $recset = $surveys->lists('Data');

		$Data = $recset->lists($col);

	 $x =  array_count_values(array_filter($Data->toArray()));

	 $otherval = count($slices)-1;
	 $noinfoval = count($slices);



	
	foreach ($x as $key => $value) {

		if (is_numeric($key)) {
			$key = intval($key);
			if(!isset($vl[$key])) $vl[$key] = 0;
			$vl[$key] += $value;   			
			}
			elseif ($key=="-51") {
			if(!isset($vl[$noinfoval])) $vl[$noinfoval] = 0;
				$vl[$noinfoval] += $value; 
				
			}
			else{

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


	protected static function trained($county){

	
		 

		 $Participants = Participants::County($county);


		 $Types = $Participants->groupby('FacilityType');
		 
		$Array [] = array('Total Number of HCWS Trained and Assessed','Trained & Assessed','Trained & Not Assessed');

		 foreach ($Types as $Type => $Workers) {
		 	$Workers= collect($Workers);
			$Array [] = [$Type,0,0];
		 	//$Array [] = [$Type,count($Workers->where('Status','Assessed')),count($Workers->where('Status','Not Assessed'))];

		 }

		 return	$Array;		



}
		
	protected static function sunit($surveys){

	// global $surveys;
		 $recset = $surveys;

	$col = 'IMCIV1SEC1BLK5RW1COL02';

	return $col;
}

}
