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

    		$test = assessments::Participants(array('Survey'=>'IMCIV1'))->get();

         // return   $Assessments = $this->Map->transform($test,'AssessmentList');
         return $test2 =  $this->Map->ParticipantsFilter($test);

        

    	}




    	public function variable($variable,$variable2){

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
