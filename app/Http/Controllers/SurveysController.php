<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\Section;
use App\Models\Participants;
use App\Models\Contact;
use App\Models\Assessor;
use App\Models\Assessments;
use App\Models\Datarecord;
use App\Models\Facilities;
use App\Helpers\Builder;
use App\Helpers\Session;
use Request;
use Input;
use Cache;

class SurveysController extends Controller{
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    private static $theid = "0";
    private static $thesv = "0";
    
    public function __construct() {
        $this->middleware('auth');
    }
    
  

    public function session(){

               if(Request::ajax()) {

                   $array = Input::all();

                   $AssID = $array['AssID'];

                   $action = $array['action'];
                   if(isset($array['Survey']))  $Survey = $array['Survey'];


                   switch ($action) {
                       case 'check':

                            $bol = true;
                         $bol=  Session::areyouyoung($AssID);

                          echo $bol;
                        
                           break;

                         case 'set':

                            $bol=  Session::foreveryoung($AssID,function() use ($Survey){

                            return $Survey;

                                    });
                             echo $bol;

                           break;      
                       
                       default:
                        $bol = "error";
                         echo $bol;
                           break;
                   }

     


         
    }


    die;

}


       
    
     public function saveajax(){



         if(Request::ajax()) {



      $array = Input::all();
      $stype = array_shift($array);
      $AssID = array_shift($array);
      $UserId = array_shift($array);
     $fruit = array_pop($array);   


    $surveyyy = Assessments::where('Assessment_ID', '=', $AssID)->first();

    $sva = $surveyyy->Survey;
    $location = substr($sva, 0, 2);
        
      $Name = array_shift($array);
      $Designation = array_shift($array); 
      $Email  = array_shift($array);
      $Number = array_shift($array);

       if( !isset(Assessor::where('AssID','=',$AssID)->first()->AssID)) {
         $storeassessor = new Assessor;
         $storeassessor->Name = $Name;        
        $storeassessor->Designation = $Designation;        
        $storeassessor->Email = $Email;        
        $storeassessor->Number = $Number;        
        $storeassessor->AssID = $AssID;        
        $storeassessor->save();} 
        else{
            Assessor::createOrUpdate(
                array('Name' => $Name,
                 'Designation' => $Designation, 
                 'Email' => $Email, 
                 'Number' => $Number, 
                 'AssID' => $AssID), 
                array('AssID' => $AssID));  
  }


   if ($location == "MN") {$roop = 3;} else {$roop = 4;}
        
      

 if( !isset(Contact::where('AssID','=',$AssID)->first()->AssID)) {
    for ($x = 0; $x < $roop; $x++) {
            $ContactT = new Contact;
            $ContactT->Cadre = array_shift($array);
            $ContactT->Name = array_shift($array);
            $ContactT->Mobile = array_shift($array);
            $ContactT->Email = array_shift($array);
            $ContactT->AssID = $AssID;
            $ContactT->ContactID = $AssID . $ContactT->Cadre;
            $ContactT->save();
        }

  } else{
           
           for ($x = 0; $x < $roop; $x++) {
            $cadre = array_shift($array);
            Contact::createOrUpdate(array('Cadre' => $cadre, 'Name' => array_shift($array), 'Mobile' => array_shift($array), 'Email' => array_shift($array), 'AssID' => $AssID, 'ContactID' => $AssID . $cadre), array('ContactID' => $AssID . $cadre));
        }
        
  }
  
     $var = Cache::rememberForever('build_COLID_'.$sva,function() use ($AssID){

        return Builder::build($AssID, 'open',null,"primary")['ColIDs'];

});


     $data;
        foreach ($var as $x) {     
            $datavalue = array_shift($array);
            $dataid = $AssID.$x;
            // $fruit = $AssID;


            $datas = str_replace(array('_'), '', $datavalue);                      
            $data [$x]  = $datas;                             
        
    }


        Assessments::createOrUpdate(
                array('Data' => $data,                
                 'Assessment_ID' => $AssID, 
                 'UserId' => $UserId,
                 'Status' => $stype == 'auto' ? 'Incomplete' : 'Submitted'
                 ),
                  array('Assessment_ID' => $AssID));

        if($stype !== 'auto'){
        if($sva == 'IMCIV1'){
         if (Cache::has('ParticipantsListCounties')) {              
              $Participants = collect(Cache::pull('ParticipantsListCounties'));
              $Participants->where('PartID',$surveyyy->PartID)[0]['Status'] = 'Assessed';
              Cache::forever('ParticipantsListCounties', $Participants);
             
              }
        }
      }
        
}

    
echo("I am a teapot, don't give me coffee!");die;

}
    

 public function create($id) {

         $assess = Assessments::where('Assessment_ID','=',$id)->first();
        $TheFacility = Facilities::where('FacilityCode', '=', intval($assess->Facility_ID))->first();
        $PartID = $assess->PartID;
         $sv = $assess->Survey;
        $status = $assess->Status;

       if ($PartID!=null) $Participant = Participants::where('PartID','=',$PartID)->first();
       else $Participant = '';
        $Survs = Survey::where('surveyID', '=', $sv)->first();
         $location = substr($sv, 0, 2);
         $color = self::color($location);
        $secs = Cache::rememberForever('build_secs_'.$sv,function()use($sv){
             return  collect(Section::where('surveyID', '=', $sv)->get()->toArray());           
                             });
            if($status == 'New' ){ 

        $Melarray = Cache::rememberForever('build_newSurvey_'.$sv,function() use ($id,$Participant,$color){
            return Builder::build($id,'open',$Participant,$color);
                            });
        $Melarray = collect($Melarray);
                            }
       else $Melarray = Builder::build($id,'edit',$Participant,$color);

        $Mel = $Melarray['htmll'];
        $AjaxNames = $Melarray['ajax'];
       
      
        Session::foreveryoung($id,function(){return "I Exist!";});

      
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $secs)
                                       ->with('Survey',$sv);
    }
    
 
   
    public function show($id) {
        
        $TheAsses = Assessments::where('Assessment_ID', '=', $id)->first();
        $TheFacility = Facilities::where('FacilityCode', '=', intval($TheAsses->Facility_ID))->first();
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        $location = substr($sv, 0, 2);
        $color = self::color($location);           
        $MelArray = Builder::build($id, 'show','',$color);
        $Mel = $MelArray['htmll'];

        $iXd = 'survey/' . $id;
        
        return view('surveys.show')->with('Mel', $Mel)
                                   ->with('id', $iXd)
                                   ->with('location', $location)
                                   ->with('title', $Survs->Name)
                                   ->with('secs', $Secs)
                                   ->with('TheFacility',$TheFacility);

    }
  
    public function edit($id) {

       $TheAsses = Assessments::where('Assessment_ID', '=', $id)->first();
       $PartID = $TheAsses->PartID;
       if ($PartID!=null) $Participant = Participants::where('PartID','=',$PartID)->first();else $Participant='';
       $sv = $TheAsses->Survey;
       $Survs = Survey::where('surveyID', '=', $sv)->first();
       $Secs = Section::where('surveyID', '=', $sv)->get();
       $TheFacility = Facilities::where('FacilityCode', '=', intval($TheAsses->Facility_ID))->first();
        $location = substr($sv, 0, 2);
        $color = self::color($location);   
       $Melarray = Builder::build($id, 'edit',$Participant,$color);
       $Mel = $Melarray['htmll'];
       $AjaxNames = $Melarray['ajax'];
     

       Session::foreveryoung($id,function(){return "I Exist!";});
        
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $Secs)
                                       ->with('Survey',$sv);
    }

    public function badedit($id) {

        $TheAsses = Assessments::where('Assessment_ID', '=', $id)->first();
      
        $PartID = $TheAsses->PartID;
       if ($PartID!=null) $Participant = Participants::where('PartID','=',$PartID)->first();else $Participant='';
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
         $location = substr($sv, 0, 2);
          $color = self::color($location);   
       if( $TheAsses->Status=='New' ){ 
        $Melarray = collect(Cache::rememberForever('build_newSurvey_'.$sv,function() use ($id,$Participant,$color){
                                 return Builder::build($id,'open',$Participant,$color);
                            }));}
       else $Melarray = Builder::build($id, 'edit',$Participant,$color);      
        $TheFacility = Facilities::where('FacilityCode', '=', intval($TheAsses->Facility_ID))->first();
        $Mel = $Melarray['htmll'];
        $AjaxNames = $Melarray['ajax'];
       

          Session::foreveryoung($id,function(){return "I Exist!";});
        
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $Secs)
                                       ->with('Survey',$sv);
    }
    

    private static function color($loc){

    switch ($loc) {
      case 'MN': $color = "warning";

      break;
      case 'CH': $color = "info";


      break;
      case 'IM':  $color = "danger";

        break;
      
      default:   $color = "default";
        
        break;
    }

    return $color;

  }
   

}
