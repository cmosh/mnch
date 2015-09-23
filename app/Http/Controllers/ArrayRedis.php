<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use LRedis;

class ArrayRedis extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

  /* Functions for redis operations starts here   */ 

public static function remember($key,$minutes,$closure){


		$redis = LRedis::connection();

		if($redis->exists('laravel:'.$key)){
			$result = ($redis->get('laravel:'.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->set('laravel:'.$key, $result,$minutes*60);



      	}
      	
      	$result = json_decode($result);

      $result = collect($result)->toArray();
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}

}
