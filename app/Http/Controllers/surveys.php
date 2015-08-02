<?php namespace App\Http\Controllers;
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
use Request;






class surveys extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	private static $theid="0";
	private static $thesv="0";
	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index()
	{
	    
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	
	public function create($id,$sv)
	{


		$Survs = Survey::where('surveyID','=',$sv)->first();
		$Secs = Section::where('surveyID','=',$sv)->get();
		

		$Mel=$this->build($sv,$id);
		$location = substr ($sv, 0,2);
		echo $location;
		
			$iXd= 'survey/'.$id;

		return view('surveys.template')->with('Mel',$Mel)->with('id',$iXd)->with('location',$location)->with('title',$Survs->Name)->with('secs',$Secs);	
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($id)
	{	

		$surveyyy = assessments::where('Assessment_ID','=',$id)->first();
		$sva = $surveyyy->Survey;
		$location = substr ($sva, 0,2);
		$AssID=  $id;
		
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
      if ($location=="MN") { $roop = 3;
      	# code...
      } else {
      	$roop=4;
      	# code...
      }

      
      
      for ($x = 0; $x < $roop; $x++) {
      	$ContactT = new Contact;
		$ContactT->Cadre = array_shift($array);	
		$ContactT->Name = array_shift($array);
		$ContactT->Mobile = array_shift($array);
		$ContactT->Email = array_shift($array);
		$ContactT->AssID = $AssID;
		$ContactT->save();
   		
} 

	
			
		

		$var = $this->build( $sva,null);
       
foreach ($array as $key) {

		$data = new Datarecord;
		
		
		$x = array_shift($var);
		
		$data->ColumnSetID=$x;
		$data->DataID = $AssID.$x;
		$data->AssID=$AssID;
		
		if (gettype($key)=="array") {
            $data->Data=implode(",",$key);
        } else {
            $data->Data=str_replace(array('_'),'',$key);
        }
        
		

		
		

		


		$data->save();



	# code...
}
	
        

	

	/*foreach ($var as $vari) {
		$data = new DataRecord;

		$data->ID=$var;
		$data->Data=$array;

		echo $vari;
		# code...
	}*/



		return redirect('/assessments/show');
		



	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	       
         $TheAsses = assessments::where('Assessment_ID','=',$id)->first();
         $sv = $TheAsses->Survey;
        $Survs = Survey::where('surveyID','=',$sv)->first();
        $Secs = Section::where('surveyID','=',$sv)->get();
        

        $Mel=$this->buildview($id);
        $location = substr ($sv, 0,2);
       
        
            $iXd= 'survey/'.$id;


        return view('surveys.edit')->with('Mel',$Mel)->with('id',$iXd)->with('location',$location)->with('title',$Survs->Name)->with('secs',$Secs); 








    	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    private function buildview($AssID){

        $HtmlLines = '<!-- Main content -->';

          
                
                $Contacts = Contact::where('AssID','=',$AssID)->get()->keyBy('Cadre');
                $datass = DataRecord::where('AssID','=',$AssID)->get()->keyBy('ColumnSetID');

                $TheAssessor = Assessor::where('AssID','=',$AssID)->first();
                $TheAsses = assessments::where('Assessment_ID','=',$AssID)->first();

                $TheFacility = Facilities::where('FacilityCode','=',$TheAsses->Facility_ID)->first();
                
                   $loc = substr ($TheAsses->Survey, 0,2);
                $Secs = Section::where('surveyID','=',$TheAsses->Survey)->get();
                  foreach($Secs as $Sec) {
                
            
                    $HtmlLines .=' 
                         <section automaticallyVisibleIfIDChecked = "';$HtmlLines.=$Sec->dependencyID;$HtmlLines.='">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="';

                    $HtmlLines.= $Sec->identifier;
                   
                      $HtmlLines.='">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>';

                        $HtmlLines.=$Sec->name;


                        $HtmlLines.='</b></h2></center>
                        <br>
                        </div>
                        </div>
';


            if ($Sec->identifier=='Section1' ) {


                $HtmlLines.='  <!-- Main content -->
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
                                                    <input value ="';$HtmlLines.=$TheFacility->FacilityName;$HtmlLines.='" type="text" class="form-control" id="InputFacilityName"
                                                    disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Type</label>
                                                    <input  value ="';$HtmlLines.=$TheFacility->Type;$HtmlLines.='"type="text" class="form-control" id="InputFacilityType"
                                                    placeholder="Enter type" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Tier</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->Tier;$HtmlLines.='" type="text" class="form-control" id="InputFacilityTier"
                                                    placeholder="Enter tier" disabled>
                                                </div>
                                                <br>
                                                <div class="col-xs-4">
                                                    <label>Owned By</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->Owner;$HtmlLines.='" type="text" class="form-control" id="InputFacilityOwner"
                                                    placeholder="Enter owner" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>County</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->County;$HtmlLines.='" type="text" class="form-control" id="InputFacilityCounty"
                                                    placeholder="Enter county" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>District/Sub-County</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->District;$HtmlLines.='" type="text" class="form-control" id="InputFacilitySubCounty"
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
                                                <input type="text" class="form-control" id="AssessorName" name="AssessorName" value="';$HtmlLines.=$TheAssessor->Name;$HtmlLines.='" placeholder="Enter Name">
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" id="AssessorDesignation"  name="AssessorDesignation" value="';$HtmlLines.=$TheAssessor->Designation;$HtmlLines.='"  placeholder="Enter Designation">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="AssessorEmail" name="AssessorEmail" value="';$HtmlLines.=$TheAssessor->Email;$HtmlLines.='" placeholder="Enter Email">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="AssessorNumber" name="AssessorNumber" value="';$HtmlLines.=$TheAssessor->Number;$HtmlLines.='"
                                                placeholder="Enter Phone Number">
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->';

                    switch ($loc) {
                        case 'CH': $HtmlLines.='        
              
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
                                                    <input type="text" class="form-control" value="'.($Contacts->get('Facility Incharge')->Name).'"id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" value="'.($Contacts->get('Facility Incharge')->Mobile).'" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail" value="'.($Contacts->get('Facility Incharge')->Email).'"  name="FacilityInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MCHInchargeName" value="'.($Contacts->get('MCH Incharge')->Name).'" name= "MCHInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="'.($Contacts->get('MCH Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail" value="'.($Contacts->get('MCH Incharge')->Email).'" name="MCHInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="'.($Contacts->get('Maternity Incharge')->Name).'"name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" value="'.($Contacts->get('Maternity Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail" value="'.($Contacts->get('Maternity Incharge')->Email).'" name="MaternityInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" value="'.($Contacts->get('OPD Incharge')->Name).'" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="'.($Contacts->get('OPD Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="'.($Contacts->get('OPD Incharge')->Email).'" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>




                ';
                                break;
                        case 'IM': $HtmlLines.='        
              
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
                                                    <input type="text" class="form-control" id="FacilityInchargeName" value="'.($Contacts->get('Incharge')->Name).'" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="'.($Contacts->get('Number')->Name).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  value="'.($Contacts->get('Incharge')->Email).'" name="FacilityInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MCHInchargeName" value="'.($Contacts->get('MCH Incharge')->Name).'" name= "MCHInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="'.($Contacts->get('MCH Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  value="'.($Contacts->get('MCH Incharge')->Email).'"name="MCHInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="'.($Contacts->get('Maternity Incharge')->Name).'" name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" value="'.($Contacts->get('Maternity Incharge')->Mobile).'"name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  value="'.($Contacts->get('Maternity Incharge')->Email).'" name="MaternityInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="OPDInchargeName" name= "OPDInchargeName" value="'.($Contacts->get('Team Lead')->Name).'" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="'.($Contacts->get('Team Lead')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="'.($Contacts->get('Team Lead')->Email).'" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>




                ';

                                break;
                        case 'MN': $HtmlLines.='        
              
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
                                                    <input type="text" class="form-control" id="FacilityInchargeName" value="'.($Contacts->get('Facility Incharge')->Name).'" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="'.($Contacts->get('Facility Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  value="'.($Contacts->get('Facility Incharge')->Email).'" name="FacilityInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MCHInchargeName" name= "MCHInchargeName" value="'.($Contacts->get('MCH Incharge')->Name).'" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile"  value="'.($Contacts->get('MCH Incharge')->Mobile).'"
                                                    placeholder="Enter Mobile">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail" value="'.($Contacts->get('MCH Incharge')->Email).'" name="MCHInchargeEmail" placeholder="Enter Email">
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
                                                    <input type="text" class="form-control" id="MaternityInchargeName" value="'.($Contacts->get('Maternity Incharge')->Name).'" name= "MaternityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" value="'.($Contacts->get('Maternity Incharge')->Mobile).'"  name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail" value="'.($Contacts->get('Maternity Incharge')->Email).'"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>




                ';
                            
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                
                # code...
            } else {
                
            }
            







                  
                        
               $Array_of_BlockCollections =  Block::where('sectionID','=',$Sec->sectionID)->get();
                        
                foreach($Array_of_BlockCollections as $Single_BlockCollection){

                                                                            
                        
                                    $BlockIDName = $Single_BlockCollection->blockID;
                            
                            
                                                                        
                                    $HtmlLines.='

                                    <div class="box box-primary"  id="';$HtmlLines.=$BlockIDName;$HtmlLines.='" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockCollection->dependencyID;$HtmlLines.='">
                                    <div class="box-header">
                                        <h3 class="box-title">';$HtmlLines.= $Single_BlockCollection->Name;$HtmlLines.= '</h3>
                                    </div>
                                    <table class="table">';


                                    $Array_of_BlockRowCollections = Block_row::where('blockID','=',$Single_BlockCollection->blockID)->get();

                                    foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {

                                            

                                                
                                                    
                                                    if ($Single_BlockRowCollection->type =='table_head') {$HtmlLines.='<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='" ';}else{$HtmlLines.='<tr automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='"';}
                                                    $BlockrowIDName = $Single_BlockRowCollection->block_rowID;

                                                        $HtmlLines.='id="';$HtmlLines.=$BlockrowIDName;$HtmlLines.='">';
                                                
                                                    $Array_of_ColumnSetCollections= Column_set::where('block_rowID','=',$Single_BlockRowCollection->block_rowID)->get(); 

                                                        foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection ) {

                                                            $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;

                                                           
                                                                $HtmlLines.='<td   colspan="';


                                                                $HtmlLines.= $Single_ColumnSetCollection->col_span;



                                                                $HtmlLines.= '" id="';$HtmlLines.=$ColumnSetIDName;$HtmlLines.='"';
                                                                

                                                                        $fieldsetID = $Single_ColumnSetCollection->field_setID;


                                                                            $currentFieldsets = Field_set::where('field_setID','=',$fieldsetID)->get();
                                                                            foreach ($currentFieldsets as $currentFieldset ) {
                                                                                # code...
                                                                            
                                                                        
                                                                            //number,text,combo,multiplecombo,coolcombo,label,radio

                                                                            $typededuction = $currentFieldset->type;
                                                                            
                                                                            $fieldValueList = Field::where('field_setID','=',$currentFieldset->field_setID)->get()->keyBy('Value');
                                                                                switch ($typededuction) {

                                                                                    case "label": $HtmlLines.= '

                                                                                         style="vertical-align:middle">';

                                                                                    foreach ($fieldValueList as $fieldd ) {

                                                                                           

                                                                                        

                                                                                            $HtmlLines.= $fieldd->Label;


                                                                                                                    
                                                                                    
                                                                                    }
                                                                                    
                                          
                                                                                                  
                                                                                            break;

                                                                                    case "text":

                                                                                            $HtmlLines.= '

                                                                                         style="vertical-align:middle">';


                                                                                  

                                                                                        

                                                                                          $HtmlLines.= $datass->get($ColumnSetIDName)->Data;  


                                                                                                                    
                                                                                    
                                                                                                                                                                   
                                                                                                        

                                                                                            

                                                                                            break;

                                                                                    case "number":
                                                                                     $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
  

                                                                                   
                                                                                           
                                                                                        

                                                                                        $HtmlLines.= $datass->get($ColumnSetIDName)->Data;  


                                                                                                                    
                                                                                    
                                                                                

                                                                                            break;


                                                                                    case "radio":  
                                                                                     $HtmlLines.= '

                                                                                         style="vertical-align:middle">';    
                                                                                           $H = $datass->get($ColumnSetIDName)->Data;   

                                                                                            if ($H == null || $H=='Unentered' ) {

                                                                                                      $HtmlLines.="Unentered";
                                                                                               
                                                                                           
                                                                                            }else{

                                                                                             $HtmlLines.=$fieldValueList->get($H)->Label;
                                                                                            }
                                                                                            

                                                                                                                                                                         

                                                                                               
                                                                                        
                                                                                  
                                                                                                           

                                                                                            break;
                                                                                    case "combo":  $HtmlLines.= '

                                                                                         style="vertical-align:middle">';    
                                                                                           $H = $datass->get($ColumnSetIDName)->Data;   

                                                                                            if ($H == null || $H=='Unentered') {

                                                                                                      $HtmlLines.="Unentered";
                                                                                               
                                                                                           
                                                                                            }else{
                                                                                                 
                                                                                               $HtmlLines.= $fieldValueList->get($H)->Label;
                                                                                            }
                                                                                            

                                                                                           
                                                                                               

                                                                                               
                                                                                        
                                                                                  

                                                                                            break;
                                                                                     case "multiplecombo":  

                                                                                            $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                                                                                        
                                                                                          $H = $datass->get($ColumnSetIDName)->Data;   

                                                                                            if ($H == null || $H=='Unentered') {
                                                                                                
                                                                                                      $HtmlLines.="Unentered";
                                                                                               
                                                                                           
                                                                                            }else{

                                                                                                $vl =  explode(",",$H);

                                                                                                     foreach($vl as $vll) {


                                                                                                $HtmlLines.=$fieldValueList->get($vll)->Label;
                                                                                                $HtmlLines.=" ";

                                                                                            }
                                                                                            }
                                                                                  

                                                                                            break;
                                                                                     case "coolradio": 
                                                                                       $HtmlLines.= '

                                                                                         style="vertical-align:middle">';  

                                                                                          
                                                                                $H = $datass->get($ColumnSetIDName)->Data;   

                                                                                            if ($H == null || $H=='Unentered') {
                                                                                                
                                                                                                      $HtmlLines.=$H."Unentered";
                                                                                               
                                                                                           
                                                                                            }elseif( (string)(int) $H == $H) {
   

                                                                                                $HtmlLines.=$fieldValueList->get($H)->Label;
                                                                                            }
                                                                                            else{

                                                                                            	$HtmlLines.=$H;
                                                                                            }

                                                                                                                    
                                                                                    
                                                                                
                                                                                            break;

                                                                                    default: echo "dai era!";


                                                                                        }





                                                                                            }













                                                                        

                                                                
                                                                $HtmlLines.='</td>';
                                                            
                                                        }


                                                
                                        
                                                    $HtmlLines.='</tr>';
                                                

                                    }

                                        $HtmlLines.='</table> </div>';

  
}



                    
         $HtmlLines.='</Section>';

  





    }

return $HtmlLines;
                    
        
    





    }

	private function build($sv,$value){

		$loc = substr ($sv, 0,2);
		$ColID = array();
		$SelectedSurvey = $sv;
				$HtmlLines = '<!-- Main content -->';

				
				$Survs = Survey::where('surveyID','=',$SelectedSurvey)->get();

				if($value!==null){
				$TheAsses = assessments::where('Assessment_ID','=',$value)->first();
				$TheFacility = Facilities::where('FacilityCode','=',$TheAsses->Facility_ID)->first();
				
}
				$Secs = Section::where('surveyID','=',$SelectedSurvey)->get();
			      foreach($Secs as $Sec) {
				
			
			      	$HtmlLines .='
			      		 <section automaticallyVisibleIfIDChecked = "';$HtmlLines.=$Sec->dependencyID;$HtmlLines.='">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="';

                    $HtmlLines.= $Sec->identifier;
                   
                      $HtmlLines.='">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>';

                        $HtmlLines.=$Sec->name;


                        $HtmlLines.='</b></h2></center>
                        <br>
                        </div>
                        </div>
';


			if ($Sec->identifier=='Section1' && $value!=null) {


				$HtmlLines.='  <!-- Main content -->
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
                                                    <input value ="';$HtmlLines.=$TheFacility->FacilityName;$HtmlLines.='" type="text" class="form-control" id="InputFacilityName"
                                                    disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Type</label>
                                                    <input  value ="';$HtmlLines.=$TheFacility->Type;$HtmlLines.='"type="text" class="form-control" id="InputFacilityType"
                                                    placeholder="Enter type" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>Facility Tier</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->Tier;$HtmlLines.='" type="text" class="form-control" id="InputFacilityTier"
                                                    placeholder="Enter tier" disabled>
                                                </div>
                                                <br>
                                                <div class="col-xs-4">
                                                    <label>Owned By</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->Owner;$HtmlLines.='" type="text" class="form-control" id="InputFacilityOwner"
                                                    placeholder="Enter owner" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>County</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->County;$HtmlLines.='" type="text" class="form-control" id="InputFacilityCounty"
                                                    placeholder="Enter county" disabled>
                                                </div>
                                                <div class="col-xs-4">
                                                    <label>District/Sub-County</label>
                                                    <input value ="';$HtmlLines.=$TheFacility->District;$HtmlLines.='" type="text" class="form-control" id="InputFacilitySubCounty"
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
                                                <input type="text" class="form-control" id="AssessorName" name="AssessorName"  placeholder="Enter Name">
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" id="AssessorDesignation"  name="AssessorDesignation"  placeholder="Enter Designation">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" class="form-control" id="AssessorEmail" name="AssessorEmail" placeholder="Enter Email">
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="AssessorNumber" name="AssessorNumber"
                                                placeholder="Enter Phone Number">
                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <!-- /.box-body -->';

					switch ($loc) {
						case 'CH': $HtmlLines.='		
              
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
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
								break;
						case 'IM': $HtmlLines.='		
              
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
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile">
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




				';

								break;
						case 'MN': $HtmlLines.='		
              
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
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
							
							break;
						
						default:
							# code...
							break;
					}

				
				# code...
			} else {
				
			}
			







			      
			      		
	           $Array_of_BlockCollections =  Block::where('sectionID','=',$Sec->sectionID)->get();
	           			
	           	foreach($Array_of_BlockCollections as $Single_BlockCollection){

	           									           					
	           			
									$BlockIDName = $Single_BlockCollection->blockID;
	           				
	           				
	           						           							
	           						$HtmlLines.='

	           						<div class="box box-primary"  id="';$HtmlLines.=$BlockIDName;$HtmlLines.='" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockCollection->dependencyID;$HtmlLines.='">
                                    <div class="box-header">
                                        <h3 class="box-title">';$HtmlLines.= $Single_BlockCollection->Name;$HtmlLines.= '</h3>
                                    </div>
                                    <table class="table">';


	           						$Array_of_BlockRowCollections = Block_row::where('blockID','=',$Single_BlockCollection->blockID)->get();

	           						foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {

	           								

	           									
	           										
	           										if ($Single_BlockRowCollection->type =='table_head') {$HtmlLines.='<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='" ';}else{$HtmlLines.='<tr automaticallyVisibleIfIDChecked="';$HtmlLines.=$Single_BlockRowCollection->dependencyID;$HtmlLines.='"';}
	           										$BlockrowIDName = $Single_BlockRowCollection->block_rowID;

	           											$HtmlLines.='id="';$HtmlLines.=$BlockrowIDName;$HtmlLines.='">';
	           									
	           										$Array_of_ColumnSetCollections= Column_set::where('block_rowID','=',$Single_BlockRowCollection->block_rowID)->get(); 

	           											foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection ) {

	           												$ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
	           												
	           													$HtmlLines.='<td   colspan="';


	           													$HtmlLines.= $Single_ColumnSetCollection->col_span;



	           													$HtmlLines.= '" id="';$HtmlLines.=$ColumnSetIDName;$HtmlLines.='"';
	           													

	           															$fieldsetID = $Single_ColumnSetCollection->field_setID;


	           																$currentFieldsets = Field_set::where('field_setID','=',$fieldsetID)->get();
	           																foreach ($currentFieldsets as $currentFieldset ) {
	           																	# code...
	           																
	           															
	           																//number,text,combo,multiplecombo,coolcombo,label,radio

	           																$typededuction = $currentFieldset->type;
	           																unset($currentFieldset);
	           																$fieldValueList = Field::where('field_setID','=',$fieldsetID)->get();
	           																	switch ($typededuction) {
	           																		case "label":

	           																		foreach ($fieldValueList as $fieldd ) {

	           																				$HtmlLines.= '

	           																			 style="vertical-align:middle">';

	           																			

	           																			 	$HtmlLines.= $fieldd->Label;


                                             																		
	           																		
	           																		}
	           																		
                                          
	           																		              
	           																		        break;
	           																	    case "text":$HtmlLines.= 'style="vertical-align:middle">';
                                                                                    $ColID[] = $ColumnSetIDName;

	           																	    	 foreach ($fieldValueList as $fieldd ) {

	           																	    	 							
	           																	      	$fieldIDName = $ColumnSetIDName.$fieldd->field_ID;


	           																				$HtmlLines.= '
	           																				<div class="input-group">
                 																		   <input class="form-control" type="text" name ="';$HtmlLines.=$fieldIDName;$HtmlLines.='" id="';$HtmlLines.=$fieldIDName;$HtmlLines.='" value="Unentered">';    
                   																			if ($fieldd->Label!="") {
                   																			 $HtmlLines.='<span class="input-group-addon">';$HtmlLines.=$fieldd->Label;$HtmlLines.='</span>';
                   																			 } 
                																			  $HtmlLines.='</div> ';           

	           																	                        

                																			}

	           																	            break;

	           																	    case "number":  $HtmlLines.= 'style="vertical-align:middle">';
                                                                                    $ColID[] = $ColumnSetIDName;

	           																	    	 foreach ($fieldValueList as $fieldd ) {

	           																	    	 							
	           																	      	$fieldIDName = $ColumnSetIDName.$fieldd->field_ID;

	           																				$HtmlLines.= '
	           																				<div class="input-group">
                 																		   <input class="form-control" data-inputmask="&quot;mask&quot;: &quot;9999999&quot;" data-mask="" type="text" name ="';$HtmlLines.=$fieldIDName;$HtmlLines.='" id="';$HtmlLines.=$fieldIDName;$HtmlLines.='" value="0">';    
                   																			if ($fieldd->Label!="") {
                   																			 $HtmlLines.='<span class="input-group-addon">';$HtmlLines.=$fieldd->Label;$HtmlLines.='</span>';
                   																			 } 
                																			  $HtmlLines.='</div> ';           

	           																	                        

                																			}   

	           																	    		break;
	           																	    case "radio": $ColID[] = $ColumnSetIDName;		
                                                                                     $fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>

	           																	    					<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value = "Unentered" id ="';$HtmlLines.=$fieldName.'other';$HtmlLines.='" type="radio" style="display: none;" checked="">';
	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							  $HtmlLines.='<label>
                     																						  
                     																						

                     																						<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" type="radio">
                     																						 <x automaticallyVisibleIfIDChecked = "';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"></x>
                     																						 ';
                     																		  $HtmlLines.=$fieldd->Label.'&nbsp;&nbsp;';
                     																		  $HtmlLines.='</label>';
                   																														
          

	           																	    				 }

	           																	    				 		$HtmlLines.=' </div>';

	           																	    		break;
	           																	    case "combo":$ColID[] = $ColumnSetIDName;
                                                                                    $fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>                
                   																	 <select class="form-control select2 " style="width: 250px;" name="';$HtmlLines.=$fieldName;$HtmlLines.='" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
                   																	 <option value ="Unentered" id ="';$HtmlLines.=$fieldName."def";$HtmlLines.='"  style ="display:none;" selected=""></option>
                                                                                     

                                                                                     ';
	           																	    				
	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							$HtmlLines.='<option value ="';$HtmlLines.=$fieldValue;$HtmlLines.='" >'; $HtmlLines.=$fieldd->Label;$HtmlLines.='</option>
																					                     
																					                     ';

																					                  }
																					                 $HtmlLines.='   </select>
																					                  </div>';





	           																	    		break;
	           																	     case "multiplecombo":  $ColID[] = $ColumnSetIDName;
	           																	     						$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div>                
                   																	 <select class="form-control select2" multiple="6" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="';$HtmlLines.=$fieldName;$HtmlLines.='[]" id="';$HtmlLines.=$fieldName;$HtmlLines.='"> 
                   																	 		<option value ="Unentered" id ="';$HtmlLines.=$fieldName."def";$HtmlLines.='"  style ="display:none;" selected=""></option>
                   																	 ';
	           																	    				


	           																	    				 foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							$HtmlLines.='<option value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" >'; $HtmlLines.=$fieldd->Label;$HtmlLines.='</option>
																					                     
																					                     ';

																					                  }
																					                 $HtmlLines.='   </select>
																					                  </div>';   

	           																	    		break;
	           																	     case "coolradio":   $ColID[] = $ColumnSetIDName;

	           																	     					$fieldName = $ColumnSetIDName.$fieldsetID;
	           																	    					$HtmlLines.=' valign="baseline">
	           																	    					<div> 

	           																	    					<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value = "Unentered" id ="';$HtmlLines.=$fieldName.'other';$HtmlLines.='" type="radio" style="display: none;" checked="">';
;
	           																	    				foreach ($fieldValueList as $fieldd ) {



	           																	    				 	$fieldIDOnly = $ColumnSetIDName.$fieldd->field_ID;
	           																	    				 	$fieldValue = $fieldd->Value;
	           																	    				 	
	           																	    				 				
																							  $HtmlLines.='<label>
                     																						  
                     																						

                     																						<input name="';$HtmlLines.=$fieldName;$HtmlLines.='" value ="';$HtmlLines.=$fieldValue;$HtmlLines.='"id ="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='" type="radio">
                     																						<x automaticallyVisibleIfIDChecked = "';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"></x>
                     																						 ';
                     																		  $HtmlLines.=$fieldd->Label.'&nbsp;&nbsp;';
                     																		  $HtmlLines.='</label>';
                   																														
          

	           																	    				 }

	           																	    				 		$Other = 'other';
	           																	    				 	$HtmlLines.='<input class="form-control" type="text" name="';$HtmlLines.=$fieldName;$HtmlLines.='[]" id="';$HtmlLines.=$fieldName.$Other;$HtmlLines.='" automaticallyVisibleIfIDChecked="';$HtmlLines.=$fieldIDOnly;$HtmlLines.='"> </div>';
																										$HtmlLines.='<script>
																										$(function () {
																												    $(\'input[name='.$fieldName.']\').change(function () {
																												    	var radioValue = $("input[name='.$fieldName.']:checked").val();
																												        $(\'#'.$fieldName.$Other.'\').attr(\'value\',radioValue );

																												    });</script>';		
	           																	    		break;

	           																	    default: echo "dai era!";


	           																	     	}





	           																	     		}













	           															

	           													
	           													$HtmlLines.='</td>';
	           												
	           											}


	           									
	           							
	           										$HtmlLines.='</tr>';
	           									

	           						}

	           							$HtmlLines.='</table> </div>';

  
}



					
		 $HtmlLines.='</Section>';

  


      


	}
          

				//Adding requisite js

			if ($value != null) {
				return $HtmlLines;
				# code...
			} else {
				return $ColID;
			}
			
		
	}

}
