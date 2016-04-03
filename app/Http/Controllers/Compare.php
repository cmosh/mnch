<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Input;
use Cache;
use Excel;

  
class Compare extends Controller {


   

public function chv2(){/*


     if(Request::ajax()) {

     
      $data = Input::all();
      $county = $data['county'];
      $fi = $data['fi'];
      $yr = $data['yr'];
      $term = $data['term'];

    
     if($county =='All'){
        $sdata = Cache::remember('CHV2SubSurvey'.$county.$term,180,function() use ($term){
               return CHSubSurvey::where('Assessment_Term','Like',$term)->get();
       });  

     }
       else{

          $sdata = Cache::remember('CHV2SubSurvey'.$county.$term,180,function() use ($county,$term){
               return CHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$term)->get();
       });  

       }

    

       echo json_encode(analyse::getindividual($fi,$sdata,$county,$yr,$term));
  }

  die;*/

  }


  public function mnhv2(){/*

     if(Request::ajax()) {

     
      $data = Input::all();
      $county = $data['county'];
      $fi = $data['fi'];
      $yr = $data['yr'];
      $term = $data['term'];

    
     if($county =='All'){
        $sdata = Cache::remember('MNHV2SubSurvey'.$county.$term,180,function() use ($term){
               return MNHVSubSurvey::where('Assessment_Term','Like',$term)->get();
       });  

     }
       else{

          $sdata = Cache::remember('MNHV2SubSurvey'.$county.$term,180,function() use ($county,$term){
               return MNHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$term)->get();
       });  

       }

    

       echo json_encode(analyse::getindividual($fi,$sdata,$county,$yr,$term));
  }

  die;

  }*/


}