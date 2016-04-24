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
	

    	public function index($test){
        return $test;
        
        substr("IMCIV1",0,2);
// return Facilities::SubmittedAssessmentsList('CH');

        // $format = 'Y-m-d';
// $date = date_create_from_format($format, '2016-04-21');
 // echo date_format($date, 'Y-m-d');
// return $date;
        $date = Carbon::createFromFormat('Y-m-d H', '2016-04-21 00');
       return Assessments::select('Date')->where('Date','=',$date)->get();

      return Assessments::all();

        return Cache::all();
        return config('cache.prefix');
       return Cache::tags(['Assessments']);

        return Session::foreveryoung();
        return Config('cache_fallback.fallback_order');
        $surveys = Survey::all();
        
      $surveys->load('sections.blocks.block_rows.column_sets.field_set.fields');
    
      foreach ($surveys as $survey ) {
         $Survey_temp  = new Survey_temp($survey->toArray());    
         $Survey_temp->save();
      }
     
        return;

            $filter = function(&$Data){
              $Data = collect($Data)->where('IMCIV1SEC2BLK1RW1COL02','1');
            };

            $surveys = Facilities::SubmittedIM();

            //    $x = Analysis_Helper::trained('All',$surveys);

            //    return $x;

        return  $x = Analysis_Helper::imciYN('IMCIV1SEC5BLK1RW',array(3,4,5,6,7),'COL02','COL04','Malnutrition',$surveys,$filter);


          // return $x;

           $x = Participants::County();

           $x->where('PartID',2)[0]['County'] = 'nshs';
           
           return $x;
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
