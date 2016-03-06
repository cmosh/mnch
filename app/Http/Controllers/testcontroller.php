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

class testcontroller extends Controller
{

		public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	

    	public function index(){

//             >var user = db.users.findOne({"name":"Tom Benzamin"})
// >var dbRef = user.address
// >db[dbRef.$ref].findOne({"_id":(dbRef.$id)})

    	return	County::Submitted();

           // $test = Facilities::with('thecounty')->get()->take(2);
        // $test = counties::with('facilities')->get()->take(2);
            // return $test;
        

    	}




    	public function variable($variable,$variable2){

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
