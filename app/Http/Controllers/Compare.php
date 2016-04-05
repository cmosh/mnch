<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Analyse;
use App\Models\Facilities;
use Request;
use Input;
use Cache;
use Excel;

  
class Compare extends Controller {


   

public function chv2(){


     if(Request::ajax()) {

     
      $data = Input::all();
      $county = $data['county'];
      $fi = $data['fi'];
      $yr = $data['yr'];
      $Term = $data['term'];



      if ($county == 'All' ) {
        
        $sdata = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($Term){
                $temp = Facilities::SubmittedAssessments('CH', $Term)->toArray();
                return collect($temp);
        });


      }

      else{
        $sdata = Cache::remember('CHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
                $temp = Facilities::SubmittedAssessments('CH',$Term,$county)->toArray();
                return collect($temp);
        });
      
      }

      echo json_encode(Analyse::getindividual($fi,$sdata,$county,$yr,$Term));
  }

  die;

  }


  public function mnhv2(){

     if(Request::ajax()) {

     
      $data = Input::all();
      $county = $data['county'];
      $fi = $data['fi'];
      $yr = $data['yr'];
      $Term = $data['term'];

    
     if($county =='All'){

        $sdata = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($Term){
                $temp = Facilities::SubmittedAssessments('MNH', $Term)->toArray();
                return collect($temp);
        });
     

     }
       else{

        $sdata = Cache::remember('MNHV2SubSurvey'.$county.$Term,180,function() use($county,$Term){
                $temp = Facilities::SubmittedAssessments('MNH',$Term,$county)->toArray();
                return collect($temp);
        });          

       }

    

       echo json_encode(analyse::getindividual($fi,$sdata,$county,$yr,$Term));
  }

  die;

  }

}