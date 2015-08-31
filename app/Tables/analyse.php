<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Cache;
use LRedis;

global  $col;
global  $ycol;
global $mcol;
$surveys;

class analyse extends Controller {
 
  

	private  static function count_YN($cl){
 global $col,$surveys;
 $col = $cl;

 $recset = $surveys;

		$Data = $recset->load(['x' => function($query)
{
	 global $col;
    $query->where('ColumnSetID', '=', $col);
}]);


foreach ($Data as $obj ) {
	if(isset($obj->x[0]->Data))
	$objs[] = $obj->x[0]->Data;

}
$big0 = array_count_values($objs);

if(!(isset($big0[1]))) $big0[1]=0;
if(!(isset($big0[2]))) $big0[2]=0;

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
			
			$array [] = array (
			 ( trim(self::getLabel($trim,$Block.sprintf('%02d',$i).$LabelCol),$extratrim)), 
			 	$o[1],
			 	$o[2]);
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

    $Years =  array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name'));
    $array [] = array('Diarrhoea Cases',$Years[$Year1],$Years[$Year1-1],$Years[$Year1-2]);
		for ($i=2; $i < 9; $i++) {

			$index =  sprintf('%02d',$i);
			$Label1 =  (self::getLabel(0,'CHV2SEC3BLK99DRW'.$index.'COL01'));
			$Label = $Label1;
			if ( strstr($Label1, '(Example', true)) $Label = strstr($Label1, '(Example', true);

			$Row = self::u5RegisterRow('RW'.$index,$Year1);
				
			$array [] = array (
			  $Label, 
			 	$Row[$Year1],
			 	$Row[$Year1-1],
			 	$Row[$Year1-2]);
		

		}

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
		global $ycol,$surveys;
 $ycol = $cl;
		//print_r ($Years);
		$recset = $surveys;
		$Data = $recset->load(['x' => function($query)
{		global $ycol;
	 
    $query->where('ColumnSetID', 'Like',$ycol.'COL%' );
}]);
		
		$total = 0;
		foreach ($Data as $obj ) {

		
	$total += ( $obj->x->sum('Data'));
	

}

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
		
	//Antibiotics


		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'NotAvailable' );
		
		$Antibiotics = Cache::remember('Antibiotics'.$county,180,function() use($AntibioticsH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
      	});				
	//Malaria
		$MalariaH = array('Malaria  Availability', 'Available', 'NotAvailable' );

		$Malaria = Cache::remember('Malaria'.$county,180,function() use($MalariaH){
      					return 	  self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/');
      	});
		
	//ortf
		$ortfExclude = array(5);
		$ortfH = array('Ort Functionality', 'Yes', 'No' );

		$ortf = Cache::remember('ortf'.$county,180,function() use($ortfExclude,$ortfH){
      					return 	 self::twoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,4,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
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
		 
		$u5Register = Cache::remember('u5Register'.$county,180,function() use($Year1){
      					return self::u5Register($Year1);
      	});

	//u5RegisterN
		
		$u5RegisterN = Cache::remember('u5RegisterN'.$county,180,function() use($Year3){
      					return self::u5RegisterN($Year3);
      	});
	//annualtrends
		$annualtrends = Cache::remember('annualtrends'.$county,180,function() use($Year2){
      					return self::annualtrends($Year2);
      	});

		
	//annualtrends
	
		$annualtrendsN = Cache::remember('annualtrendsN'.$county,180,function() use($Year4){
      					return self::annualtrendsN($Year4);
      	});
	//Json Making

		$JsonArray = json_encode(array(
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
			'annualtrendsN'=> $annualtrendsN

			));




		return $JsonArray;
	}

	//public static function 

	public static function annualtrends($Year2){

		$Block = array_reverse(Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('blockID'))[$Year2];

		//print_r ($Years[3]);
		$Array [] = array('Treatment Trends','Treatment with ORS+ Zinc','Treatment with ORS','Treatment with Zinc','Treatment with Antibiotics','Treatment with others','No Treatment')
	;for ($i=2; $i <13 ; $i++) { 
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

			global $mcol,$surveys;

				$recset = $surveys;
				
				for ($i=3; $i <9 ; $i++) { 
					$index = sprintf('%02d',$i);
		  $mcol = $Block.'RW'.$index.$Col;



					$Data = $recset->load(['y' => function($query)
		{		global $mcol;
			 
		    $query->where('ColumnSetID', '=',$mcol );
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
		global $ycol,$surveys;
 $ycol = $cl;
		//print_r ($Years);
		$recset = $surveys;
		$Data = $recset->load(['x' => function($query)
{		global $ycol;
	 
    $query->where('ColumnSetID', 'Like',$ycol.'COL%' );
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
	;for ($i=2; $i <13 ; $i++) { 
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

			global $mcol,$surveys;

				$recset = $surveys;
				
				
					$index = 13;
		  $mcol = $Block.'RW'.$index.$Col;



					$Data = $recset->load(['y' => function($query)
		{		global $mcol;
			 
		    $query->where('ColumnSetID', '=',$mcol );
		}])->lists('y');

				$Data = collect($Data);
				$Month = ($Data->sum('Data'));
					
				
				return ($Month);


}
	














	
	
}
