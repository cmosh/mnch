<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\Facilities;
use App\Tables\subcounty;
use App\Tables\assessments;
use App\Helpers\Map;
use App\Helpers\County;
use App\Tables\Participants;
use App\Tables\counties;
use Carbon\Carbon;
class testcontroller extends Controller
{

		public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	

    	public function index(){

            // return assessments::where('created_at','>', Carbon::today())->get();
        return   $usermonitor=assessments::Monitor([ 'Survey'=> 'CH', 'County' => 'Baringo' ],true);
             


         

    	}




    	public function variable($variable,$variable2){

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
