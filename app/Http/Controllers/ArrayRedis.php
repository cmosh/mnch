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


            $prefix = env('CACHE_PREFIX').':';
		$redis = LRedis::connection();

		if($redis->exists($prefix.$key)){
			$result = ($redis->get($prefix.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->set($prefix.$key, $result,$minutes*60);
      		
      		$result = ($redis->get($prefix.$key));

      	}
      	
      	$result = json_decode($result);

      $result = collect($result)->toArray();
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}


	public static function forever($key,$closure){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

		if($redis->exists($prefix.$key)){
			$result = ($redis->get($prefix.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx($prefix.$key, $result);
      		
      		$result = ($redis->get($prefix.$key));

      	}
      	
      	$result = json_decode($result);

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}

	public static function foreverreplacing($key,$closure){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

	
			
      		$result = json_encode($closure());

      		
      		$redis->delete($prefix.$key);

      		$redis->setnx($prefix.$key, $result);
      		
      		$result = ($redis->get($prefix.$key));

      	
      	
      	$result = json_decode($result);

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}

	public static function foreverjson($key,$closure){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

		if($redis->exists($prefix.$key)){
			$result2 = ($redis->get($prefix.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx($prefix.$key, $result);
      		
      		$result2 = ($redis->get($prefix.$key));

      	}
      	
      

      // $result = ($result);
      	return $result2;

	}

	public static function forevercollection($key,$closure){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

		if($redis->exists($prefix.$key)){
			$result2 = ($redis->get($prefix.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx($prefix.$key, $result);
      		
      		$result2 = ($redis->get($prefix.$key));

      	}
      	
      

      // $result = ($result);
      	return collect(json_decode($result2));

	}


	public static function foreveryoung($key,$closure){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

		if($redis->exists($prefix.$key)){

			$redis->setTimeout($prefix.$key, 300);
			$result = ($redis->get($prefix.$key));


		}else{
		
      		$result = ($closure());

      		$redis->set($prefix.$key, $result,300);
      		
      		$result = ($redis->get($prefix.$key));

      	}      	
      

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}


	public static function areyouyoung($key){

            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

		return $redis->exists($prefix.$key);
   
	}


	public static function murdersession($key){


            $prefix = env('CACHE_PREFIX', 'laravel').':';
		$redis = LRedis::connection();

			if($redis->exists($prefix.$key)){

			$redis->setTimeout($prefix.$key,10);

	}

		}

}
