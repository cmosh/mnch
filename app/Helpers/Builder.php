<?php namespace App\Helpers;

use App\Models\Participants;
use App\Models\Survey;
use App\Models\Section;
use App\Models\Assessor;
use App\Models\Contact;
use App\Models\Assessments;

use Cache;


class Builder {

	


  public static function build($AssID, $act,$Participant,$color="primary") {

  if ($Participant == null){
           $Participant=  new Participants;
         
        }

  

  $Contacts = Contact::where('AssID', '=', $AssID)->get()->keyBy('Cadre');


       
        
        

          $TheAsses = Assessments::where('Assessment_ID', '=', $AssID)->first();

          $datass = $TheAsses->Data;
    
     $Survey = Survey::where('surveyID', '=', $TheAsses->Survey)->first();



        $TheAssessor = Assessor::where('AssID', '=', $AssID)->first();
        if ($TheAssessor == null){
           $TheAssessor=  new Assessor;        
        }
       

        
        $loc = substr($TheAsses->Survey, 0, 2);
        
        $HtmlLines = '<!-- Main content -->

        <div id="loader"  style="display:none"> 
  <div class="callout callout-warning" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Submitting, Please Wait.</h3>
  <p>Once this completes the assessment cannot be edited</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-refresh fa-spin fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>


       
       <div id="saving"  style="display:none"> 
  <div class="callout callout-warning" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Saving Please Wait  </h3>
  <p>Please go through the form as we save it for you.</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-refresh fa-spin fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>

    <div id="saved"  style="display:none"> 
  <div class="callout callout-success" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Success Review Content Before Submitting</h3>
  <p>Your progress has been saved.</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-save fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>

    <div id="loaded"  style="display:none"> 
  <div class="callout callout-success" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Success!</h3>
  <p>Your submission has been made!.Please wait as we redirect you to begin the next assessment.</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-save fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>

     <div id="notsaved"  style="display:none"> 
  <div class="callout callout-danger" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Save Failed</h3>
  <p>Your work was not saved, please check your internet connection and then try again.</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-warning fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>

      <div id="notloaded"  style="display:none"> 
  <div class="callout callout-danger" >
  <table>
  <tr >
  <td  width="100%">
  <h3>Submission Failed</h3>
  <p>Your work was not submitted, please check your internet connection and then try again.</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-warning fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
    </div>
    </div>';
        
        

        

      

         $entire = Cache::rememberForever('builder_'.$TheAsses->Survey,function()use($Survey){

               return $Survey->load('sections.blocks.block_rows.column_sets.field_set.fields')->toArray();
            });

         self::objectify($entire);

          $Secs = $entire->sections;

        foreach ($Secs as $Sec) {
            self::objectify($Sec);
            $HtmlLines.= '<section automaticallyVisibleIfIDChecked = "' . $Sec->dependencyID . '">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box box-'.$color.' " id="' . $Sec->identifier . '">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>' . $Sec->name . '</b></h2></center>
                        <br>
                        </div>
                        </div>';
            
            if ($Sec->identifier == 'Section1') {


                
                $HtmlLines.= '  <!-- Main content -->
                <div clas="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <!-- left column -->
                           
                                <!-- general form elements -->
                                
                                <div id="thefacility" class="box box-'.$color.'">
                                </div>
                                <div>
                                <!-- /.box -->

                                <!-- /.box -->
                                ';
                                //Check if survey version is MNHV1 to add/remove assessor block
                                if($Survey!='MNHV1'){
                                $HtmlLines.='<div class="box box-'.$color.'">
                                    
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
                                    
                                    <!-- /.box-body -->';

                                     $AjaxNames[]= "AssessorName";
                                    $AjaxNames[]= "AssessorDesignation";
                                    $AjaxNames[]= "AssessorEmail";
                                    $AjaxNames[]= "AssessorNumber";

                                  }//Close if statement for MNHV1 Assessor Block



                
                switch ($loc) {
                    case 'CH':
                        $HtmlLines.= '        
              
                                    <!-- Form Element sizes -->
                                    <div class="box box-'.$color.'">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" value="';
                    if ($act != 'open') $HtmlLines.=($Contacts->get('Facility Incharge')->name); 
                    $HtmlLines.='"id="FacilityInchargeName" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('Facility Incharge')->Email) ;  $HtmlLines.='"  name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" value="' ;if ($act != 'open')$HtmlLines.=($Contacts->get('Facility Incharge')->Mobile) ;  $HtmlLines.='" name="FacilityInchargeMobile" 
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
                                                <div class="col-xs-3">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('MCH Incharge')->Name) ; $HtmlLines.= '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('MCH Incharge')->Email) ;  $HtmlLines.= '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' ;if ($act != 'open')$HtmlLines.=($Contacts->get('MCH Incharge')->Mobile);  $HtmlLines.='"
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
                                                <div class="col-xs-3">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('Maternity Incharge')->Name) ;  $HtmlLines.= '"name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail" value="' ;if ($act != 'open')$HtmlLines.=($Contacts->get('Maternity Incharge')->Email) ;  $HtmlLines.='" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" name="MaternityInchargeMobile" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('Maternity Incharge')->Mobile) ;  $HtmlLines.='"
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
                                                <div class="col-xs-3">
                                                    <label>OPD in Charge</label>
                                                     <input type="hidden" class="form-control" value="OPD Incharge" id="OPDIncharge"   Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' ;if ($act != 'open')$HtmlLines.=($Contacts->get('OPD Incharge')->Name) ;  $HtmlLines.='" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('OPD Incharge')->Email) ;  $HtmlLines.='" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' ;if ($act != 'open') $HtmlLines.=($Contacts->get('OPD Incharge')->Mobile) ; $HtmlLines.= '"
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
                                    <div class="box box-'.$color.'">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeName" value="' ;if (null !== ($Contacts->get('Incharge'))) $HtmlLines.=($Contacts->get('Incharge')->Name) ; $HtmlLines.= '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' ;if (null !==($Contacts->get('Incharge')))$HtmlLines.=($Contacts->get('Incharge')->Name) ;  $HtmlLines.= '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail"  value="' ;if (null !==($Contacts->get('Incharge'))) $HtmlLines.=($Contacts->get('Incharge')->Email) ;  $HtmlLines.= '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
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
                                                <div class="col-xs-3">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" value="' ;if (null !==($Contacts->get('MCH Incharge'))) $HtmlLines.=($Contacts->get('MCH Incharge')->Name) ; $HtmlLines.= '" name= "MCHInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile" value="' ;if (null !==($Contacts->get('MCH Incharge'))) $HtmlLines.=($Contacts->get('MCH Incharge')->Mobile) ;  $HtmlLines.='"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail"  value="' ;if (null !==($Contacts->get('MCH Incharge'))) $HtmlLines.=($Contacts->get('MCH Incharge')->Email) ;  $HtmlLines.= '"name="MCHInchargeEmail" placeholder="Enter Email"  ';
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
                                                <div class="col-xs-3">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' ;if (null !==($Contacts->get('Maternity Incharge'))) $HtmlLines.=($Contacts->get('Maternity Incharge')->Name) ;  $HtmlLines.='" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" value="' ;if (null !==($Contacts->get('Maternity Incharge'))) $HtmlLines.=($Contacts->get('Maternity Incharge')->Mobile) ;  $HtmlLines.= '"name="MaternityInchargeMobile" 
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail"  value="' ;if (null !==($Contacts->get('Maternity Incharge'))) $HtmlLines.=($Contacts->get('Maternity Incharge')->Email) ;  $HtmlLines.= '" name="MaternityInchargeEmail" placeholder="Enter Email"  ';
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
                                                <div class="col-xs-3">
                                                    <label>Team Lead</label>
                                                     <input type="hidden" class="asave form-control" value="Team Lead" id="OPDIncharge" Name="OPDIncharge" placeholder="Enter Name">
                                                </div>
                                                 <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeName" name= "OPDInchargeName" value="' ;if (null !==($Contacts->get('Team Lead'))) $HtmlLines.=($Contacts->get('Team Lead')->Name) ;  $HtmlLines.= '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="OPDInchargeMobile" name="OPDInchargeMobile" value="' ;if (null !==($Contacts->get('Team Lead'))) $HtmlLines.=($Contacts->get('Team Lead')->Mobile) ;  $HtmlLines.= '"
                                                    placeholder="Enter Mobile"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="OPDInchargeEmail"  name="OPDInchargeEmail" value="'  ;if (null !==($Contacts->get('Team Lead'))) $HtmlLines.=($Contacts->get('Team Lead')->Email) ;  $HtmlLines.= '" placeholder="Enter Email"  ';
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


<div class="box box-'.$color.'">
                                                <div class="box-body">

                                                    <div class="box-header">
                                                        <h3 class="box-title">HCW Profile(Existing Info)</h3>
                                                    </div>

                                                <div class="row">

                                                        <div class="col-xs-4">
                                                            <label>Name</label>
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
                                    <div class="box box-'.$color.'">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <label>CADRE</label>
                                                    <br>
                                                    <label>Facility Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="Facility Incharge" id="FacilityIncharge" Name="FacilityIncharge" placeholder="Enter Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeName" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Facility Incharge')->Name) ;  $HtmlLines.= '" name= "FacilityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= ' required>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="FacilityInchargeEmail"  value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Facility Incharge')->Email) ;  $HtmlLines.= '" name="FacilityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="FacilityInchargeMobile" name="FacilityInchargeMobile" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Facility Incharge')->Mobile) ;  $HtmlLines.= '"
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
                                                <div class="col-xs-3">
                                                    <label>MCH  Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="MCH Incharge" id="MCHIncharge" Name="MCHIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeName" name= "MCHInchargeName" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('MCH Incharge')->Name) ;  $HtmlLines.= '" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MCHInchargeEmail" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('MCH Incharge')->Email) ;  $HtmlLines.= '" name="MCHInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MCHInchargeMobile" name="MCHInchargeMobile"  value="' ;if($act!='open') $HtmlLines.=($Contacts->get('MCH Incharge')->Mobile);  $HtmlLines.=  '"
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
                                                <div class="col-xs-3">
                                                    <label>Maternity-Incharge</label>
                                                     <input type="hidden" class="asave form-control" value="Maternity Incharge" id="MaternityIncharge" Name="MaternityIncharge" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>NAME</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeName" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Maternity Incharge')->Name) ;$HtmlLines.=  '" name= "MaternityInchargeName" placeholder="Enter Name"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>


                                                 <div class="col-xs-3">
                                                    <label>EMAIL</label>
                                                    <input type="email" class="asave form-control" id="MaternityInchargeEmail" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Maternity Incharge')->Email) ;$HtmlLines.=  '"  name="MaternityInchargeEmail" placeholder="Enter Email"  ';
                        if ($act == 'show') {
                            $HtmlLines.= 'disabled';
                        }
                        $HtmlLines.= '>
                                                </div>

                                                <div class="col-xs-3">
                                                    <label>MOBILE</label>
                                                    <input type="text" class="asave form-control" id="MaternityInchargeMobile" value="' ;if($act!='open') $HtmlLines.=($Contacts->get('Maternity Incharge')->Mobile); $HtmlLines.=  '"  name="MaternityInchargeMobile" 
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
            
           // $Array_of_BlockCollections = Block::where('sectionID', '=', $Sec->sectionID)->get();
            $Array_of_BlockCollections = $Sec->blocks;

            foreach ($Array_of_BlockCollections as $Single_BlockCollection) {
                self::objectify($Single_BlockCollection);
                $BlockIDName = $Single_BlockCollection->blockID;
                
                $HtmlLines.= '

                                    <div class="box box-'.$color.'"  id="' . $BlockIDName . '" automaticallyVisibleIfIDChecked="' . $Single_BlockCollection->dependencyID . '">
                                    <div class="box-header">
                                        <h3 class="box-title">' . $Single_BlockCollection->name . '</h3>
                                    </div>
                                    <table class="table">';
                
                //$Array_of_BlockRowCollections = Block_row::where('blockID', '=', $Single_BlockCollection->blockID)->get();
                
                $Array_of_BlockRowCollections = $Single_BlockCollection->block_rows;

                foreach ($Array_of_BlockRowCollections as $Single_BlockRowCollection) {
                     self::objectify($Single_BlockRowCollection);
                    if ($Single_BlockRowCollection->type == 'table_head') {
                        $HtmlLines.= '<tr style="font-weight:bold" automaticallyVisibleIfIDChecked="'.$Single_BlockRowCollection->dependencyID.'" ';
                    } 
                    else {
                        $HtmlLines.= '<tr automaticallyVisibleIfIDChecked="'.$Single_BlockRowCollection->dependencyID.'"';
                    }
                    $BlockrowIDName = $Single_BlockRowCollection->block_rowID;
                    
                    $HtmlLines.= 'id="'.$BlockrowIDName.'">';
                    
                    // $Array_of_ColumnSetCollections = Column_set::where('block_rowID', '=', $Single_BlockRowCollection->block_rowID)->get();
                    $Array_of_ColumnSetCollections = $Single_BlockRowCollection->column_sets;

                    foreach ($Array_of_ColumnSetCollections as $Single_ColumnSetCollection) {
                         self::objectify($Single_ColumnSetCollection);
                        $ColumnSetIDName = $Single_ColumnSetCollection->column_setID;
                        
                        $HtmlLines.= '<td   colspan="';
                        
                        $HtmlLines.= $Single_ColumnSetCollection->col_span;
                        
                        $HtmlLines.= '" id="';
                        $HtmlLines.= $ColumnSetIDName;
                        $HtmlLines.= '"';
                        
                        $fieldsetID = $Single_ColumnSetCollection->field_setID;
                        
                        $currentFieldset = $Single_ColumnSetCollection->field_set;
                      
                            // echo  $Single_ColumnSetCollection->column_setID;
                            // echo $Single_ColumnSetCollection->field_setID;
                      //  foreach ($currentFieldsets as $currentFieldset) {
                            
                            // code...
                            
                            //number,text,combo,multiplecombo,coolcombo,label,radio
                            
                         
                          $typededuction = $currentFieldset['type'];
                          $fieldValueList = collect($currentFieldset['fields'])->keyBy('Value');
                          self::objectify($fieldValueList);
                              if ($act == 'show')  $ColID = 0;
                           

                            switch ($typededuction) {
                                case "label":

                              

                                    $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                    
                                    foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                        
                                        $HtmlLines.= $fieldd->Label;
                                    }
                                    
                                    break;

                                case "text":
                                    if ($act == 'show') {


                                        
                                        // code...
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">';
                                        
                                       
                                            
                                            $HtmlLines.=  $datass[$ColumnSetIDName];
                                        
                                    } 
                                    else {
                                        
                                        //saving-text
                       $HtmlLines.= 'style="vertical-align:middle"  > <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                             $dts = $datass[$ColumnSetIDName];
                                            
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '<div class="input-group">
                                            <input class="form-control asave thenormal '.$Single_ColumnSetCollection->class.' " type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' .$dts. '" required data-parsley-error-message="Required">';
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
                                        
                                        $HtmlLines.= ' style="vertical-align:middle">';
                                        
                                       
                                            
                                             $HtmlLines.=  $datass[$ColumnSetIDName];
                                      
                                    } 
                                    else {
                                        
                                        //saving-textarea
                                        
                                        $HtmlLines.= 'style="vertical-align:middle"  >
                                                                                    <div automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                         $dts = $datass[$ColumnSetIDName];

                                        foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                            
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '
                                                                                            
                                                                                           <textarea class="form-control asave thenormal" type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' . $dts. '" required data-parsley-error-message="Required"></textarea>';
                                        }
                                        $HtmlLines.= '</div>';
                                    }
                                    
                                    break;

                                case "number":
                                    if ($act == 'show') {
                                        
                                        // code...
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">';
                                        
                                      
                                            
                                          $HtmlLines.=  $datass[$ColumnSetIDName];
                                        
                                    } 


                                    else {
                                        
                                        //saving-number
                                        $HtmlLines.= 'style="vertical-align:middle" >
                                                                                    <div  automaticallyVisibleIfIDChecked="' . $Single_ColumnSetCollection->dependencyID . '" >';
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                           $dts = $datass[$ColumnSetIDName];
                                            $fieldIDName = $ColumnSetIDName . $fieldd->field_ID;
                                             $AjaxNames[]= $fieldIDName;
                                            $HtmlLines.= '
                                                                                            <div class="input-group">
                                                                                           <input class="form-control asave thenormal" data-inputmask="&quot;mask&quot;: &quot;9999&quot;" data-mask="" type="text" name ="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" id="';
                                            $HtmlLines.= $fieldIDName;
                                            $HtmlLines.= '" value="' . $dts . '" required data-parsley-error-message="Required">';
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
                                    
                                    $H = $datass[$ColumnSetIDName];
                                    if ($act == 'show') {
                                        
                                        // code...
                                        $HtmlLines.= 'style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == ' ' || is_numeric($H) == false) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        elseif ($H == 0) {
                                            
                                            $HtmlLines.= $H;
                                        }
                                        elseif ($H == -51) {
                                            
                                            $HtmlLines.= 'No information provided';
                                        } 
                                        else {
                                            $HtmlLines.= $fieldValueList[$H]['Label'];
                                        }
                                    } 
                                    else {
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline"><div automaticallyVisibleIfIDChecked="'. $Single_ColumnSetCollection->dependencyID .'">
                                        <input class = "thenormal asave" name="'.$fieldName.'" value = "" id ="'.$fieldName.'other" type="radio" style="display: none;" checked=""required data-parsley-error-message="Required">';
                                        
                                        foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                            $HtmlLines.= '<label>';
                                            
                                            if ($fieldValue == $H) {
                                                
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" checked class="asave">';
                                            } 
                                            else {
                                                $HtmlLines.= '<input name="'.$fieldName.'" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" type="radio" class ="asave">';
                                            }
                                            
                                            $HtmlLines.= ' <x automaticallyVisibleIfIDChecked = "'.$fieldIDOnly.'"></x>'.$fieldd->Label .'&nbsp;&nbsp;'.'</label>';
                                        }

                                        $HtmlLines.='<label>';
                                        if($H == '-51'){
                                          
                                           $HtmlLines.= '<input name="'.$fieldName.'" value ="-51"id ="'.$fieldName.'noinfo" type="radio" checked class="asave">';
                                        }
                                        else{
                                          $HtmlLines.= '<input name="'.$fieldName.'" value ="-51"id ="'.$fieldName.'noinfo" type="radio" class="asave">';}

                                          $HtmlLines.= ' <x automaticallyVisibleIfIDChecked = "'.$fieldName.'noinfo"></x>No information provided</label>';

                                        
                                        $HtmlLines.= ' </div>';
                                    }
                                    
                                    break;

                                case "combo":
                                   $H = $datass[$ColumnSetIDName];
                                    
                                    if ($act == 'show') {
                                        $HtmlLines.= '

                                                                                         style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == ' ' || is_numeric($H) == false) {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        else if(is_numeric($H) == true){
                                            
                                           if($H == '-51'){  $HtmlLines.= 'No information provided';

                                           } else{$HtmlLines.= $fieldValueList[$H]['Label'];
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
      self::objectify($fieldd); 
                                            
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
                                    $H = $datass[$ColumnSetIDName];
                                    if ($act == 'show') {
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">';
                                        if ($H == null || $H == ' ' ||$H =='error') {
                                            $HtmlLines.= $H;
                                        } 
                                        else {
                                            
                                            $vl =$H;
                                            
                                            foreach ($vl as $vll) {
                                                
                                                if (is_numeric($vll)) {
                                                    $HtmlLines.= $fieldValueList[$vll]['Label'];
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
                                         <select  class="form-control select2 asave thenormal themultiple" multiple="multiple" style="width: 50%;"data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'" data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                        
                                        foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                            
                                            $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                            $fieldValue = $fieldd->Value;
                                            
                                                       
                                                    

                                                    if (in_array($fieldValue, (array)$H) ) {
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

                                    $H = $datass[$ColumnSetIDName];
                                   // echo $H;
                                    if ($act == 'show') {
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">';                                       
                                        
                                        if ($H == null || $H == ' ' ||$H =='error') {
                                            
                                            $HtmlLines.= $H;
                                        } 
                                        else {
                                            
                                            $vl = $H;
                                            
                                            foreach ($vl as $vll) {
                                                
                                                if (is_numeric($vll)) {
                                                    // echo($fieldValueList);
                                                    $HtmlLines.= $fieldValueList[$vll]['Label'];
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
                                    <select class="form-control select2 themultiple thenormal coolmultiple asave" multiple="multiple" style="width: 50%;"data-placeholder="Multiple Selection Allowed"  name="'.$fieldName.'[]" id="'.$fieldName.'" data-parsley-mincheck="1" data-parsley-error-message="Required" required>';
                                    
                                    foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                        
                                        $fieldIDOnly = $ColumnSetIDName . $fieldd->field_ID;
                                        $fieldValue = $fieldd->Value;
                                        $H2 = implode(",", (array)$H);
                                        $varother = substr(strrchr($H2, ","), 1);                                        
                                        if ($varother == '-1' ){}else{

                                        if (is_numeric($varother)) {$varother= '-989';}

}
                                        
                                            if (in_array($fieldValue, (array)$H) ) {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'" selected>'.$fieldd->Label.'</option> ';
                                                    } 
                                                    else{

                                            if (  (in_array($varother, (array)$H) ) and $fieldValue == -1 ) {
                                                        $HtmlLines.= '<option class="rmselect" value ="'.$varother.'"id ="'.$fieldIDOnly.'" selected>'.$fieldd->Label.'</option> ';
                                                    } 


                                                    else {
                                                         $HtmlLines.= '<option class="rmselect" value ="'.$fieldValue.'"id ="'.$fieldIDOnly.'">'.$fieldd->Label.'</option> ';
                                                    }

                                                  }

                                      
                                       
                                    }
                                    
                                    $HtmlLines.= '</select>';

                                    if (  $varother == -989 || $varother==null ) {
                                      $HtmlLines.= '<input class="form-control asave coolhidden " coolstore="'.$fieldIDOnly.'" id="'.$fieldName.$other.'"  style="display:none;" type="text" placeholder="Specify" style="width: 100%;" > </div>';
                                    } else {
                                      if ($varother == -1){$varother = null;}
                                     $HtmlLines.= '<input class="form-control asave coolhidden " coolstore="'.$fieldIDOnly.'" id="'.$fieldName.$other.'" value="'.$varother.'" type="text" placeholder="Specify" style="width: 100%;"> </div>';
                                    }
                                    


                                    
                                  }

                                    break;


                                case "coolradio":
                                     $H = $datass[$ColumnSetIDName];
                                    if ($act == 'show') {
                                        
                                        $HtmlLines.= 'style="vertical-align:middle">';
                                        
                                        if ($H == null || $H == '' || $H == ' ' || is_numeric($H) == false) {
                                            
                                            if(is_array($H)){
                                              foreach ($H as $hh) {
                                               $HtmlLines.= $fieldValueList[$hh]['Label'];
                                            }
                                            }
                                            
                                            else{
                                            // $HtmlLines.= $fieldValueList[$H]['Label'];
                                          }
                                        } 
                                        elseif ((string)(int)$H == $H) {
                                            //echo $H;
                                          if($H==-51) $HtmlLines .= 'No information provided'; 

                                          else

                                            $HtmlLines.= $fieldValueList[$H]['Label'];
                                        } 
                                        else {
                                            
                                            $HtmlLines.= $H;
                                        }
                                    } 
                                    else {
                                        
                                        $ColID[] = $ColumnSetIDName;
                                        
                                        $fieldName = $ColumnSetIDName . $fieldsetID;
                                        $AjaxNames[]= $fieldName;
                                        $HtmlLines.= ' valign="baseline"><div><p><input class="thenormal asave" name="'.$fieldName.'" value = "" id ="'.$fieldName.'other" type="radio" style="display: none;" checked="" data-parsley-error-message="Required" required>';
                                       
                                        if(is_numeric($H) ){
                                       foreach ($fieldValueList as $fieldd) {
      self::objectify($fieldd); 
                                            
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
      self::objectify($fieldd); 
                                            
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


                                       $HtmlLines.='<label>';
                                         
                                        if($H == '-51'){
                                          
                                           $HtmlLines.= '<input name="'.$fieldName.'" value ="-51"id ="'.$fieldName.'noinfo" type="radio" checked class="asave">';
                                        }
                                        else{
                                          $HtmlLines.= '<input name="'.$fieldName.'" value ="-51"id ="'.$fieldName.'noinfo" type="radio" class="asave">';}

                                          $HtmlLines.= ' <x coolradio = "'.$fieldName.'noinfo"></x>No information provided</label>';

                                        
                                        $HtmlLines.= ' </div>';


                                        
                                        $Other = 'other';
                                        $HtmlLines.= '</p> <input coolstore = "'.$fieldIDOnly.'" class="form-control thenormal coolhidden asave" value="' . $H . '" placeholder="Specify" type="text" id="'.$fieldName . $Other.'" coolradio="'.$fieldIDOnly.'"> </div>';
                                       
                                        }
                                    
                                    break;

                                default:
                                $HtmlLines.="error";
                                    // echo "dai era!";
                            
                        }
                        
                        $HtmlLines.= '</td>';
                    }
                    
                    $HtmlLines.= '</tr>';
                }
                
                $HtmlLines.= '</table> </div>';
            }
            
            $HtmlLines.= '</Section>';
        }
       if(!isset($ColID))$ColID = 0;
  $awesome = array (
    "htmll"  => $HtmlLines,
    "ajax" =>$AjaxNames,
    "ColIDs" => $ColID
   
);
          
            return $awesome;

       
    }
      private static function objectify(&$array){
        $array = (object)$array;
      }


        }