<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;
 use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use LRedis;

class ModelRedis extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

  /* Functions for redis operations starts here   */ 

public static function remember($key,$minutes,$closure){


		$redis = LRedis::connection();

		if($redis->exists($key)){
			$result = ($redis->get($key));
		}else{
			//$temp = ();
      		$result = $closure();
      		$result = (array) $result;
      		$result = json_encode($result);
      		$redis->set($key, ($result),$minutes*60);



      	}
      	 
      	 $result = json_decode($result);
      	 $result = (object) $result;

 //     $prefix =  str_replace(' ', '', "App\Tables\ ");
    
	// $model = '$results2 = '.$prefix.$key.'::first();';
	//  eval($model);
	// $results = collect(array_merge((array)$results2,$result));	


	//echo $model;
	// $results = eval($model);
	// print_r($results);
      //$result = collect($result)->toArray();
      	return ($result);
      	// return (collect(json_decode($x))->toArray());
	}

}
