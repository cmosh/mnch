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
use App\Tables\Participants;

class testcontroller extends Controller
{

		public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	

    	public function index(){

    		 // return Participants::with('assessment')->get();
    		 $test1 = Participants::view()->get();
    		$test = $this->Map->transform($test1,'ParticipantsList');
    		return $test;

    	}




    	public function variable($variable,$variable2){

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
