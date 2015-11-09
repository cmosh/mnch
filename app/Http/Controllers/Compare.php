<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\CHSubSurvey;
use App\Tables\analyse;
use App\Tables\MNHSubSurvey;
use Request;
use Input;
use Cache;

  
class Compare extends Controller {


     public function getStuff($key)
    {
        $value = Cache::get($key);
        return $value;
    }

public function postChv2(){

		 if(Request::ajax()) {
      $data = Input::all();
      $county = $data['county'];
      $fi = $data['fi'];
      $yr = $data['yr'];
      $term = $data['term'];

     
     if($county =='All'){
     	 $sdata = Cache::remember('CHV2SubSurvey'.$county.$term,180,function()use($term){
      					return CHSubSurvey::where('Assessment_Term','Like',$term)->get();
      	});  

     }
     	else{

     		 $sdata = Cache::remember('CHV2SubSurvey'.$county.$term,180,function() use ($county,$term){
      					return CHSubSurvey::where('County','Like',$county)->where('Assessment_Term','Like',$term)->get();
      	});  

     	}

     	

       echo json_encode(analyse::getindividual($fi,$sdata,$county,$yr));
  }

  die;

	}

}