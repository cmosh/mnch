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
      		
      		$result = ($redis->get('laravel:'.$key));

      	}
      	
      	$result = json_decode($result);

      $result = collect($result)->toArray();
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}


	public static function forever($key,$closure){


		$redis = LRedis::connection();

		if($redis->exists('laravel:'.$key)){
			$result = ($redis->get('laravel:'.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx('laravel:'.$key, $result);
      		
      		$result = ($redis->get('laravel:'.$key));

      	}
      	
      	$result = json_decode($result);

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}

	public static function foreverreplacing($key,$closure){


		$redis = LRedis::connection();

	
			
      		$result = json_encode($closure());

      		
      		$redis->delete('laravel:'.$key);

      		$redis->setnx('laravel:'.$key, $result);
      		
      		$result = ($redis->get('laravel:'.$key));

      	
      	
      	$result = json_decode($result);

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}

	public static function foreverjson($key,$closure){



		$redis = LRedis::connection();

		if($redis->exists('laravel:'.$key)){
			$result2 = ($redis->get('laravel:'.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx('laravel:'.$key, $result);
      		
      		$result2 = ($redis->get('laravel:'.$key));

      	}
      	
      

      // $result = ($result);
      	return $result2;

	}

	public static function forevercollection($key,$closure){



		$redis = LRedis::connection();

		if($redis->exists('laravel:'.$key)){
			$result2 = ($redis->get('laravel:'.$key));
		}else{
		
      		$result = json_encode($closure());

      		$redis->setnx('laravel:'.$key, $result);
      		
      		$result2 = ($redis->get('laravel:'.$key));

      	}
      	
      

      // $result = ($result);
      	return collect(json_decode($result2));

	}


	public static function foreveryoung($key,$closure){


		$redis = LRedis::connection();

		if($redis->exists('laravel:'.$key)){

			$redis->setTimeout('laravel:'.$key, 300);
			$result = ($redis->get('laravel:'.$key));


		}else{
		
      		$result = ($closure());

      		$redis->set('laravel:'.$key, $result,300);
      		
      		$result = ($redis->get('laravel:'.$key));

      	}      	
      

      // $result = ($result);
      	return $result;
      	// return (collect(json_decode($x))->toArray());
	}


	public static function areyouyoung($key){


		$redis = LRedis::connection();

		return $redis->exists('laravel:'.$key);
   
	}


	public static function murdersession($key){
		$redis = LRedis::connection();

			if($redis->exists('laravel:'.$key)){

			$redis->setTimeout('laravel:'.$key,10);

	}

		}

}
