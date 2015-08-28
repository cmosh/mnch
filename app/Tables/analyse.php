<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
global  $col;


class analyse extends Controller {
 
  

	private  static function count_YN($recset, $cl){
 global $col;
 $col = $cl;
		$Data = $recset->load(['x' => function($query)
{
	 global $col;
    $query->where('ColumnSetID', '=', $col);
}]);


foreach ($Data as $obj ) {
	if(isset($obj->x[0]->Data))
	$objs[] = $obj->x[0]->Data;

}
return array_count_values($objs);


	}
private static function getLabel($trim,$col){

// trim($binary, "\x00..\x1F");
	$Label = substr( Column_set::where('column_setID','=',$col)->with('field_set.field')->get()[0]->field_set->field->Label,$trim);
	return $Label;


}

private static function makeCollection($Label){

			$collection = collection::make(['Label'=>'2012 IMCI guidelines'.'/'.'chart booklets','Yes'=>$RW02[1],'No'=>$RW02[2]]);
		return $collection;


}

	public static function gjavailability($surveys){

		$trim = 33;

		// $label = self::getLabel($trim,'CHV2SEC2BLK1RW02COL01');
		$array = array();

		for ($i=2; $i < 10; $i++) { 
			$o = self::count_YN($surveys,'CHV2SEC2BLK1RW'.sprintf('%02d',$i).'COL02');
			if(!(isset($o[1]))) $o[1]=0;
				if(!(isset($o[1]))) $o[2]=0;
			$array [] = array (
			 ( trim(self::getLabel($trim,'CHV2SEC2BLK1RW'.sprintf('%02d',$i).'COL01'),'/^ated/ ?')), 
			 	$o[1],
			 	$o[2]  );
		}
		//$collection = collection::make($array);
	

		// $RW02 = self::count_YN($surveys,'CHV2SEC2BLK1'RW02'COL02',1);


		

 return $array;



	}
	
	
}
