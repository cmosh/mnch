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
use App\Tables\MNHSubSurvey;
use Illuminate\Database\Eloquent\Collection;
 use App\Http\Controllers\ArrayRedis as Rache;
use Illuminate\Contracts\Foundation\Application As App;
use Request;
use Input;
use Cache;
use Excel;

  
class Compare extends Controller {


   

public function postChv2(){

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

  die;

  }


  public function postMnhv2(){

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

  }


}