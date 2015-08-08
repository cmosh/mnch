<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Column_set;
use App\Block_row;
use App\Block;
use App\Section;
use App\Survey;
use App\Field_set;
use App\Field;
use App\Datarecord;
use App\Facilities;
use App\assessments;
use App\Assessor;
use App\Contact;
use App\Participantsview;
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
      $AssID = array_shift($array);
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
     $var = $this->build($sva, null,'');
    
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

    }
print_r($fruit);die;

}
    public function create($id, $sv) {
        
        $PartID = assessments::where('Assessment_ID','=',$id)->first()->PartID;
       if ($PartID!=null) $Participant = Participantsview::where('PartID','=',$PartID)->first();
       else $Participant = '';
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        
        $Melarray = $this->build($sv, $id,$Participant);
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
        
        $var = $this->build($sva, null,'');
        
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
        
        $MelArray = $this->buildview($id, 'show','');
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
        assessments::where('Assessment_ID','=',$id)->update(array('Status'=>'In progress'));
        
        $TheAsses = assessments::where('Assessment_ID', '=', $id)->first();
        $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID', '=', $sv)->first();
        $Secs = Section::where('surveyID', '=', $sv)->get();
        
        $Melarray = $this->buildview($id, 'edit',$Participant);
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
        
        $var = $this->build($sva, null,'');
        
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
    
    private function buildview($AssID, $act,$Participant) {
        
        $HtmlLines = '<!-- Main content -->
        <div id = "top"> </div>
         <div id="saved" style="display:none">
                <div  id="changeclass" class="callout callout-warning" >
                <h3 id="changetext" >Saving Please Wait</h3>
                <p>Please check if you have fully completed the form before submitting.</p>
            </div>
            </div>';
        
        $Contacts = Contact::where('AssID', '=', $AssID)->get()->keyBy('Cadre');
        
        // echo $Contacts;
        $datass = DataRecord::where('AssID', '=', $AssID)->get()->keyBy('ColumnSetID');
        
        $TheAssessor = Assessor::where('AssID', '=', $AssID)->first();
        $TheAsses = assessments::where('Assessment_ID', '=', $AssID)->first();
        
        $TheFacility = Facilities::where('FacilityCode', '=', $TheAsses->Facility_ID)->first();
        
        $loc = substr($TheAsses->Survey, 0, 2);
        $Secs = Section::where('surveyID', '=', $TheAsses->Survey)->get();
        foreach ($Secs as $Sec) {
            
            $HtmlLines.= ' 
                         <section automaticallyVisibleIfIDChecked = "' . $Sec->dependencyID . '">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="' . $Sec->identifier . '">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>' . $Sec->name . '</b></h2></center>
                        <br>
                        </div>
                        </div>
';
            
            if ($Sec->identifier == 'Section1') {
                
                $HtmlLines.= '  <!-- Main content -->
                <div clas="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Facility Information</h3>
                                    </div>
                                    <!-- /.box-header -->


                                    <!-- form start -->
                                    
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label>Facility Name</label>
                                                    <input value ="' . $TheFacility->FacilityName . '" type="text" class="form-control" id="InputFacilityName"
                                                   disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Type</label>
                                                    <input  value ="' . $TheFacility->Type . '"type="text" class="form-control" id="InputFacilityType"
                                                    placeholder="Enter type" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Tier</label>
                                                    <input value ="' . $TheFacility->Tier . '" type="text" class="form-control" id="InputFacilityTier"
                                                    placeholder="Enter tier" disabled>
                                                </div>
                                                <br>
                                                <div class="col-xs-4">
                                                    <label>Owned By</label>
                                                    <input value ="' . $TheFacility->Owner . '" type="text" class="form-control" id="InputFacilityOwner"
                                                    placeholder="Enter owner" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>County</label>
                                                    <input value ="' . $TheFacility->County . '" type="text" class="form-control" id="InputFacilityCounty"
                                                    placeholder="Enter county" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>District/Sub-County</label>
                                                    <input value ="' . $TheFacility->District . '" type="text" class="form-control" id="InputFacilitySubCounty"
                                                    placeholder="Enter district/sub-county" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        
                                    
                                </div>
                                <!-- /.box -->

                                <!-- /.box -->
                                <div class="box box-primary">
                                    
                                    <div class="box-header">
                                        <h3 class="box-title">Assessor Information</h3>
                                    </div>

                                    <div class="box-body">

                                        <div class="row">

                                            <div class="col-xs-3">

                                                <label>Name</label>
                                                <input type="text" class="form-control" id="AssessorName" name="AssessorName" value="' . $TheAssessor->Name . '" placeholder="Enter Name"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= ' required>
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" id="AssessorDesignation"  name="AssessorDesignation" value="' . $TheAssessor->Designation . '"  placeholder="Enter Designation"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= 'required>
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="AssessorEmail" name="AssessorEmail" value="' . $TheAssessor->Email . '" placeholder="Enter Email"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= '>
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="AssessorNumber" name="AssessorNumber" value="' . $TheAssessor->Number . '"
                                                placeholder="Enter Phone Number"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= ' required>
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->';

                                     $AjaxNames[]= "AssessorName";
                                    $AjaxNames[]= "AssessorDesignation";
                                    $AjaxNames[]= "AssessorEmail";
                                    $AjaxNames[]= "AssessorNumber";
                
                switch ($loc) {
                    case 'CH':
                        $HtmlLines.= '        
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" value="' . ($Contacts->get('Facility Incharge')->Name) . '"id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" value="' . ($Contacts->get('Facility Incharge')->Mobile) . '" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                         required       <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail" value="' . ($Contacts->get('Facility Incharge')->Email) . '"  name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail" value="' . ($Contacts->get('MCH Incharge')->Email) . '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '"name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail" value="' . ($Contacts->get('Maternity Incharge')->Email) . '" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>OPD in Charge</label>
                                                     <input type="hidden" class="form-control" value="OPD Incharge" id="OPDIncharge"   Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' . ($Contacts->get('OPD Incharge')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' . ($Contacts->get('OPD Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="' . ($Contacts->get('OPD Incharge')->Email) . '" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>




                ';


                             $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                    $AjaxNames[]="OPDIncharge"; $AjaxNames[]="OPDInchargeName"; $AjaxNames[]="OPDInchargeMobile"; $AjaxNames[]="OPDInchargeEmail"; 

                        
                        break;

                    case 'IM':
                        $HtmlLines.= '        
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Incharge</label>
                                                     <input type="hidden" class="form-control" value="Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" value="' . ($Contacts->get('Incharge')->Name) . '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' . ($Contacts->get('Incharge')->Name) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  value="' . ($Contacts->get('Incharge')->Email) . '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  value="' . ($Contacts->get('MCH Incharge')->Email) . '"name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  value="' . ($Contacts->get('Maternity Incharge')->Email) . '" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Team Lead</label>
                                                     <input type="hidden" class="form-control" value="Team Lead" id="OPDIncharge" Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' . ($Contacts->get('Team Lead')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' . ($Contacts->get('Team Lead')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="' . ($Contacts->get('Team Lead')->Email) . '" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>


<div class="box box-primary">
                                                <div class="box-body">

                                                    <div class="box-header">
                                                        <h3 class="box-title">HCW Profile(Existing Info)</h3>
                                                    </div>

                                                <div class="row">

                                                        <div class="col-xs-4">
                                                            <label>First Name</label>
                                                            <input class="form-control" id="HCWName" value="'.$Participant->Name_of_Participant.'" placeholder="Enter first name" type="text" disabled>
                                                        </div>
                                                        
                                                        <div class="col-xs-4">
                                                            <label>National ID</label>
                                                            <input class="form-control" id="HCWID" value="'.$Participant->id_Number.'" placeholder="Enter id" type="text" disabled>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label>Phone Number</label>
                                                            <input class="form-control" id="HCWNumber" value="'.$Participant->mobile_number.'" placeholder="Enter number" type="text" disabled>
                                                        </div>
                                                       
                                                       
                                                    </div>

                                                </div>
                                               
                                            </div>


                ';
                                      $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                    $AjaxNames[]="OPDIncharge"; $AjaxNames[]="OPDInchargeName"; $AjaxNames[]="OPDInchargeMobile"; $AjaxNames[]="OPDInchargeEmail"; 

                        
                        break;

                    case 'MN':
                        $HtmlLines.= '        
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" value="' . ($Contacts->get('Facility Incharge')->Name) . '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' . ($Contacts->get('Facility Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  value="' . ($Contacts->get('Facility Incharge')->Email) . '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" name= "MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile"  value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail" value="' . ($Contacts->get('MCH Incharge')->Email) . '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"  name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail" value="' . ($Contacts->get('Maternity Incharge')->Email) . '"  name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>




                ';
                                  $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                   

                        break;

                    default:
                        
                        // code...
                        break;
                }
                
                // code...
                
                
            } 
            else {
            }
            
            $Array_of_BlockCollections = Block::where('sectionID', '=', $Sec->sectionID)->get();
            
            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '

                                    <div class="box box-primary"  id="' . $BlockIDName . '" automaticallyVisibleIfIDChecked="' . $Single_BlockCollection->dependencyID . '">
                                    <div class="box-header">
                                        <h3 class="box-title">' . $Single_BlockCollection->Name . '</h3>
                                    </div>
                                    <table class="table">';
                
                $Array_of_BlockRowCollections = Block_row::where('blockID', '=', $Single_BlockCollection->blockID)->get();
                
                foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {
                    
                    if ($Single_BlockRowCollection->type == 'table_head') {
                        $HtmlLines.= '<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="';
                        $HtmlLines.= $Single_BlockRowCollection->dependencyID;
                        $HtmlLines.= '" ';
                    } 
                    else {
                        $HtmlLines.= '<tr automaticallyVisibleIfIDChecked="';
                        $HtmlLines.= $Single_BlockRowCollection->dependencyID;
                        $HtmlLines.= '"';
                    }
                    $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                    
                    $HtmlLines.= 'id="';
                    $HtmlLines.= $BlockrowIDName;
                    $HtmlLines.= '">';
                    
                    $Array_of_ColumnSetCollections = Column_set::where('block_rowID', '=', $Single_BlockRowCollection->block_rowID)->get();
                    
                    foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection) {
                        
                        $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
                        
                        $HtmlLines.= '<td   colspan="';
                        
                        $HtmlLines.= $Single_ColumnSetCollection->col_span;
                        
                        $HtmlLines.= '" id="';
                        $HtmlLines.= $ColumnSetIDName;
                        $HtmlLines.= '"';
                        
                        $fieldsetID = $Single_ColumnSetCollection->field_setID;
                        
                        $currentFieldsets = Field_set::where('field_setID', '=', $fieldsetID)->get();
                        foreach ($currentFieldsets as $currentFieldset) {
                            
                            // code...
                            
                            //number,text,combo,multiplecombo,coolcombo,label,radio
                            
                            $typededuction = $currentFieldset->type;
                            
                            $fieldValueList = Field::where('field_setID', '=', $currentFieldset->field_setID)->get()->keyBy('Value');
                            switch ($typededuction) {
                                case "label":
                                    $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $HtmlLines.= $fieldd->Label;
                                    }
                                    
                                    break;

                                case "text":
                                    if ($act == 'show') {
                                        
                                        // code...
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($datass->get($ColumnSetIDName) == null) {
                                        } 
                                        else {
                                            
                                            $HtmlLines.= $datass->get($ColumnSetIDName)->Data;
                                        }
                                    } 
                                    else {
                                        
                                        //saving-text
                                        $HtmlLines.= 'style="vertical-align:middle"  >
                                                                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '
                                                                                            <div class="input-group">
                                                                                           <input class="form-control thenormal" type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' . ($datass->get($ColumnSetIDName)->Data) . '" required data-parsley-error-message="Required">';
                                            if ($fieldd->Label != "") {
                                                $HtmlLines.= '<span class="input-group-addon">';
                                                $HtmlLines.= $fieldd->Label;
                                                $HtmlLines.= '</span>';
                                            }
                                            $HtmlLines.= '</div> ';
                                        }
                                        $HtmlLines.= '</div>';
                                    }
                                    
                                    break;

                                case "textarea":
                                    if ($act == 'show') {
                                        
                                        // code...
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($datass->get($ColumnSetIDName) == null) {
                                        } 
                                        else {
                                            
                                            $HtmlLines.= $datass->get($ColumnSetIDName)->Data;
                                        }
                                    } 
                                    else {
                                        
                                        //saving-textarea
                                        
                                        $HtmlLines.= 'style="vertical-align:middle"  >
                                                                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '
                                                                                            
                                                                                           <textarea class="form-control thenormal" type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' . ($datass->get($ColumnSetIDName)->Data) . '" required data-parsley-error-message="Required"></textarea>';
                                        }
                                        $HtmlLines.= '</div>';
                                    }
                                    
                                    break;

                                case "number":
                                    if ($act == 'show') {
                                        
                                        // code...
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($datass->get($ColumnSetIDName) == null) {
                                        } 
                                        else {
                                            
                                            $HtmlLines.= $datass->get($ColumnSetIDName)->Data;
                                        }
                                    } 
                                    else {
                                        
                                        //saving-number
                                        $HtmlLines.= 'style="vertical-align:middle" >
                                                                                    <div  automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '
                                                                                            <div class="input-group">
                                                                                           <input class="form-control thenormal" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' . $datass->get($ColumnSetIDName)->Data . '" required data-parsley-error-message="Required">';
                                            if ($fieldd->Label != "") {
                                                $HtmlLines.= '<span class="input-group-addon">';
                                                $HtmlLines.= $fieldd->Label;
                                                $HtmlLines.= '</span>';
                                            }
                                            $HtmlLines.= '</div> ';
                                        }
                                        $HtmlLines.= '</div>';
                                    }
                                    
                                    break;

                                case "radio":
                                    
                                    if($datass->get($ColumnSetIDName) ==null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                    if ($act == 'show') {
                                        
                                        // code...
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == ' ' || is_numeric($H) == false) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        elseif ($H == 0) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        else {
                                            $HtmlLines.= $fieldValueList->get($H)->Label;
                                        }
                                    } 
                                    else {
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">

                                                                                                        <input class = "thenormal" name="';
                                        $HtmlLines.= $fieldName;
                                         $AjaxNames[]= $fieldName;
                                        $HtmlLines.= '" value = "" id ="';
                                        $HtmlLines.= $fieldName . 'other';
                                        $HtmlLines.= '" type="radio" style="display: none;" checked=""required data-parsley-error-message="Required">';
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            $HtmlLines.= '<label>';
                                            
                                            if ($fieldValue == $H) {
                                                
                                                $HtmlLines.= '<input name="';
                                                $HtmlLines.= $fieldName;
                                                $HtmlLines.= '" value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '"id ="';
                                                $HtmlLines.= $fieldIDOnly;
                                                $HtmlLines.= '" type="radio" checked>';
                                            } 
                                            else {
                                                $HtmlLines.= '<input name="';
                                                $HtmlLines.= $fieldName;
                                                $HtmlLines.= '" value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '"id ="';
                                                $HtmlLines.= $fieldIDOnly;
                                                $HtmlLines.= '" type="radio" >';
                                            }
                                            
                                            $HtmlLines.= ' <x automaticallyVisibleIfIDChecked = "';
                                            $HtmlLines.= $fieldIDOnly;
                                            $HtmlLines.= '"></x>
                                                                                                             ';
                                            $HtmlLines.= $fieldd->Label . '&nbsp;&nbsp;';
                                            $HtmlLines.= '</label>';
                                        }
                                        
                                        $HtmlLines.= ' </div>';
                                    }
                                    
                                    break;

                                case "combo":
                                   if($datass->get($ColumnSetIDName) ==null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                    
                                    if ($act == 'show') {
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == ' ' || is_numeric($H) == false) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        else if(is_numeric($H) == true){
                                            
                                            $HtmlLines.= 'sa';//$fieldValueList->get($H)->Label;
                                        }
                                        else{

                                        }
                                    } 
                                    else {
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">             
                                                                                     <select class="form-control select2 thenormal" style="width: 100%;" name="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '" id="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '" required data-parsley-error-message="Required"> 
                                                                                     <option value ="" id ="';
                                        $HtmlLines.= $fieldName . "def";
                                        $HtmlLines.= '"  style ="display:none;" selected=""></option>
                                                                                     

                                                                                     ';
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            if ($fieldValue == $H) {
                                                $HtmlLines.= '<option value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '" selected>';
                                                $HtmlLines.= $fieldd->Label;
                                                $HtmlLines.= '</option>';
                                            } 
                                            else {
                                                $HtmlLines.= '<option value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '" >';
                                                $HtmlLines.= $fieldd->Label;
                                                $HtmlLines.= '</option>';
                                            }
                                        }
                                        $HtmlLines.= '   </select>
                                                                                                      </div>';
                                    }
                                    
                                    break;

                                case "multiplecombo":
                                    if($datass->get($ColumnSetIDName) ==null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                    if ($act == 'show') {
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                       if($datass->get($ColumnSetIDName) ==null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                        
                                        if ($H == null || $H == ' ' ||$H =='error') {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        else {
                                            
                                            $vl = explode(",", $H);
                                            
                                            foreach ($vl as $vll) {
                                                
                                                if ($vll != ' ') {
                                                    $HtmlLines.= $fieldValueList->get($vll)->Label;
                                                    $HtmlLines.= ",";
                                                }
                                            }
                                            
                                            $HtmlLines = rtrim($HtmlLines, ",");
                                        }
                                    } 
                                    else {
                                        
                                        //saving-multiplecombo
                                        $ColID[] = $ColumnSetIDName;
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">           
                                                                                     <select  class="form-control select2 themultiple" multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '[]" id="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '"   data-parsley-mincheck="2" data-parsley-error-message="Required"> 
                                                                                             <option  value =" " id ="';
                                        $HtmlLines.= $fieldName . "def";
                                        $HtmlLines.= '"  style ="display:none;" selected=""></option>
                                                                                     ';
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                                       
                                                    
                                                    if (     (strpos($H, $fieldValue) !== false)           ) {
                                                        $HtmlLines.= '<option value ="';
                                                        $HtmlLines.= $fieldValue;
                                                        $HtmlLines.= '" selected>';
                                                        $HtmlLines.= $fieldd->Label;
                                                        $HtmlLines.= '</option>';
                                                    } 
                                                    else {
                                                        $HtmlLines.= '<option value ="';
                                                        $HtmlLines.= $fieldValue;
                                                        $HtmlLines.= '" >';
                                                        $HtmlLines.= $fieldd->Label;
                                                        $HtmlLines.= '</option>';
                                                    }
                                                
                                            
                                        }
                                        $HtmlLines.= '   </select>
                                                                                                      </div>';
                                    }
                                    
                                    break;

                                case "coolradio":
                                     if($datass->get($ColumnSetIDName) ==null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                    if ($act == 'show') {
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == ' ' || is_numeric($H) == false) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        elseif ((string)(int)$H == $H) {
                                            
                                            $HtmlLines.= $fieldValueList->get($H)->Label;
                                        } 
                                        else {
                                            
                                            $HtmlLines.= $H;
                                        }
                                    } 
                                    else {
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline">
                                                                                                        <div> <p>

                                                                                                        <input class="thenormal" name="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '" value = "" id ="';
                                        $HtmlLines.= $fieldName . 'other';
                                        $HtmlLines.= '" type="radio" style="display: none;" checked="" data-parsley-error-message="Required" required>';;
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            $HtmlLines.= '<label>';
                                            if ($fieldValue == $H) {
                                                $HtmlLines.= '<input name="';
                                                $HtmlLines.= $fieldName;
                                                $HtmlLines.= '" value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '"id ="';
                                                $HtmlLines.= $fieldIDOnly;
                                                $HtmlLines.= '" type="radio" checked>';
                                            } 
                                            else {
                                                $HtmlLines.= '<input name="';
                                                $HtmlLines.= $fieldName;
                                                $HtmlLines.= '" value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '"id ="';
                                                $HtmlLines.= $fieldIDOnly;
                                                $HtmlLines.= '" type="radio">';
                                            }
                                            
                                            $HtmlLines.= ' <x coolradio = "';
                                            $HtmlLines.= $fieldIDOnly;
                                            $HtmlLines.= '"></x>
                                                                                                             ';
                                            $HtmlLines.= $fieldd->Label . '&nbsp;&nbsp;';
                                            $HtmlLines.= '</label>';
                                        }
                                        
                                        $Other = 'other';
                                        $HtmlLines.= '</p> <input class="form-control" value="' . $H . '" type="text" id="';
                                        $HtmlLines.= $fieldName . $Other;
                                        $HtmlLines.= '" coolradio="';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '" data-parsley-error-message="Required" > </div>';
                                        $HtmlLines.= '<script>
                                                                                                            

                                                                                                                    </script>';
                                    }
                                    
                                    break;

                                default:
                                    echo "dai era!";
                            }
                        }
                        
                        $HtmlLines.= '</td>';
                    }
                    
                    $HtmlLines.= '</tr>';
                }
                
                $HtmlLines.= '</table> </div>';
            }
            
            $HtmlLines.= '</Section>';
        }
       
  $awesome = array (
    "htmll"  => $HtmlLines,
    "ajax" =>$AjaxNames,
   
);
          
            return $awesome;

       
    }
    
    private function build($sv, $value,$Participant) {
        
        $loc = substr($sv, 0, 2);
        $ColID = array();
        $SelectedSurvey = $sv;
        $HtmlLines = '<!-- Main content -->
          <div id = "top"> </div>
         <div id="saved" style="display:none">
                <div  id="changeclass" class="callout callout-warning" >
                <h3 id="changetext" >Saving Please Wait</h3>
                <p>Please check if you have fully completed the form before submitting.</p>
            </div>
            </div>';
        
        $Survs = Survey::where('surveyID', '=', $SelectedSurvey)->get();
        
        if ($value !== null) {
            $TheAsses = assessments::where('Assessment_ID', '=', $value)->first();
            $TheFacility = Facilities::where('FacilityCode', '=', $TheAsses->Facility_ID)->first();
        }
        $Secs = Section::where('surveyID', '=', $SelectedSurvey)->get();
        foreach ($Secs as $Sec) {
            
            $HtmlLines.= '
                         <section automaticallyVisibleIfIDChecked = "';
            $HtmlLines.= $Sec->dependencyID;
            $HtmlLines.= '">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="';
            
            $HtmlLines.= $Sec->identifier;
            
            $HtmlLines.= '">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>';
            
            $HtmlLines.= $Sec->name;
            
            $HtmlLines.= '</b></h2></center>
                        <br>
                        </div>
                        </div>
';
            
            if ($Sec->identifier == 'Section1' && $value != null) {
                
                $HtmlLines.= '  <!-- Main content -->
                <div clas="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Facility Information</h3>
                                    </div>
                                    <!-- /.box-header -->


                                    <!-- form start -->
                                    
                                        <div class="box-body">
                                            <div class="form-group">
                                                <div class="col-xs-4">
                                                    <label>Facility Name</label>
                                                    <input value ="' . $TheFacility->FacilityName . '" type="text" class="form-control" id="InputFacilityName"
                                                    disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Type</label>
                                                    <input  value ="' . $TheFacility->Type . '"type="text" class="form-control" id="InputFacilityType"
                                                    placeholder="Enter type" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Tier</label>
                                                    <input value ="' . $TheFacility->Tier . '" type="text" class="form-control" id="InputFacilityTier"
                                                    placeholder="Enter tier" disabled>
                                                </div>
                                                <br>
                                                <div class="col-xs-4">
                                                    <label>Owned By</label>
                                                    <input value ="' . $TheFacility->Owner . '" type="text" class="form-control" id="InputFacilityOwner"
                                                    placeholder="Enter owner" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>County</label>
                                                    <input value ="' . $TheFacility->County . '" type="text" class="form-control" id="InputFacilityCounty"
                                                    placeholder="Enter county" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>District/Sub-County</label>
                                                    <input value ="' . $TheFacility->District . '" type="text" class="form-control" id="InputFacilitySubCounty"
                                                    placeholder="Enter district/sub-county" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        
                                    
                                </div>
                                <!-- /.box -->

                                <!-- /.box -->
                                <div class="box box-primary">
                                    
                                    <div class="box-header">
                                        <h3 class="box-title">Assessor Information</h3>
                                    </div>

                                    <div class="box-body">

                                        <div class="row">

                                            <div class="col-xs-3">

                                                <label>Name</label>
                                                <input type="text" class="form-control" id="AssessorName" name="AssessorName" value="" placeholder="Enter Name" required>
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" value="" class="form-control" id="AssessorDesignation"  name="AssessorDesignation"  placeholder="Enter Designation" required>
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" value="" class="form-control" id="AssessorEmail" name="AssessorEmail" placeholder="Enter Email" >
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" value="" id="AssessorNumber" name="AssessorNumber"
                                                placeholder="Enter Phone Number" required>
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->';
                                    $AjaxNames[]= "AssessorName";
                                    $AjaxNames[]= "AssessorDesignation";
                                    $AjaxNames[]= "AssessorEmail";
                                    $AjaxNames[]= "AssessorNumber";
                
                switch ($loc) {
                    case 'CH':
                        $HtmlLines.= '      
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  name="FacilityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" name= "MCHInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  name="MCHInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>OPD in Charge</label>
                                                     <input type="hidden" class="form-control" value="OPD Incharge" id="OPDIncharge" Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>




                ';

                                    $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                    $AjaxNames[]="OPDIncharge"; $AjaxNames[]="OPDInchargeName"; $AjaxNames[]="OPDInchargeMobile"; $AjaxNames[]="OPDInchargeEmail"; 

                                   
                        break;

                    case 'IM':
                        $HtmlLines.= '      
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Incharge</label>
                                                     <input type="hidden" class="form-control" value="Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" value=" " class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" value=" " id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" value=" " id="FacilityInchargeEmail"  name="FacilityInchargeEmail" placeholder="Enter Email" >
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" name= "MCHInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  name="MCHInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Team Lead</label>
                                                     <input type="hidden" class="form-control" value="Team Lead" id="OPDIncharge" Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
<div class="box box-primary">
                                                <div class="box-body">

                                                    <div class="box-header">
                                                        <h3 class="box-title">HCW Profile(Existing Info)</h3>
                                                    </div>

                                                <div class="row">

                                                        <div class="col-xs-4">
                                                            <label>First Name</label>
                                                            <input class="form-control" id="HCWName" value="'.$Participant->Name_of_Participant.'" placeholder="Enter first name" type="text" disabled>
                                                        </div>
                                                        
                                                        <div class="col-xs-4">
                                                            <label>National ID</label>
                                                            <input class="form-control" id="HCWID" value="'.$Participant->id_Number.'" placeholder="Enter id" type="text" disabled>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label>Phone Number</label>
                                                            <input class="form-control" id="HCWNumber" value="'.$Participant->mobile_number.'" placeholder="Enter number" type="text" disabled>
                                                        </div>
                                                       
                                                       
                                                    </div>

                                                </div>
                                               
                                            </div>



                ';

                                    $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                    $AjaxNames[]="OPDIncharge"; $AjaxNames[]="OPDInchargeName"; $AjaxNames[]="OPDInchargeMobile"; $AjaxNames[]="OPDInchargeEmail"; 

                        
                        break;

                    case 'MN':
                        $HtmlLines.= '      
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile" required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  name="FacilityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MCHInchargeName" name= "MCHInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  name="MCHInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeName" name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>




                ';
                                    $AjaxNames[]="FacilityIncharge"; $AjaxNames[]="FacilityInchargeName"; $AjaxNames[]="FacilityInchargeMobile";  $AjaxNames[]="FacilityInchargeEmail"; 
                                    
                                    $AjaxNames[]="MCHIncharge"; $AjaxNames[]="MCHInchargeName"; $AjaxNames[]="MCHInchargeMobile"; $AjaxNames[]="MCHInchargeEmail"; 

                                    $AjaxNames[]="MaternityIncharge"; $AjaxNames[]="MaternityInchargeName"; $AjaxNames[]="MaternityInchargeMobile"; $AjaxNames[]="MaternityInchargeEmail"; 

                                    

                        break;

                    default:
                        
                        // code...
                        break;
                }
                
                // code...
                
                
            } 
            else {
            }
            
            $Array_of_BlockCollections = Block::where('sectionID', '=', $Sec->sectionID)->get();
            
            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '<div class="box box-primary"  id="' . $BlockIDName . '" automaticallyVisibleIfIDChecked="' . $Single_BlockCollection->dependencyID . '">
                                    <div class="box-header">
                                        <h3 class="box-title">' . $Single_BlockCollection->Name . '</h3>
                                    </div>
                                    <table class="table">';
                
                $Array_of_BlockRowCollections = Block_row::where('blockID', '=', $Single_BlockCollection->blockID)->get();
                
                foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {
                    
                    if ($Single_BlockRowCollection->type == 'table_head') {
                        $HtmlLines.= '<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="';
                        $HtmlLines.= $Single_BlockRowCollection->dependencyID;
                        $HtmlLines.= '" ';
                    } 
                    else {
                        $HtmlLines.= '<tr automaticallyVisibleIfIDChecked="';
                        $HtmlLines.= $Single_BlockRowCollection->dependencyID;
                        $HtmlLines.= '"';
                    }
                    $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                    
                    $HtmlLines.= 'id="';
                    $HtmlLines.= $BlockrowIDName;
                    $HtmlLines.= '">';
                    
                    $Array_of_ColumnSetCollections = Column_set::where('block_rowID', '=', $Single_BlockRowCollection->block_rowID)->get();
                    
                    foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection) {
                        
                        $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
                        
                        $HtmlLines.= '<td   colspan="';
                        
                        $HtmlLines.= $Single_ColumnSetCollection->col_span;
                        
                        $HtmlLines.= '" id="';
                        $HtmlLines.= $ColumnSetIDName;
                        $HtmlLines.= '"';
                        
                        $fieldsetID = $Single_ColumnSetCollection->field_setID;
                        
                        $currentFieldsets = Field_set::where('field_setID', '=', $fieldsetID)->get();
                        foreach ($currentFieldsets as $currentFieldset) {
                            
                            // code...
                            
                            //number,text,combo,multiplecombo,coolcombo,label,radio
                            
                            $typededuction = $currentFieldset->type;
                            unset($currentFieldset);
                            $fieldValueList = Field::where('field_setID', '=', $fieldsetID)->get();
                            switch ($typededuction) {
                                case "label":
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        $HtmlLines.= $fieldd->Label;
                                    }
                                    
                                    break;

                                case "text":
                                    
                                    $HtmlLines.= 'style="vertical-align:middle"  >
                                                                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {

                                       
                                        
                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                          $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '
                                                                                            <div class="input-group">
                                                                                           <input class="form-control thenormal" type="text" name ="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" id="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" value="" required data-parsley-error-message="Required">';
                                        if ($fieldd->Label != "") {
                                            $HtmlLines.= '<span class="input-group-addon">';
                                            $HtmlLines.= $fieldd->Label;
                                            $HtmlLines.= '</span>';
                                        }
                                        $HtmlLines.= '</div> ';
                                    }
                                    $HtmlLines.= '</div>';
                                    
                                    break;

                                case "textarea":
                                    $HtmlLines.= 'style="vertical-align:middle"  >
                                                                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                          $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '
                                                                                            
                                                                                           <textarea class="form-control thenormal" type="text" name ="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" id="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" value="" required data-parsley-error-message="Required"></textarea>';
                                    }
                                    $HtmlLines.= '</div>';
                                    
                                    break;

                                case "number":
                                    $HtmlLines.= 'style="vertical-align:middle" >
                                                                                    <div  automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                          $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '
                                                                                            <div class="input-group">
                                                                                           <input class="form-control thenormal" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" type="text" name ="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" id="';
                                        $HtmlLines.= $fieldIDName;
                                        $HtmlLines.= '" value="" required data-parsley-error-message="Required">';
                                        if ($fieldd->Label != "") {
                                            $HtmlLines.= '<span class="input-group-addon">';
                                            $HtmlLines.= $fieldd->Label;
                                            $HtmlLines.= '</span>';
                                        }
                                        $HtmlLines.= '</div> ';
                                    }
                                    $HtmlLines.= '</div>';
                                    break;

                                case "radio":
                                    $ColID[] = $ColumnSetIDName;
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;
                                    $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">

                                                                                                        <input class = "thenormal" name="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '" value = "" id ="';
                                    $HtmlLines.= $fieldName . 'other';
                                    $HtmlLines.= '" type="radio" style="display: none;" checked=""required data-parsley-error-message="Required">';
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<label>
                                                                                                              
                                                                                                            

                                                                                                            <input name="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '" value ="';
                                        $HtmlLines.= $fieldValue;
                                        $HtmlLines.= '"id ="';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '" type="radio" >
                                                                                                             <x automaticallyVisibleIfIDChecked = "';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '"></x>
                                                                                                             ';
                                        $HtmlLines.= $fieldd->Label . '&nbsp;&nbsp;';
                                        $HtmlLines.= '</label>';
                                    }
                                    
                                    $HtmlLines.= ' </div>';
                                    
                                    break;

                                case "combo":
                                    $ColID[] = $ColumnSetIDName;
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;
                                    $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">             
                                                                                     <select class="form-control select2 thenormal" style="width: 100%;" name="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '" id="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '" required data-parsley-error-message="Required"> 
                                                                                     <option value ="" id ="';
                                    $HtmlLines.= $fieldName . "def";
                                    $HtmlLines.= '"  style ="display:none;" selected=""></option>
                                                                                     

                                                                                     ';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option value ="';
                                        $HtmlLines.= $fieldValue;
                                        $HtmlLines.= '" >';
                                        $HtmlLines.= $fieldd->Label;
                                        $HtmlLines.= '</option>
                                                                                                         
                                                                                                         ';
                                    }
                                    $HtmlLines.= '   </select>
                                                                                                      </div>';
                                    
                                    break;

                                case "multiplecombo":
                                    $ColID[] = $ColumnSetIDName;
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;
                                    $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">           
                                                                                     <select  class="form-control select2 themultiple" multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '[]" id="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '"   data-parsley-mincheck="2" data-parsley-error-message="Required"> 
                                                                                             <option  value =" " id ="';
                                    $HtmlLines.= $fieldName . "def";
                                    $HtmlLines.= '"  style ="display:none;" selected=""></option>
                                                                                     ';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option value ="';
                                        $HtmlLines.= $fieldValue;
                                        $HtmlLines.= '"id ="';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '" >';
                                        $HtmlLines.= $fieldd->Label;
                                        $HtmlLines.= '</option>
                                                                                                         
                                                                                                         ';
                                    }
                                    $HtmlLines.= '   </select>
                                                                                                      </div>';
                                    
                                    break;

                                case "coolmultiplecombo":
                                    $ColID[] = $ColumnSetIDName;
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                    $other = 'other';
                                    $hidden = 'hidden';
                                    $HtmlLines.= ' valign="baseline">
                                                                                                         <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">              
                                                                                     <select class="form-control select2 titleother " multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '[]" id="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '" onChange="showDiv(\'div\',this,\'' . $fieldName . '\')" > 
                                                                                            <option value =" " id ="';
                                    $HtmlLines.= $fieldName . "def";
                                    $HtmlLines.= '"  style ="display:none;" selected=""></option>
                                                                                     ';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option value ="';
                                        $HtmlLines.= $fieldValue;
                                        $HtmlLines.= '"id ="';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '" >';
                                        $HtmlLines.= $fieldd->Label;
                                        $HtmlLines.= '</option>
                                                                                                         
                                                                                                         ';
                                    }
                                    
                                    $HtmlLines.= '   </select>
                                                                                                 
                                                                                                      </div>
                                                                                                      
    
        
    <div id="content" style="float:right;">
    
        <div id="div1" style="display:none;">1</div>
        <div id="div2" style="display:none;">2</div>
        <div id="div3" style="display:none;">3</div>
        <div id="div4" style="display:none;">4</div>
    
    </div>  
    
    










                                                                                                      ';
                                    
                                    break;

                                case "coolradio":
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;
                                    $HtmlLines.= ' valign="baseline">
                                                                                                        <div> <p>

                                                                                                        <input class ="thenormal"  name="';
                                    $HtmlLines.= $fieldName;
                                    $HtmlLines.= '" value = "" id ="';
                                    $HtmlLines.= $fieldName . 'other';
                                    $HtmlLines.= '" type="radio" style="display: none;" checked="" data-parsley-error-message="Required" required>';;
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<label>
                                                                                                              
                                                                                                            

                                                                                                            <input name="';
                                        $HtmlLines.= $fieldName;
                                        $HtmlLines.= '" value ="';
                                        $HtmlLines.= $fieldValue;
                                        $HtmlLines.= '"id ="';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '" type="radio">
                                                                                                            <x coolradio = "';
                                        $HtmlLines.= $fieldIDOnly;
                                        $HtmlLines.= '"></x>
                                                                                                             ';
                                        $HtmlLines.= $fieldd->Label . '&nbsp;&nbsp;';
                                        $HtmlLines.= '</label>';
                                    }
                                    
                                    $Other = 'other';
                                    $HtmlLines.= '</p> <input class="form-control" type="text" id="';
                                    $HtmlLines.= $fieldName . $Other;
                                    $HtmlLines.= '" coolradio="';
                                    $HtmlLines.= $fieldIDOnly;
                                    $HtmlLines.= '" data-parsley-error-message="Required" > </div>';
                                    $HtmlLines.= '<script>
                                                                                                            

                                                                                                                    </script>';
                                    break;

                                default:
                                    echo $typededuction;
                                    
                                    echo "dai era!";
                            }
                        }
                        
                        $HtmlLines.= '</td>';
                    }
                    
                    $HtmlLines.= '</tr>';
                }
                
                $HtmlLines.= '</table> </div>';
            }
            
            $HtmlLines.= '</Section>';
        }
        
        //Adding requisite js
        
        if ($value != null) {

            $awesome = array (
    "htmll"  => $HtmlLines,
    "ajax" =>$AjaxNames,
   
);
          
            return $awesome;
            
            // code...
            
            
        } 
        else {
            return $ColID;
        }
    }
}
