<?php namespace App\Tables;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class builder extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */




  public static function buildview($AssID, $act,$Participant) {
        
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
                                                <input type="text" class="asave form-control" id="AssessorName" name="AssessorName" value="' . $TheAssessor->Name . '" placeholder="Enter Name"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= ' required>
                                            </div>


                                            <div class="col-xs-3">
                                                <label>Designation</label>
                                                <input type="text" class="asave form-control" id="AssessorDesignation"  name="AssessorDesignation" value="' . $TheAssessor->Designation . '"  placeholder="Enter Designation"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= '  required>
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Email</label>
                                                <input type="email" class="asave form-control" id="AssessorEmail" name="AssessorEmail" value="' . $TheAssessor->Email . '" placeholder="Enter Email"  ';
                if ($act == 'show') {
                    $HtmlLines.= 'disabled';
                }
                $HtmlLines.= '>
                                            </div>

                                            <div class="col-xs-3">
                                                <label>Phone Number</label>
                                                <input type="text" class="asave form-control" id="AssessorNumber" name="AssessorNumber" value="' . $TheAssessor->Number . '"
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
                                                    <input type="text" class="asave form-control" value="' . ($Contacts->get('Facility Incharge')->Name) . '"id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail" value="' . ($Contacts->get('Facility Incharge')->Email) . '"  name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" value="' . ($Contacts->get('Facility Incharge')->Mobile) . '" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
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
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail" value="' . ($Contacts->get('MCH Incharge')->Email) . '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
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
                                                     <input type="hidden" class="asave form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '"name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail" value="' . ($Contacts->get('Maternity Incharge')->Email) . '" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
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
                                                    <input type="text" class="asave form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' . ($Contacts->get('OPD Incharge')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="' . ($Contacts->get('OPD Incharge')->Email) . '" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' . ($Contacts->get('OPD Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
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
                                                     <input type="hidden" class="asave form-control" value="Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeName" value="' . ($Contacts->get('Incharge')->Name) . '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' . ($Contacts->get('Incharge')->Name) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail"  value="' . ($Contacts->get('Incharge')->Email) . '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
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
                                                     <input type="hidden" class="asave form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail"  value="' . ($Contacts->get('MCH Incharge')->Email) . '"name="MCHInchargeEmail" placeholder="Enter Email"  ';
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
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail"  value="' . ($Contacts->get('Maternity Incharge')->Email) . '" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
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
                                                     <input type="hidden" class="asave form-control" value="Team Lead" id="OPDIncharge" Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' . ($Contacts->get('Team Lead')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' . ($Contacts->get('Team Lead')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="' . ($Contacts->get('Team Lead')->Email) . '" placeholder="Enter Email"  ';
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
                                                            <input class="asave form-control" id="HCWName" value="'.$Participant->Name_of_Participant.'" placeholder="Enter first name" type="text" disabled>
                                                        </div>
                                                        
                                                        <div class="col-xs-4">
                                                            <label>National ID</label>
                                                            <input class="asave form-control" id="HCWID" value="'.$Participant->id_Number.'" placeholder="Enter id" type="text" disabled>
                                                        </div>

                                                        <div class="col-xs-4">
                                                            <label>Phone Number</label>
                                                            <input class="asave form-control" id="HCWNumber" value="'.$Participant->mobile_number.'" placeholder="Enter number" type="text" disabled>
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
                                                     <input type="hidden" class="asave form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeName" value="' . ($Contacts->get('Facility Incharge')->Name) . '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail"  value="' . ($Contacts->get('Facility Incharge')->Email) . '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' . ($Contacts->get('Facility Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" name= "MCHInchargeName" value="' . ($Contacts->get('MCH Incharge')->Name) . '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail" value="' . ($Contacts->get('MCH Incharge')->Email) . '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile"  value="' . ($Contacts->get('MCH Incharge')->Mobile) . '"
                                                    placeholder="Enter Mobile"  ';
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
                                                     <input type="hidden" class="asave form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' . ($Contacts->get('Maternity Incharge')->Name) . '" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>


                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail" value="' . ($Contacts->get('Maternity Incharge')->Email) . '"  name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" value="' . ($Contacts->get('Maternity Incharge')->Mobile) . '"  name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
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
                        $HtmlLines.= '<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="'.$Single_BlockRowCollection->dependencyID.'" ';
                    } 
                    else {
                        $HtmlLines.= '<tr automaticallyVisibleIfIDChecked="'.$Single_BlockRowCollection->dependencyID.'"';
                    }
                    $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                    
                    $HtmlLines.= 'id="'.$BlockrowIDName.'">';
                    
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
                                                                                           <input class="form-control asave thenormal" type="text" name ="';
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
                                                                                            
                                                                                           <textarea class="form-control asave thenormal" type="text" name ="';
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
                                                                                           <input class="form-control asave thenormal" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" type="text" name ="';
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

                                                                                                        <input class = "thenormal asave" name="';
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
                                                $HtmlLines.= '" type="radio" checked class="asave">';
                                            } 
                                            else {
                                                $HtmlLines.= '<input name="';
                                                $HtmlLines.= $fieldName;
                                                $HtmlLines.= '" value ="';
                                                $HtmlLines.= $fieldValue;
                                                $HtmlLines.= '"id ="';
                                                $HtmlLines.= $fieldIDOnly;
                                                $HtmlLines.= '" type="radio" class ="asave">';
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
                                            
                                           if($H == '-51'){  $HtmlLines.= 'No information provided';

                                           } else{$HtmlLines.= $fieldValueList->get($H)->Label;
                                        }
                                      }
                                        else{

                                        }
                                    } 
                                    else {
                                      //combothatnow
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline">
                                        <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">   
                                        <select class="form-control select2 asave thenormal" style="width: 100%;" name="'.$fieldName.'" id="'.$fieldName.'" required data-parsley-error-message="Required"> 
                                        <option value ="" id ="'.$fieldName.'def"  style ="display:none;" ></option>';
                                        if($H == '-51'){
                                          $HtmlLines.= '<option class="rmselect" value ="-51" selected>No information provided</option>';
                                        }
                                        else{
                                          $HtmlLines.= '<option class="rmselect" value ="-51" >No information provided</option>';}
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            if ($fieldValue == $H) {
                                                $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'" selected>'.$fieldd->Label.'</option>';
                                            } 

                                            else {
                                                $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'" >'.$fieldd->Label.'</option>';
                                            }
                                        
                                      }
                                        $HtmlLines.= '</select> </div>';
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
                                                
                                                if (is_numeric($vll)) {
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
                                         <select  class="form-control select2 asave thenormal themultiple" multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'" data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                        
                                        foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                                       
                                                    
                                                    if (     (strpos($H, $fieldValue) !== false)           ) {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'" selected>'.$fieldd->Label.'</option>';
                                                    } 
                                                    else {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'">'.$fieldd->Label.'</option>';
                                                    }
                                                
                                            
                                        }
                                        $HtmlLines.= '</select></div>';
                                    }
                                    
                                    break;

                                      case "coolmultiplecombo":

                                    if($datass->get($ColumnSetIDName) == null) $H ="error";else $H =$datass->get($ColumnSetIDName)->Data;
                                    echo $H;
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
                                                
                                                if (is_numeric($vll)) {

                                                    $HtmlLines.= $fieldValueList->get((string)$vll)->Label;
                                                    $HtmlLines.= ",";
                                                }else{
                                                     $HtmlLines.= $vll;
                                                    $HtmlLines.= ",";


                                                }
                                            }
                                            
                                            $HtmlLines = rtrim($HtmlLines, ",");
                                        }
                                    } 
                                    else {
                                      //resume coolmultiplecombo
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                     $AjaxNames[]= $fieldName;
                                    $other = 'other';
                                    $hidden = 'hidden';
                                    $HtmlLines.= ' valign="baseline">
                                     <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">              
                                    <select class="form-control select2 themultiple thenormal coolmultiple asave" multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'" data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        $varother = substr(strrchr($H, ","), 1);
                                        if ($varother == '-1' ){}else{

                                        if (is_numeric($varother)) {$varother= -989;}

}
                                        
                                            if (     (strpos($H, $fieldValue) !== false)  ) {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" selected>'.$fieldd->Label.'</option> ';
                                                    } 
                                                    else{

                                            if (     (strpos($H, $varother) !== false) and $fieldValue == -1 ) {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$varother.'"id ="'.$fieldIDOnly.'" selected>'.$fieldd->Label.'</option> ';
                                                    } 


                                                    else {
                                                         $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'">'.$fieldd->Label.'</option> ';
                                                    }

                                                  }

                                      
                                       
                                    }
                                    
                                    $HtmlLines.= '</select>';

                                    if (  $varother == -989 || $varother==null ) {
                                      $HtmlLines.= '<input class="form-control asave coolhidden thenormal" coolstore="'.$fieldIDOnly.'" id="'.$fieldName.$other.'"  style="display:none;" type="text" style="width: 100%;" > </div>';
                                    } else {
                                      if ($varother == -1){$varother = null;}
                                     $HtmlLines.= '<input class="form-control asave coolhidden thenormal" coolstore="'.$fieldIDOnly.'" id="'.$fieldName.$other.'" value="'.$varother.'" type="text" style="width: 100%;" required> </div>';
                                    }
                                    


                                    
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
                                            echo $H;
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
                                        $HtmlLines.= ' valign="baseline"><div><p>
                                        <input class="thenormal asave" name="'.$fieldName.'" value = "" id ="'.$fieldName.'other" type="radio" style="display: none;" checked="" data-parsley-error-message="Required" required>';
                                       
                                        if(is_numeric($H) ){
                                       foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            $HtmlLines.= '<label>';

                                            if ($fieldValue == $H) {
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio"  class="asave" checked>';
                                            
                                            } 
                                         
                                            else{
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" class="asave" >';
                                                }
                                            
                                            $HtmlLines.= ' <x coolradio = "'.$fieldIDOnly.'"></x>'.$fieldd->Label.'&nbsp;&nbsp;</label>';

                                        }
                                         $H = '';
                                      }
                                      else {
                                         foreach ($fieldValueList as $fieldd) {
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            $HtmlLines.= '<label>';

                                            if ($fieldValue == -1 ) {
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$H.'"id ="'.$fieldIDOnly.'" type="radio"  class="asave" checked>';
                                            
                                            } 
                                         
                                            else{
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" class="asave" >';
                                                }
                                            
                                            $HtmlLines.= ' <x coolradio = "'.$fieldIDOnly.'"></x>'.$fieldd->Label.'&nbsp;&nbsp;</label>';
                                           
                                        }
                                      }


                                        
                                        $Other = 'other';
                                        $HtmlLines.= '</p> <input coolstore = "'.$fieldIDOnly.'" class="form-control thenormal coolhidden asave" value="' . $H . '" type="text" id="'.$fieldName . $Other.'" coolradio="'.$fieldIDOnly.'" data-parsley-error-message="Required" > </div>';
                                       
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



        public static function build($sv, $value,$Participant) {
        
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
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name" required>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  name="FacilityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile" required>
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
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  name="MCHInchargeEmail" placeholder="Enter Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" placeholder="Enter Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
                                                     <input type="hidden" class="form-control" value="Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name" >
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
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name" >
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name" required>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="FacilityInchargeEmail"  name="FacilityInchargeEmail" placeholder="Enter Email">
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" 
                                                    placeholder="Enter Mobile" required>
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
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MCHInchargeEmail"  name="MCHInchargeEmail" placeholder="Enter Email">
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
                                                    <label>EMAIL</label>
                                                    <input type="email" class="form-control" id="MaternityInchargeEmail"  name="MaternityInchargeEmail" placeholder="Enter Email">
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile">
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
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">'.$fieldd->Label;
                                    }
                                    
                                    break;

                                case "text":
                                    
                                    $HtmlLines.= 'style="vertical-align:middle"  >
                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID .'" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {

                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                          $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '<div class="input-group">
                                       <input class="form-control asave thenormal" type="text" name ="'.$fieldIDName.'" id="'.$fieldIDName.'" value="" data-parsley-error-message="Required" required>';
                                        if ($fieldd->Label != "") {
                                            $HtmlLines.= '<span class="input-group-addon">'.$fieldd->Label.'</span>';
                                        }
                                        $HtmlLines.= '</div> ';
                                    }
                                    $HtmlLines.= '</div>';
                                    
                                    break;

                                case "textarea":
                                    $HtmlLines.= 'style="vertical-align:middle">
                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                        $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '<textarea class="form-control asave thenormal" type="text" name ="'.$fieldIDName.'" id="'.$fieldIDName.'" value="" data-parsley-error-message="Required" required></textarea>';
                                    }
                                    $HtmlLines.= '</div>';
                                    
                                    break;

                                case "number":
                                    $HtmlLines.= 'style="vertical-align:middle">
                                    <div  automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                        $AjaxNames[]= $fieldIDName;
                                        $HtmlLines.= '<div class="input-group">
                                        <input class="form-control asave thenormal" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" type="text" name ="'.$fieldIDName.'" id="'.$fieldIDName.'" value="" required data-parsley-error-message="Required">';
                                       
                                        if ($fieldd->Label != "") {
                                            $HtmlLines.= '<span class="input-group-addon">'.$fieldd->Label.'</span>';
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
                                    <div automaticallyVisibleIfIDChecked="'.$Single_ColumnSetCollection->dependencyID.'">
                                    <input class = " asave thenormal" name="'.$fieldName.'" value = "" id ="'.$fieldName.'other" type="radio" style="display: none;" checked=""  data-parsley-error-message="Required" required>';
                                   
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<label> <input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" class="asave">
                                        <x automaticallyVisibleIfIDChecked = "'.$fieldIDOnly.'"></x>'.$fieldd->Label.'&nbsp;&nbsp;</label>';
                                    }                                    
                                    $HtmlLines.= ' </div>';
                                    
                                    break;

                                case "combo":
                                    $ColID[] = $ColumnSetIDName;
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;

                                    $HtmlLines.= 'valign="baseline">
                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '"> 
                                    <select class="form-control select2 asave thenormal" style="width: 100%;" name="'.$fieldName.'" id="'.$fieldName.'" required data-parsley-error-message="Required"> 
                                    <option class="rmselect" value ="" id ="'.$fieldName.'def"  style ="display:none;" selected="" hidden></option>
                                    <option class="rmselect" value ="-51" id ="'.$fieldName.'noinfo"  >No information provided</option>';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option class="rmselect" id="'.$fieldIDOnly.'" value ="'.$fieldValue.'" >'.$fieldd->Label.'</option>';
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
                                    <select  class="form-control select2 asave thenormal themultiple" multiple="multiple" style="width: 100%;" data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'"   data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" >'.$fieldd->Label.'</option>';
                                    }
                                    $HtmlLines.= ' </select> </div>';
                                    
                                    break;

                                case "coolmultiplecombo":
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                     $AjaxNames[]= $fieldName;
                                    $other = 'other';
                                    $hidden = 'hidden';
                                    $HtmlLines.= ' valign="baseline">
                                     <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '">              
                                    <select class="form-control select2 themultiple thenormal coolmultiple asave" multiple="multiple" style="width: 100%;"data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'" data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                    
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'">'.$fieldd->Label.'</option> ';
                                    }
                                    
                                    $HtmlLines.= '</select>     
                                    <input class="form-control asave coolhidden thenormal" coolstore="'.$fieldIDOnly.'" id="'.$fieldName.$other.'"  style="display:none;" type="text" style="width: 100%;" > </div>';
                                    
                                    break;

                                case "coolradio":
                                    $ColID[] = $ColumnSetIDName;
                                    
                                    $fieldName = $ColumnSetIDName . $fieldsetID;
                                      $AjaxNames[]= $fieldName;
                                    $HtmlLines.= 'valign="baseline">
                                                 <div> <p> <input class ="asave thenormal"  name="'.$fieldName.'" value = "" id ="'.$fieldName.'other" type="radio" style="display: none;" checked="" data-parsley-error-message="Required" required>';
                                    foreach ($fieldValueList as $fieldd) {
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        
                                        $HtmlLines.= '<label> <input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" class="asave" >
                                        <x coolradio = "'.$fieldIDOnly.'"></x>'.$fieldd->Label.'&nbsp;&nbsp;</label>';
                                    }
                                    
                                    $Other = 'other';
                                    $HtmlLines.= '</p> <input class="form-control coolhidden thenormal asave"  coolstore="'.$fieldIDOnly.'" type="text" id="'.$fieldName.$Other.'" coolradio="'.$fieldIDOnly.'" data-parsley-error-message="Required" > </div>';
                         
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
