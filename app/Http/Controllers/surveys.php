<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tables\Survey;
use App\Tables\Section;
use App\Tables\Participantsview;
use App\Tables\builder;
use App\Tables\Contact;
use App\Tables\Assessor;
use App\Tables\assessments;
use App\Tables\Datarecord;
use App\Tables\Facilities;
use App\Tables\Surveyview;
use App\Http\Controllers\ArrayRedis As Rache;
use Request;
use Input;

class surveys extends Controller
{
    
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


                   switch ($action) {
                       case 'check':

                            $bol = true;
                         $bol=  Rache::areyouyoung($AssID);

                          echo $bol;
                        
                           break;

                         case 'set':

                            $bol=  Rache::foreveryoung($AssID,function(){

                            return "I Exist!";

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


    


    $surveyyy = assessments::where('Assessment_ID', '=', $AssID)->first();

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
  
     $var = Rache::forever('build_COLID_'.$sva,function() use ($AssID){

        return builder::buildview($AssID, 'open',null,"primary")['ColIDs'];

});
        foreach ($var as $x) {     
            $datavalue = array_shift($array);
            $dataid = $AssID.$x;
            $fruit = $AssID;

            if( !isset(DataRecord::where('DataID','=',$dataid)->first()->AssID)) {

                 $data = new Datarecord; 
                 $data->ColumnSetID =  $x; 
                  $data->DataID =  $dataid;   
                  $data->AssID = $AssID;

            if (gettype($datavalue) == "array") { $data->Data = implode(",", $datavalue); }  
            else {$data->Data = str_replace( array('_'), '', $datavalue);}                                                   
                 $data->save();      


                  }
                                                          

             else {

                 if (gettype($datavalue) == "array") { $datas = implode(",", $datavalue);}
                    else {$datas = str_replace(array('_'), '', $datavalue);}  
                      
            Datarecord::createOrUpdate(
                array('ColumnSetID' => $x,
                 'DataID' =>$dataid, 
                 'AssID' => $AssID, 
                 'Data' => $datas),
                  array('DataID' => $dataid));
        }

    }




        assessments::createOrUpdate(
                array('UserId' => $UserId,
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));

     


              if ($stype == 'auto') { 
               assessments::createOrUpdate(
                array('Status' => 'Incomplete',
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));   
                }


                elseif($stype == 'Submitted') {
             assessments::createOrUpdate(
                array('Status' => 'Submitted',
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));
                  }     


}

    
print_r($fruit);die;

}
    

 public function create($id) {

        $assess = assessments::where('Assessment_ID','=',$id)->first();
        $TheFacility = Facilities::where('FacilityCode', '=', $assess->Facility_ID)->first();
        $PartID = $assess->PartID;
        $sv = $assess->Survey;
        $status = $assess->Status;

       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();
       else $Participant = '';
        $Survs = Survey::where('surveyID', '=', $sv)->first();
         $location = substr($sv, 0, 2);
         $color = self::color($location);
        $Secs = Rache::forever('build_secs'.$sv,function()use($sv){
            return Section::where('surveyID', '=', $sv)->get();
                             });
        
       if($status == 'New' ){ 
        $Melarray = Rache::forever('build_newSurvey_'.$sv,function() use ($id,$Participant,$color){
            return builder::buildview($id,'open',$Participant,$color);
                            });
        $Melarray = collect($Melarray);
                            }
       else $Melarray = builder::buildview($id,'edit',$Participant,$color);

        $Mel = $Melarray['htmll'];
        $AjaxNames = $Melarray['ajax'];
       
      
        Rache::foreveryoung($id,function(){return "I Exist!";});

        
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $Secs);
    }
    
 
   
    public function show($id) {
        
        $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
        $TheFacility = Facilities::where('FacilityCode', '=', $TheAsses->Facility_ID)->first();
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        $location = substr($sv, 0, 2);
        $color = self::color($location);           
        $MelArray = builder::buildview($id, 'show','',$color);
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

       $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
       $PartID = $TheAsses->PartID;
       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();else $Participant='';
       $sv = $TheAsses->Survey;
       $Survs = Survey::where('surveyID', '=', $sv)->first();
       $Secs = Section::where('surveyID', '=', $sv)->get();
       $TheFacility = Facilities::where('FacilityCode', '=', $TheAsses->Facility_ID)->first();
        $location = substr($sv, 0, 2);
        $color = self::color($location);   
       $Melarray = builder::buildview($id, 'edit',$Participant,$color);
       $Mel = $Melarray['htmll'];
       $AjaxNames = $Melarray['ajax'];
     

       Rache::foreveryoung($id,function(){return "I Exist!";});
        
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $Secs);
    }

    public function badedit($id) {

        $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
        $Assessment = Surveyview::where('AssID','=',$id)->first();
        $PartID = $TheAsses->PartID;
       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();else $Participant='';
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
         $location = substr($sv, 0, 2);
          $color = self::color($location);   
       if( !isset($Assessment->AssessorName) ){ 
        $Melarray = collect(Rache::forever('build_newSurvey_'.$sv,function() use ($id,$Participant,$color){
                                 return builder::buildview($id,'open',$Participant,$color);
                            }));}
       else $Melarray = builder::buildview($id, 'edit',$Participant,$color);      
        $TheFacility = Facilities::where('FacilityCode', '=', $TheAsses->Facility_ID)->first();
        $Mel = $Melarray['htmll'];
        $AjaxNames = $Melarray['ajax'];
       

          Rache::foreveryoung($id,function(){return "I Exist!";});
        
        return view('surveys.template')->with('TheFacility',$TheFacility)
                                       ->with('Participant',$Participant)
                                       ->with('AssID',$id)
                                       ->with('AjaxNames',$AjaxNames)
                                       ->with('Mel', $Mel)
                                       ->with('location', $location)
                                       ->with('title', $Survs->Name)
                                       ->with('secs', $Secs);
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
