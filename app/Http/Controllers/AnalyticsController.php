<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\SubmittedCHCount;
use App\Tables\SubmittedCHCountie;
use App\Tables\SubmittedMNHCount;
use App\Tables\SubmittedMNHCountie;
use App\Tables\CHSubSurvey;

use App\Tables\Column_set;
use App\Tables\Survey;
use App\Tables\analyse;
use App\Tables\Map;
use App\Tables\SurveysDone;
use Maatwebsite\Excel\Excel;

use App\Tables\MNHSubSurvey;
use Illuminate\Database\Eloquent\Collection;
 use App\Http\Controllers\ArrayRedis as Rache;
use Illuminate\Contracts\Foundation\Application As App;
use Request;
use Input;
use Cache;


	
class AnalyticsController extends Controller {




	public function chajax(){

		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      $Year_1 = $data['Year1'];
       $Year_2 = $data['Year2'];
       $Year_3 = $data['Year3'];
        $Year_4 = $data['Year4'];
        $Term = $data['Term'];
     
		
      		      
      if ($county == 'All' ) {
      	
      	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($Term){
      					return 	CHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});


      }

      else{
       	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	CHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      
      }
     

    $chanalytics  = analyse::chanalytics($CHSubSurvey,$Year_1,$Year_2,$Year_3,$Year_4,$county,$Term);
		
$Map = (Cache::remember('MapCH',180,function() {
      					return 	Map::where('Survey','=','Child Health')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$chanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}
}



public function mnhajax(){


		
		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];     
        $Term = $data['Term'];


 		if ($county == 'All') {
      	
      	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($Term){
      					return 	MNHSubSurvey::where('Assessment_Term','Like',$Term)->get();
      	});

      }

     else  {
       	$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
      					return 	MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$Term)->get();
      	});
      

}
    
    $mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,$county,$Term);
		
$Map = (Cache::remember('MapMNH',180,function() {
      					return 	Map::where('Survey','=','Maternal Neonatal Healthcare')->get()->keyBy('Concat')->toArray();
      	}));

      $Array =  array('analytics' =>$mnhanalytics ,'map' =>$Map );		

    echo json_encode($Array);

      die;



	}

}



	public function ch()
	{
				
	$CHSubSurvey = Cache::remember('CHV2SubSurvey'.'All',180,function(){
      					return 	CHSubSurvey::all();
      	});


      	// $chanalytics  = analyse::chanalytics($CHSubSurvey,3,3,3,3,'All',$Term);
		
   
			
		$SubmittedCHCount = Cache::remember('SubmittedCHV2Count',180,function(){
							return SubmittedCHCount::first();
							 	});  


		$SubmittedCHCounties = Cache::remember('SubmittedCHV2Counties',180,function(){
							return SubmittedCHCountie::get();
							 	});  



		$YearsBlock =Cache::remember('CHV2YearsAllYears',180,function() use ($CHSubSurvey){

			$Years = analyse::sec3Years($CHSubSurvey);
		$YearsCount = count($Years)-1;
		$Years = array_reverse($Years);
		$AllYears = $Years;
		unset($Years[0]);
		unset($Years[1]);
		$Years = array_reverse($Years, true);
		$AllYears = array_reverse($AllYears, true);
		return array($Years,$AllYears,$YearsCount);


		});

		$Years=$YearsBlock[0];
		$AllYears=$YearsBlock[1];
		$YearsCount=$YearsBlock[2];
		
		$SurveysDone =	Cache::remember('SurveysDoneCHV2',180,function(){
						 return SurveysDone::where('Name','=','Child Health')->get();
						});  
	

			return view('analytics.CH.index')
			->with('SubmittedCount',$SubmittedCHCount)
			->with('SubmittedCounties',$SubmittedCHCounties)
			->with('Years',$Years)
			->with('YearsCount',$YearsCount)
			->with('AllYears',$AllYears)
			->with('SurveysDone',$SurveysDone)
			->with('loc','Child Health Survey');


				
	}



	public function comparison($survey,$lambda,$chart,$yr='not'){

		

		if($survey=='CHV2')

		$SubmittedCounties = Cache::remember('SubmittedCHV2Counties',180,function(){
							return SubmittedCHCountie::get();
							 	});
		elseif($survey=='MNHV2')

		$SubmittedCounties = Cache::remember('SubmittedMNHV2Counties',180,function(){
							return SubmittedMNHCountie::get();
							 	});


		return view('analytics.comparison.index')->with('SubmittedCounties',$SubmittedCounties)
										   ->with('funct',$lambda)
										   ->with('chart',$chart)
										   ->with('yr',$yr)
										   ->with('sv',$survey);

	



}

	


	public function mnh()
	{
				
	
$MNHSubSurvey = Cache::remember('MNHV2SubSurvey'.'All',180,function(){
      					return MNHSubSurvey::all();
      	});     


		//	$mnhanalytics  = analyse::mnhanalytics($MNHSubSurvey,'All','Baseline');

		
		$SubmittedMNHCount = SubmittedMNHCount::first();
		$SubmittedMNHCounties = SubmittedMNHCountie::get();
	
		$SurveysDone = SurveysDone::where('Name','=','Maternal Neonatal Healthcare')->get();
	
	

			return view('analytics.MNH.index')
			->with('SubmittedCount',$SubmittedMNHCount)
			->with('SubmittedCounties',$SubmittedMNHCounties)
			
			->with('SurveysDone',$SurveysDone);

	}



		public function tester($key){

			 $value = Cache::get($key);

        return count($value);

		
	}


	public function blah(Excel $excel)
	{

		$f = CHSubSurvey::all();
	

	 $f->load(['x' => function($query) 
{
	
    $query->where('ColumnSetID', 'Like', 'CHV2SEC2BLK1%');
}]);

 $f->load('z');



			$excel->create('Guidelines', function($ex) use($f)  {

	    $ex->sheet('Sheet1', function($sheet) use($f){
	    	
	

	    		$sheet->row(1, array(
     'County',	'Subcounty'	,'MFL'	,'Facility Name ',
     'Level',	'Type',	'Owner'	,'Date of Assessment',
     'Assessment Type','Version','Assessment Term',
     '2012 IMCI Guidelines','ORT Guidelines','ICCM',
     'Paediatric Protocol 2010/3',	'Diarrhoea Management Job Aid',
     'IEC Materials',	'ART Guidelines',	'EID Algorithm 2009/12/14'	
	
     


			)
	    		
	    		);

	 

 	   $sheet->cells('A1:K1', function($cells) {

    // manipulate the range of cells
    $cells->setFontWeight('bold');
    $cells->setAlignment('center');
     $cells->setValignment('middle');
     

});


 
 	  


	    		
	    		$counter2=0;
	    		
				

	    		foreach ($f as $value) {


$arr=array();
	    				for($i=0;$i<8;$i++) {

 	   	
 	   	
 	   	if( $value->x[$i]->Data=='1')
 	   		{$arr[$i]='Yes';}
 	   	elseif($value->x[$i]->Data=='2')
 	   	{
 	   		$arr[$i]='No';
 	   	}
 	   	else
 	   	{
 	   		$arr[$i]='No Information';
 	   	}



 	   	# code...
 	   }
	
	    				$counter2++;
	    				
						$sheet->row($counter2+1, array(

		     			$value->z->County,$value->z->SubCounty,
						$value->z->FacilityCode,$value->z->FacilityName,
		     			'',$value->z->Type,$value->z->Owner,$value->Date,$value->Survey,substr($value->Survey,-1,1),$value->Assessment_Term,
		     			$arr[0],$arr[1],$arr[2],$arr[3],$arr[4],
		     			$arr[5],$arr[6],$arr[7]
		     			
						
						));
					
				}

				


	       

	    });







	})->download('xls');


	

}

	
	

}
