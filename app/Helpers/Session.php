<?php namespace App\Helpers;
use Carbon\Carbon;
use Cache;
// use Illuminate\Http\Request;
use Request;
class Session {

      public static function driver(){
            return Request::user();
            $Drivers = Config('cache_fallback.fallback_order');
            Cache::put('CheckCache','CheckCache',1);         
            foreach ($Drivers as $Driver) {
            if(Cache::store($Driver)->has('CheckCache')){
                  Cache::forget('CheckCache');
                 return $Driver;
            };
            }
      }

      public static function foreveryoung($key,$closure){
            $User = Request::User();
            $Roles = [0=>'countyuser',1=>'dataclerk',2=>'programuser',3=>'systemuser',4=>'Developer'];
            $expiresAt = Carbon::now()->addMinutes(5);
            $value  = $closure();
            $driver = self::driver();
            if($driver!=="file" && $driver!=="database" )  Cache::setPrefix('mnch_users');    
                        
            Cache::put($key, 
                                 ['Assessment'=>$key,
                                  'UserName'=>$User->name,
                                  'County'=>$User->County,
                                  'email'=>$User->email,
                                  'PhoneNumber'=>$User->PhoneNumber,
                                  'IDNumber'=>$User->IDNumber,
                                  'Role'=>$Roles[$User->role],
                                   'Survey'=>$value],
                                                      $expiresAt);

            return "I Exist!";
	}


	public static function areyouyoung($key){
            if($driver!=="file" && $driver!=="database" )  Cache::setPrefix('mnch_users');   
		return Cache::has($key);
   
	}


	public static function murdersession($key){
            if($driver!=="file" && $driver!=="database" )  Cache::setPrefix('mnch_users');   
            Cache::forget($key);

}     

      

}