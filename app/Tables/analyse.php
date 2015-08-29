<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

global  $col;
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
		$recset = $surveys;

	$Years = Block::where('blockID','Like','CHV2SEC3BLK%D')->lists('Name');
	return $Years;


	}
	public static function u5Register($surveys){
		

		$recset = $surveys;
		$Data = $recset->load(['x' => function($query)
{
	 
    $query->where('ColumnSetID', 'Like','CHV2SEC3BLK96DRW02COL%' );
}]);
		
		$total = 0;
		foreach ($Data as $obj ) {

		
	$total += ( $obj->x->sum('Data'));
	

}

	echo($total);
		
	}
	public static function chanalytics($data){
	//Feed in survey
		global $surveys;
		$surveys = $data;
	//Guidelines Availability
		$GuidelinesHeading = array('Guidelines Availability', 'Yes', 'No' );
		$Guidelines = self::twoOptionsFullStack( 'CHV2SEC2BLK1RW',$GuidelinesHeading,33,2,10,'COL01','COL02','/^ated/ ?');
	//Tools Availability
		$ToolsHeading = array('Tools Availability', 'Yes', 'No' );
		$Tools = self::twoOptionsFullStack( 'CHV2SEC2BLK2RW',$ToolsHeading,0,2,10,'COL01','COL02','/^/');
	//DTreatmentCommodities
		$DTreatmentCommoditiesExclude = array(11,12);
		$DTreatmentCommoditiesH = array('Diarhoea Treatment Availability', 'Available', 'NotAvailable' );
		$DTreatmentCommodities = self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$DTreatmentCommoditiesH,0,9,17,'COL01','COL03','/^/',$DTreatmentCommoditiesExclude);
	//Antibiotics
		$AntibioticsH = array('Antibiotics  Availability', 'Available', 'NotAvailable' );
		$Antibiotics = self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$AntibioticsH,0,5,9,'COL01','COL03','/^/');
	//Malaria
		$MalariaH = array('Malaria  Availability', 'Available', 'NotAvailable' );
		$Malaria = self::twoOptionsFullStack( 'CHV2SEC4BLK2RW',$MalariaH,0,2,5,'COL01','COL03','/^/');
	//ortf
		$ortfExclude = array(5);
		$ortfH = array('Ort Functionality', 'Yes', 'No' );
		$ortf = self::twoOptionsFullStack( 'CHV2SEC5BLK1RW',$ortfH,0,4,8,'COL01','COL02','/^(A)(B)/',$ortfExclude);
	//supplies
		$suppliesH = array('Supplies Availability', 'Available', 'Not Available' );
		$supplies = self::twoOptionsFullStack( 'CHV2SEC6BLK2RW',$suppliesH,0,2,9,'COL01','COL02','/^/');
	//resources
		$resourcesH = array('Resource Availability', 'Available', 'Not Available' );
		$resources = self::twoOptionsFullStack( 'CHV2SEC7BLK2RW',$resourcesH,0,2,6,'COL01','COL02','/^/');
	//u5Register

	//Json Making
		$JsonArray = json_encode(array(
			'Guidelines' =>$Guidelines, 
			'Tools' =>$Tools,
			'DTreatmentCommodities' => $DTreatmentCommodities,
			'Antibiotics' => $Antibiotics,
			'Malaria'=>$Malaria,
			'ortf'=>$ortf,
			'supplies' => $supplies,
			'resources'=> $resources

			));




		return $JsonArray;
	}
	
	
}
