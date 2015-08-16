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
    
    public function index() {
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


    public function autosave(){

         if(Request::ajax()) {
      $data = Input::all();
      print_r($data);die;
    }



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
        
        // $array = Request::all();
        
        // $first = array_shift($array);
        
        // //echo $first;
        // $second = array_shift($array);
        
        // //echo $second;

      $Name = array_shift($array);
      $Designation = array_shift($array); 
      $Email  = array_shift($array);
      $Number = array_shift($array);
     
  if( Assessor::where('AssID','=',$AssID)->first()==null) {



         $storeassessor = new Assessor;
        
     
        
        $storeassessor->Name = $Name;
        
        $storeassessor->Designation = $Designation;
        
        $storeassessor->Email = $Email;
        
        $storeassessor->Number = $Number;
        
        $storeassessor->AssID = $AssID;
        
        $storeassessor->save();








    $x = 1;



  } else{
            Assessor::createOrUpdate(
                array('Name' => $Name,
                 'Designation' => $Designation, 
                 'Email' => $Email, 
                 'Number' => $Number, 
                 'AssID' => $AssID), 
                array('AssID' => $AssID));
        

     $x = 2;
  }


   if ($location == "MN") {
            $roop = 3;
            
            // code...
            
            
        } 
        else {
            $roop = 4;
            
            // code...
            
            
        }
        
      

 if( Contact::where('AssID','=',$AssID)->first()==null) {



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








    $x = 1;



  } else{
           
           for ($x = 0; $x < $roop; $x++) {
            $cadre = array_shift($array);
            Contact::createOrUpdate(array('Cadre' => $cadre, 'Name' => array_shift($array), 'Mobile' => array_shift($array), 'Email' => array_shift($array), 'AssID' => $AssID, 'ContactID' => $AssID . $cadre), array('ContactID' => $AssID . $cadre));
        }
        

     $x = 2;
  }
     $var = builder::build($sva, null,'');
    
        foreach ($var as $x) {            
                      
            $datavalue = array_shift($array);

            
            $dataid = $AssID.$x;
            $fruit = $AssID;

             if( DataRecord::where('DataID','=',$dataid)->first() == null) {

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




        $Progress = assessments::where('Assessment_ID','=',$AssID)->first();
        $Pg = $Progress->Status;

        assessments::createOrUpdate(
                array('UserId' => $UserId,
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));

        if ($Pg == 'Autosaved'){


              if ($stype == 'auto') {      assessments::createOrUpdate(
                array('Status' => 'Autosaved',
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));
          } else{

 assessments::createOrUpdate(
                array('Status' => 'Incomplete',
                  'Assessment_ID' => $AssID), 
                array('Assessment_ID' => $AssID));



          }

      
}
}

    
print_r($fruit);die;

}
    public function create($id, $sv) {
        
        $PartID = assessments::where('Assessment_ID','=',$id)->first()->PartID;
       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();
       else $Participant = '';
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        
        $Melarray = builder::build($sv, $id,$Participant);
        $Mel = $Melarray['htmll'];
        $AjaxNames = $Melarray['ajax'];
     

        $location = substr($sv, 0, 2);
        
        $iXd = 'survey/' . $id;
        
        return view('surveys.template')->with('Participant',$Participant)->with('AssID',$id)->with('AjaxNames',$AjaxNames)->with('anId',$id)->with('Mel', $Mel)->with('id', $iXd)->with('location', $location)->with('title', $Survs->Name)->with('secs', $Secs);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store($id,$status) {


      // DB::table('assessments')->where('Assessment_ID', $id)->update(['Status' => 'submit']);
        
        $surveyyy = assessments::where('Assessment_ID', '=', $id)->first();
        $sva = $surveyyy->Survey;
        $location = substr($sva, 0, 2);
        $AssID = $id;
        
        $array = Request::all();
        
        $storeassessor = new Assessor;
        
        $first = array_shift($array);
        
        $storeassessor->Name = array_shift($array);
        
        $storeassessor->Designation = array_shift($array);
        
        $storeassessor->Email = array_shift($array);
        
        $storeassessor->Number = array_shift($array);
        
        $storeassessor->AssID = $AssID;
        
        $storeassessor->save();
        
        //echo $storeassessor;
        if ($location == "MN") {
            $roop = 3;
            
            // code...
            
            
        } 
        else {
            $roop = 4;
            
            // code...
            
            
        }
        
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
        
        $var = builder::build($sva, null,'');
        
        foreach ($array as $key) {
            
            $data = new Datarecord;
            
            $x = array_shift($var);
            if ($x == null) break;

            
            $data->ColumnSetID = $x;
            
            //echo $data->ColumnSetID;
            //echo "  ";
            $data->DataID = $AssID . $x;
            
            //echo $data->DataID;
            //echo "  ";
            $data->AssID = $AssID;
            
            //echo $data->AssID;
            //echo "  ";
            if (gettype($key) == "array") {
                $data->Data = implode(",", $key);
                
                // echo $data->Data;
                //echo "  ";
                
                
            } 
            else {
                $data->Data = str_replace(array('_'), '', $key);
                
                // echo $data->Data;
                //echo "  ";
                
                
            }
            
            //  echo  "<br>";
            
            $data->save();
            
            // code...
            
            
        }
        
      
         switch ($status) {
            case 'Progress':
                # code...
                break;
              case 'Saved':
                return redirect('/home');
                break;
                  case 'Submit':
                   return redirect('/assessments/show/' . $AssID);
               
                break;
            default:
                # code...
                break;
        }
       
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        
        $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        
        $MelArray = builder::buildview($id, 'show','');
        $Mel = $MelArray['htmll'];

        $location = substr($sv, 0, 2);
        
        $iXd = 'survey/' . $id;
        
        return view('surveys.edit')->with('Mel', $Mel)->with('id', $iXd)->with('location', $location)->with('title', $Survs->Name)->with('secs', $Secs);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $PartID = assessments::where('Assessment_ID','=',$id)->first()->PartID;
       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();
       else $Participant='';
        assessments::where('Assessment_ID','=',$id)->update(array('Status'=>'Autosaved'));
        
        $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        
        $Melarray = builder::buildview($id, 'edit',$Participant);
        $Mel = $Melarray['htmll'];
         $AjaxNames = $Melarray['ajax'];
        $location = substr($sv, 0, 2);
        
        return view('surveys.template')->with('Participant',$Participant)->with('AssID',$id)->with('AjaxNames',$AjaxNames)->with('Mel', $Mel)->with('id', $id)->with('location', $location)->with('title', $Survs->Name)->with('secs', $Secs);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($AssID) {
        
        $surveyyy = assessments::where('Assessment_ID', '=', $AssID)->first();
        $sva = $surveyyy->Survey;
        $location = substr($sva, 0, 2);
        
        $array = Request::all();
        
        $first = array_shift($array);
        
        //echo $first;
     //   $second = array_shift($array);
        
        //echo $second;
        Assessor::createOrUpdate(array('Name' => array_shift($array), 'Designation' => array_shift($array), 'Email' => array_shift($array), 'Number' => array_shift($array), 'AssID' => $AssID), array('AssID' => $AssID));
        
        if ($location == "MN") {
            $roop = 3;
            
            // code...
            
            
        } 
        else {
            $roop = 4;
            
            // code...
            
            
        }
        
        for ($x = 0; $x < $roop; $x++) {
            $cadre = array_shift($array);
            Contact::createOrUpdate(array('Cadre' => $cadre, 'Name' => array_shift($array), 'Mobile' => array_shift($array), 'Email' => array_shift($array), 'AssID' => $AssID, 'ContactID' => $AssID . $cadre), array('ContactID' => $AssID . $cadre));
        }
        
        $var = builder::build($sva, null,'');
        
        foreach ($array as $key) {
            
            $x = array_shift($var);
            if (gettype($key) == "array") {
                $data = implode(",", $key);
                
                // echo $data->Data;
                //echo "  ";
                
                
            } 
            else {
                $data = str_replace(array('_'), '', $key);
                
                // echo $data->Data;
                //echo "  ";
                
                
            }
            
            //   if ($x == null)break;
            Datarecord::createOrUpdate(array('ColumnSetID' => $x, 'DataID' => $AssID . $x, 'AssID' => $AssID, 'Data' => $data), array('DataID' => $AssID . $x));
        }
      
        //         echo $vari;
        //         # code...
        //     }*/
        
    return redirect('/status/submit/'.$AssID);
        
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        
        //
        
        
    }
    
  
    

}
