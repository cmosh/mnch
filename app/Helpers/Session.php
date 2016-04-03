<?php namespace App\Helpers;
use Carbon\Carbon;
use Cache;

class Session {


      public static function foreveryoung($key,$closure){
            $expiresAt = Carbon::now()->addMinutes(5);
            $value  = $closure();
            Cache::put($key, $value, $expiresAt);
            return $value;
	}


	public static function areyouyoung($key){
           
		return Cache::has($key);
   
	}


	public static function murdersession($key){

            Cache::forget($key);

}

}