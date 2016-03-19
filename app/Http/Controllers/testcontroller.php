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
use App\Tables\users;
use App\Tables\analysisfunctions;
use Carbon\Carbon;
use Cache;

class testcontroller extends Controller
{

		public function __construct()
	{
		$this->middleware('auth');
		$this->Map = new Map;
	}
	

    	public function index(){

            // return Facilities::whereIn('FacilityCode',[19224,19310,14180,17486,18393,14181])->get();
            

           $Data =  Facilities::SubmittedAssessments('MNH','Baseline');
         $NewBornCareHeadings = array('New Born Care','Yes','No','No information provided');

            return analysisfunctions::FacilityTypes2Stack($Data,'MNHV2SEC2BLK5RW03COL02',$NewBornCareHeadings);
           

    	}




    	public function variable($variable,$variable2){

    		$test =Facilities::SubCounties($variable,'%'.$variable2.'%')->get();

    		return $test;

    	}



    	


  


}
