<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Facilities;
use App\Models\subcounty;
use App\Models\Assessments;
use App\Models\Survey;
use App\Helpers\Map;
use App\Helpers\County;
use App\Helpers\Session;
use App\Models\Participants;
use App\Models\counties;
use App\Models\users;
use App\Helpers\Analysis_Helper;
use App\Models\Survey_temp;
// use App\Models\analysisfunctions;
use Carbon\Carbon;
use Cache;
use Request;
use Telegram;

class testcontroller extends Controller
{

		public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	

    	public function index(){

      return Assessments::Monitor(['Survey'=>'IMCI']);  
    	}




    	public function variable($variable,$variable2){
        Cache::setPrefix("G");
         config(['cache.prefix' => $variable]);   
         Cache::put($variable2,'test',1); 

         return Cache::get($variable2);

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
