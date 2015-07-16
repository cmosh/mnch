
	@extends('imci/survey/dashboard')
	@section('pageinfo')

@section('content')

  
 <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="box" id="Section1">
                                <div class="box-body">
                                    <br>
                                    <center>
                                        <h2>
                                            <b>SECTION 1 of 4: FACILITY, HCW AND WORKSATION INFORMATION</b>
                                        </h2>
                                    </center>
                                    <br>
                                </div>
                            </div>
                            <!-- Main content -->
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
                                                <form role="form">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <div class="col-xs-4">
                                                                <label>Facility Name</label>
                                                                <input type="text" class="form-control" id="InputFacilityName"
                                                                placeholder="Enter name">
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <label>Facility Type</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                                placeholder="Enter type">
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <label>Facility Tier</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                                placeholder="Enter tier">
                                                            </div>
                                                            <br>
                                                            <div class="col-xs-4">
                                                                <label>Owned By</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                                placeholder="Enter owner">
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <label>County</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                                placeholder="Enter county">
                                                            </div>
                                                            <div class="col-xs-4">
                                                                <label>District/Sub-County</label>
                                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                                placeholder="Enter district/sub-county">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                    <div class="box-footer">
                                                        <span style="color:red">*For Facility Type(Dispensary,Health Centre etc); For Owned by(Public/Private/FBO/MOH/NGO)</span>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.box -->
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
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>NAME</label>
                                                            <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>MOBILE</label>
                                                            <input type="text" class="form-control" id="fc_mobile1"
                                                            placeholder="Enter Mobile">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>EMAIL</label>
                                                            <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-1">
                                                            <label>MCH-Incharge</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-1">
                                                            <label>Maternity-Incharge</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-1">
                                                            <label>Team-Lead</label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                            <!-- /.box -->
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <h3 class="box-title">Assesor Information</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-3">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>Designation</label>
                                                            <input type="text" class="form-control" id="fc_mobile1"
                                                            placeholder="Enter Designation">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label>Phoner Number</label>
                                                            <input type="text" class="form-control" id="fc_email1"
                                                            placeholder="Enter Phone Number">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                            <div class="box box-primary">
                                                <div class="box-body">
                                                    <div class="box-header">
                                                        <h3 class="box-title">HCW Profile</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" id="InputFacilityName"
                                                            placeholder="Enter first name">
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <label>Surname</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Enter surname">
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <label>National ID</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Enter id">
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <label>Phone Number</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Enter number">
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <label>Personal Number</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                            placeholder="Enter number">
                                                        </div>
                                                        <div class="col-xs-4">
                                                            <label>Year/Month when trained in IMCI</label>
                                                            <input type="text" class="form-control"
                                                            id="exampleInputEmail1" placeholder="Y/M">
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-xs-8" style="padding-left:3%">
                                                                <br>
                                                                <label>Key Coordinator of the training (Select One)</label>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                                                        checked="">MOH/KPA/CHAI</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">MOH only</label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Other</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-body">
                                                            <div class="col-xs-12">
                                                                <div class="box-body">
                                                                    <div class="col-xs-4">
                                                                        <br>
                                                                        <label>If other, Indicate Name of Cordinator:</label>
                                                                        <input type="text" class="form-control"
                                                                        id="exampleInputEmail1" placeholder="Enter Name">
                                                                    </div>
                                                                </div>
                                                                <div class="box-body">
                                                                    <div class="col-xs-4">
                                                                        <label>Designation</label>
                                                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                                                        placeholder="Enter surname">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.box-body -->
                                                    </div>
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <h3 class="box-title">Work Station Profile</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <label>Current Service Unit</label>
                                                            <input type="text" class="" id="fc_name1"
                                                            placeholder="Enter Service Unit">
                                                        </div>
                                                    </div>
                                                    <label style="color:red">*If healthcare worker works in many departments, write all</label>
                                                    <div
                                                    class="form-group"></div>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="3">
                                                                <b>Question</b>
                                                            </th>
                                                            <th>
                                                                <b>Yes</b>
                                                            </th>
                                                            <th>
                                                                <b>No</b>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1.Is the HCW still working in the original facilty they were when they
                                                                got trained?</td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios9" id="ResponseYes" value="Yes"
                                                                        checked="">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios9" id="ResponseNo" value="No">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>If No to Question 1 indicate whether the HCW:</td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transfered to another facility in the same county</td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios10" id="ResponseYes" value="Yes"
                                                                        checked="">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios10" id="ResponseNo" value="No">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>If Yes Indicate Name of facility
                                                                <input width="100px" type="text" class=""
                                                                id="fc_name1" placeholder="">
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Transfered to another facility in the another county</td>
                                                            <td>
                                                                <div>
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios11" id="ResponseYes" value="Yes"
                                                                        checked="">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios11" id="ResponseNo" value="No">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>If Yes Indicate Name of facility
                                                                <input width="100px" type="text" class=""
                                                                id="fc_name1" placeholder="">and facility
                                                                <input width="100px" type="text" class="" id="fc_name1" placeholder="">
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                        <div class="box" id="Section2">
                                            <div class="box-body">
                                                <br>
                                                <center>
                                                    <h2>
                                                        <b>SECTION 2 of 4: OBSERVATION OF CASE MANAGEMENT : ONE CASE PER HCW</b>
                                                    </h2>
                                                </center>
                                                <br>
                                            </div>
                                        </div>
                                        <label style="color:red">*Assessor should indicate findings alongside Healthcare Worker Findings</label>
                                        <div
                                        class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Child Profile</h3>
                                            </div>
                                            <div class="box-body">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <div class="col-xs-3">
                                                                <label>Gender(M or F)</label>
                                                                <label>M
                                                                    <input type="radio" name="gen" id="exampleInputEmail1" placeholder=""
                                                                    value="Male">
                                                                </label>
                                                                <label>F
                                                                    <input type="radio" name="gen" id="exampleInputEmail1" placeholder=""
                                                                    value="Female">
                                                                </label>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <label>Age In Months</label>
                                                                <input type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <label>Presenting complaints?</label>
                                                                <input style="width:70%" type="text" class=""
                                                                id="exampleInputEmail1" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- /.box-primary1 -->
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Are the following Services Offered to a child?</h3>
                                        </div>
                                        <div class="box-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">SERVICE</th>
                                                        <th colspan="2" width="28%" style="text-align:center;" contenteditable="true">RESPONSE</th>
                                                        <th>FINDINGS</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center;">Yes</td>
                                                        <td width="14%" style="text-align:center;">No</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <b>(A) Temperature taken and recorded</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios21" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios21" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label>degrees</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(B) Weight taken and recorded</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios22" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios22" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label>kgs</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(C) Height/Length taken and recorded</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios23" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios23" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label>centimetres</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(D) Use of MCH booklet</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios24" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios24" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(E) Respitory rate taken and recorded</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios25" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios25" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label>per minute</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(F) MUAC rate taken and recorded</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios26" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios26" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <div class="row">
                                                                <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                placeholder="">
                                                                <label>centimetres</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Are the following Danger Signs assessed in ongoing session for a child?</h3>
                                        </div>
                                        <div class="box-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2">SERVICE</th>
                                                        <th colspan="2" style="text-align:center">RESPONSE</th>
                                                        <th width="35%" style="text-align:center" colspan="2">FINDINGS</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">Yes</td>
                                                        <td style="text-align:center">No</td>
                                                        <td style="text-align:center">Present</td>
                                                        <td style="text-align:center">Not Present</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <b>(A) Inability to drink or breastfeed</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios27" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios27" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios28" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios28" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(B) Lethargy and Unconsciousness</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios29" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios29" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios30" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios30" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(C) Is the child vomitting everything?</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios31" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios31" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios32" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios32" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(D) Has the child had convulsions?</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios33" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios33" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios34" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios34" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <b>(E) Is the child convulsing now?</b>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios35" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center;">
                                                            <label>
                                                                <input type="radio" name="optionsRadios35" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios36" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </label>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <label>
                                                                <input type="radio" name="optionsRadios36" id="ResponseNo" value="No">
                                                            </label>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="box" id="Section2a">
                                        <div class="box-body">
                                            <br>
                                            <center>
                                                <h2>
                                                    <b>SECTION 2a of 4: ASSESSMENT OF THE SICK CHILD AGE 2 MONTHS UP TO 5 YEARS</b>
                                                </h2>
                                            </center>
                                            <br>
                                        </div>
                                    </div>
                                    <section class="content">
                                        <label style="color:red">*If child is less than 2 months move to Section 2B</label>
                                        <!-- /.box-primary1
                                        -->
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Assessment of the main Symptoms in an ongoing session for a child</h3>
                                            </div>
                                            <div style="padding-left:1%">
                                                <label>Does the child have the Symptom Below?</label>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                </div>
                                                <label style="color:red">*If NO proceed to next symptom</label>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">
                                                                <u>SYMPTOM</u>
                                                            </th>
                                                            <th colspan="3">
                                                                <u>HCW RESPONSE</u>
                                                            </th>
                                                            <th colspan="3" style="text-align:center">
                                                                <u>ASSESSOR RESPONSE</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">
                                                                <u>
                                                                    <span style="font-size:14pt">1.Cough/Difficulty Breathing</span>
                                                                </u>
                                                            </th>
                                                            <th width="13%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="13%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align:center">Yes</th>
                                                            <th style="text-align:center">No</th>
                                                            <th></th>
                                                            <th style="text-align:center">Yes</th>
                                                            <th style="text-align:center">No</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Asked how long the child had the cough</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios30" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios30" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="" style="horizontal-align:middle">
                                                                <label>days</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios31" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios31" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                    <label>days</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Breath counts taken and recorded</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios32" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios32" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>per minute</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios33" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios33" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                    <label>per minute</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Looked for chest indrawing</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios34" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios34" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios35" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios35" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios36" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios36" id="ResponseNo" value="No">
                                                                </label>
                                                                <br>
                                                            </td>
                                                            <td style="text-align:center;">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios37" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios37" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Looked and listened for stridor</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios38" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios38" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios39" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios39" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios40" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios40" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios40b" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios40b" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Looked and listened for a wheeze</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios41" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios41" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios42" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios42" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios43" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios43" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios44" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios44" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Classification Done</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios45" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios45" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center;">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios46" id="ResponseYes" value="Yes"
                                                                    checked="">No Pneumonia/Cough or cold</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios46" id="ResponseNo" value="No">Severe Pnemonia/Very severe disesae</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios47" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios47" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios48" id="ResponseYes" value="Yes"
                                                                    checked="">No Pneumonia/Cough or cold</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios48" id="ResponseNo" value="No">Severe Pnemonia/Very severe disesae</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Correct Classification</b>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios47" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios47" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div style="padding-left:1%">
                                                    <label>Does the child have the Symptom Below?</label>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                    </div>
                                                    <label style="color:red">*If NO proceed to next symptom</label>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">
                                                                <u>SYMPTOM</u>
                                                            </th>
                                                            <th colspan="3" style="text-align:center">
                                                                <u>HCW RESPONSE</u>
                                                            </th>
                                                            <th colspan="3" style="text-align:center">
                                                                <u>ASSESSOR RESPONSE</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">
                                                                <u>
                                                                    <span style="font-size:14pt">2. Diarrhoea</span>
                                                                </u>
                                                            </th>
                                                            <th width="13%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="13%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th style="text-align:center">YES</th>
                                                            <th style="text-align:center">NO</th>
                                                            <th></th>
                                                            <th style="text-align:center">YES</th>
                                                            <th style="text-align:center">NO</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Ask about the duration of diarrhoea</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios50" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios50" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios51" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios51" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Ask about the prescence of blood in stool</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios52" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios52" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios53" id="ResponseNoPres" value="Present"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios53" id="ResponsePres" value="Not Present">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios54" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios54" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios55" id="ResponseNoPres" value="Present"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios55" id="ResponsePres" value="Not Present">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Check if infant is lethurgic and unconscious</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios56" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios56" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios57" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios57" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios58" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios58" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios59" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios59" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Check if the infant is restless and irritable</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios60" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios60" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios61" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios61" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios62" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios62" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios63" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios63" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Look for sunken eyes</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios64" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios64" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios65" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios65" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios66" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios66" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios67" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios67" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Perform skin pinch</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios68" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios68" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios69" id="ResponseImmediately" value="Immediately"
                                                                    checked="">Goes back immediately</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios69" id="ResponseSlowly" value="Slowly">Slowly</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios69" id="ResponseVSlowly" value="Very Slowly">Very Slowly</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios70" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios70" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios71" id="ResponseImmediately" value="Immediately"
                                                                    checked="">Goes back immediately</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios71" id="ResponseSlowly" value="Slowly">Slowly</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios71" id="ResponseVSlowly" value="Very Slowly">Very Slowly</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Correctly assess and classify diarrhoea and dehydration</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios72" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios72" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios73" id="ResponseNoDehy" value="No Dehydration"
                                                                    checked="">No Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios73" id="ResponseSomeDehy" value="Some Dehydration">Some Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios73" id="ResponseServereDehy" value="Severe Dehydration">Servere Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios73" id="ResponseProlongedDiarrhoea"
                                                                    value="Prolonged Diarrhoea">Prolonged diarrhoea</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios73" id="ResponseAbdominalPain"
                                                                    value="AbdPain">Possible abdominal Pain</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios74" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios74" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios75" id="ResponseNoDehy" value="No Dehydration"
                                                                    checked="">No Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios75" id="ResponseSomeDehy" value="Some Dehydration">Some Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios75" id="ResponseServereDehy" value="Severe Dehydration">Servere Dehydration</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios75" id="ResponseProlongedDiarrhoea"
                                                                    value="Prolonged Diarrhoea">Prolonged diarrhoea</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsradios75" id="ResponseAbdominalPain"
                                                                    value="AbdPain">Possible abdominal Pain</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H) Correct Classification</b>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios76" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios76" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div style="padding-left:1%">
                                                    <label>Does the child have the Symptom Below?</label>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                    </div>
                                                    <label style="color:red">*If NO proceed to next symptom</label>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">
                                                                <u>SYMPTOM</u>
                                                            </th>
                                                            <th colspan="3" style="text-align:center">
                                                                <u>HCW RESPONSE</u>
                                                            </th>
                                                            <th colspan="3" style="text-align:center">
                                                                <u>ASSESSOR RESPONSE</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">
                                                                <u>
                                                                    <span style="font-size:14pt">3. Fever</span>
                                                                </u>
                                                            </th>
                                                            <th width="10%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="10%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center">YES</td>
                                                            <td style="text-align:center">NO</td>
                                                            <td style="text-align:center"></td>
                                                            <td style="text-align:center">YES</td>
                                                            <td style="text-align:center">NO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Ask about the duration</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios77" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios77" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios78" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios78" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Ask about history of Travel within the past month</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios79" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios79" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios80" id="ResponseNoPres" value="Present"
                                                                    checked="">Travel</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios80" id="ResponsePres" value="Not Present">No Travel</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios81" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios81" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios82" id="ResponseNoPres" value="Present"
                                                                                checked="">Travel</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios82" id="ResponsePres" value="Not Present">No Travel</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Temperature taken and recorded</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios83" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios83" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div>
                                                                    <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                    <label>degrees</label>
                                                                </div>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios84" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios84" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="align-text:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>degrees</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Look for signs of measles</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios85" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios85" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios86" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios86" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios87" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios87" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios88" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios88" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Malaria blood tested</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios89" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios89" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios90" id="ResponseYes" value="Yes"
                                                                    checked="">Positive</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios90" id="ResponseNo" value="No">Negative</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios91" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios91" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios92" id="ResponseYes" value="Yes"
                                                                    checked="">Positive</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios92" id="ResponseNo" value="No">Negative</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) If malaria test not taken, give reason</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios93" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios93" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div class="form-group2">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsradios94" id="ResponseImmediately" value="Immediately"
                                                                            checked="">No test kits</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios94" id="ResponseSlowly" value="Slowly">No lab</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios94" id="ResponseVSlowly" value="Very Slowly">No skills</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios94" id="ResponseVSlowly" value="Very Slowly">Forgot</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                        <label>other(specify)</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios95" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios95" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <div class="form-group2">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsradios96" id="ResponseImmediately" value="Immediately"
                                                                            checked="">No test kits</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios96" id="ResponseSlowly" value="Slowly">No lab</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios96" id="ResponseVSlowly" value="Very Slowly">No skills</label>
                                                                        <br>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios96" id="ResponseVSlowly" value="Very Slowly">Forgot</label>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                        placeholder="">
                                                                        <label>other(specify)</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Check for neck stiffness</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios97" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios97" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios98" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios98" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios99" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios99" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H) Classification Done</b>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios101" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios101" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios46" id="ResponseYes" value="Yes"
                                                                    checked="">Fever/No malaria</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios46" id="ResponseNo" value="No">Malaria</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios46" id="ResponseNo" value="No">Very servere febrile disease</label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios48" id="ResponseYes" value="Yes"
                                                                    checked="">Fever/No malaria</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios48" id="ResponseNo" value="No">Malaria</label>
                                                                <br>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios48" id="ResponseNo" value="No">Very servere febrile disease</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(I) Correct Classification</b>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios100" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <!-- /.box-primary2 -->
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">
                                                                <u>SYMPTOM</u>
                                                            </th>
                                                            <th colspan="2">
                                                                <u>HCW RESPONSE</u>
                                                            </th>
                                                            <th colspan="2">
                                                                <u>ASSESSOR RESPONSE</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th rowspan="2">
                                                                <u>
                                                                    <span style="font-size:14pt">4. Ear Infection</span>
                                                                </u>
                                                            </th>
                                                            <th width="15%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="15%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td width="7.5%" style="text-align:center">YES</td>
                                                            <td width="7.5%" style="text-align:center">NO</td>
                                                            <td></td>
                                                            <td width="7.5%" style="text-align:center">YES</td>
                                                            <td width="7.5%" style="text-align:center">NO</td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Ask about presence of ear pain</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios106" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios106" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="radio" name="optionsRadios107" id="ResponseYes" value="Yes"
                                                                checked="">Present
                                                                <label>
                                                                    <input type="radio" name="optionsRadios107" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios108" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios108" id="ResponseNo" value="No"
                                                                checked="">
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="radio" name="optionsRadios109" id="ResponseYes" value="Yes"
                                                                checked="">Present
                                                                <label>
                                                                    <input type="radio" name="optionsRadios109" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Asked if there is ear discharge</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios110" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios110" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios111" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios111" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios112" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios112" id="ResponseNo" value="No"
                                                                checked="">
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios113" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios113" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Asked for duration of discharge from ear</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios114" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios114" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios115" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios115" id="ResponseNo" value="No"
                                                                checked="">
                                                            </td>
                                                            <td style="text-align:center">
                                                                <input type="text" class="" id="exampleInputEmail1" placeholder="">
                                                                <label>days</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Look for pus draining from ear</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios116" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios116" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios117" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios117" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios118" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios118" id="ResponseNo" value="No"
                                                                checked="">
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios119" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios119" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Felt for tender swelling behind the ear</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios120" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios120" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios121" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios121" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios122" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios122" id="ResponseNo" value="No"
                                                                checked="">
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios123" id="ResponseYes" value="Yes"
                                                                    checked="">Present</label>
                                                                <label>
                                                                    <input type="radio" name="optionsRadios123" id="ResponseNo" value="No">Not Present</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Classification done</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios124" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios124" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios125" id="ResponseImmediately" value="Immediately"
                                                                    checked="">No ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios125" id="ResponseSlowly" value="Slowly">Chronic ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios125" id="ResponseVSlowly" value="Very Slowly">Acute ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios125" id="ResponseVSlowly" value="Very Slowly">Mastoiditis</label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios126" id="ResponseYes" value="Yes"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios126" id="ResponseNo" value="No"
                                                                    checked="">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsradios127" id="ResponseImmediately" value="Immediately"
                                                                    checked="">No ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios127" id="ResponseSlowly" value="Slowly">Chronic ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios127" id="ResponseVSlowly" value="Very Slowly">Acute ear infection</label>
                                                                <label>
                                                                    <input type="radio" name="optionsradios127" id="ResponseVSlowly" value="Very Slowly">Mastoiditis</label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Correct Classification</b>
                                                            </td>
                                                            <td width="7.5%" style="text-align:center"></td>
                                                            <td width="7.5%" style="text-align:center"></td>
                                                            <td style="text-align:center"></td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios128" id="ResponseYes" value="Yes"
                                                                checked="">
                                                            </td>
                                                            <td width="7.5%" style="text-align:center">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios128" id="ResponseNo" value="No">
                                                                </label>
                                                            </td>
                                                            <td style="text-align:center"></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box" id="Section2b">
                                            <div class="box-body">
                                                <br>
                                                <center>
                                                    <h2>
                                                        <b>SECTION 2b of 4: ASSESMENT FOR THE SICK YOUNG INFANT AGE UPTO 2 MONTHS(IF
                                                            APPLICABLE)</b>
                                                    </h2>
                                                </center>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div style="padding-left:1%">
                                                <label>Does the child have the Symptom Below?</label>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                </div>
                                                <label style="color:red">*If NO proceed to next symptom</label>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="3" width="20%">
                                                                <span style="font-size:14pt">1. Very Severe Disease</span>
                                                            </th>
                                                            <th colspan="4" style="text-align:center">HCW Response</th>
                                                            <th colspan="4" style="text-align:center">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                    <th width="20%" colspan="2" style="text-align:center">
                                                        <u>Response</u>
                                                    </th>
                                                    <th width="20%" colspan="2" style="text-align:center">
                                                        <u>Findings</u>
                                                    </th>
                                                    <th width="20%" colspan="2" style="text-align:center">
                                                        <u>Response</u>
                                                    </th>
                                                    <th width="20%" colspan="2" style="text-align:center">
                                                        <u>Findings</u>
                                                    </th>
                                                        </tr>
                                                    <tr>
                                                        <td width="`10%" style="text-align:center"><b>YES<b></td>
                                                        <td width="10%" style="text-align:center"><b>NO</b></td>
                                                        <td width="10%" style="text-align:center"><b>YES</b></td>
                                                        <td width="10%" style="text-align:center"><b>NO</b></td>
                                                        <td width="`10%" style="text-align:center"><b>YES</b></td>
                                                        <td width="10%" style="text-align:center"><b>NO</b></td>
                                                        
                                                        <td width="10%" style="text-align:center"><b>YES</b></td>
                                                        <td width="10%" style="text-align:center"><b>NO</b></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tabulated questions for 2B-->
                                                        <tr>
                                                            <td>
                                                                <b>(A)</b>Correct Classification
                                                                </td>
                                                            <td width="10%" style="text-align:center"></td>
                                                            <td width="10%" style="text-align:center"></td>
                                                            <td width="10%" style="text-align:center"></td>
                                                            <td width="10%" style="text-align:center"></td>
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios107" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios107" id="ResponseNo" value="No"></label></td>
                                                            <td width="10%" style="text-align:center"></td>
                                                            <td width="10%" style="text-align:center"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B)</b>Look For Central Cyanosis
                                                                
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios129" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios129" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios130" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios130" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios131" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios131" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios132" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios132" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C)</b>Look for Bulging Fontanelle
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios133" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios133" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios134" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios134" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios135" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios135" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios136" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios136" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D)</b>Look for pus draining from ear
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios137" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios137" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios138" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios138" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios139" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios139" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios140" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios140" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E)</b>Look for Skin Pustules
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios141" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios141" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios142" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios142" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios143" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios143" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios144" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios144" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F)</b>Asked if the infant has had convulsions
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios145" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios145" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios146" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios146" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios147" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios147" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios148" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios148" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G)</b>Asked and looked if the infant is able to breastfeed
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios149" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios149" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios150" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios150" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios151" id="ResponseYes" value="Yes" checked="">
                                                                </td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios151" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios152" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios152" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H)</b>Look if the baby is gasping or not breathing when stimulated
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios153" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios153" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios154" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios154" id="ResponseNo" value="No" checked="">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios155" id="ResponseYes" value="Yes" checked="">
                                                                </td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios155" id="ResponseNo" value="No">
                                                                </td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios156" id="ResponseYes" value="Yes"checked="">
                                                                </td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios156" id="ResponseNo" value="No"checked="">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(I)</b>Breath counts per minute
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios157" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios157" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                            <!-- HCW Breathe Counts Per Minute -->
                                                                <td width="20%" style="text-align:center" colspan="2">
                                                                <label for="countsPerMinute_a">Counts Per Minute</label>
                                                                    <input type="number" id="countsPerMinute1_a" placeholder="Enter Counts">
                                                                </td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios158" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios158" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Breathe Counts Per Minute  -->   
                                                                <td width="20%" style="text-align:center" colspan="2">
                                                                <label for="countsPerMinute_b">Counts Per Minute</label>
                                                                    <input type="number" id="countsPerMinute1_b" placeholder="Enter Counts">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(J)</b>Look for severe chest in-drawing
                                                            </td>
                                                        <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios159" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios159" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios160" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios160" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios161" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios161" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios162" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios162" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(K)</b>Look and listen for grunting
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios163" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios163" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios164" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios164" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios165" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios165" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios166" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios166" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(L)</b>Look and listen for wheezing
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios167" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios167" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios168" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios168" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios169" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios169" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios170" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios170" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(M)</b>Look and listen for nasal flaring
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios171" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios171" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios172" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios172" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios173" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios173" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios174" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios174" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(N)</b>Look for red umblilicus
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios175" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios175" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios176" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios176" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios177" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios177" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios178" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios178" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(O)</b>Look for umbilcus draining pus
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios179" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios179" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios180" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios180" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios181" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios181" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios182" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios182" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(P)</b>Checks for fever(&gt; 37.5C or feels hot)
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios183" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios183" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios184" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios184" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios185" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios185" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios186" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios186" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(Q)</b>Checks Low body temperature ( &lt;35.5C)
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios187" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios187" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios188" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios188" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios189" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios189" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios190" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios190" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td id="qnR">
                                                                <b>
                                                                    <label for="qnR">(R)</label>
                                                                </b>Checks if the Infant is drowsy(lethargic) or unconscious
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios191" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios191" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios192" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios192" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios193" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios193" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios194" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios194" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(S)</b>Looks if the infant has no movements even when stimulated
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios195" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios195" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios196" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios196" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios197" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios197" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios198" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios198" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(T)</b>Listen for high pitched cry
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios199" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios199" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios200" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios200" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios201" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios201" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios202" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios202" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(U)</b>Checks for stiff neck
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios203" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios203" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios204" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios204" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios205" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios205" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios206" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios206" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(V)</b>Correctly assesses and classifies
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios207" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios207" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Select Findings -->
                                                            <td width="20%" style="text-align:center" colspan="2">
                                                            <label>Select Findings</label><br>
                                                                    <select class="form-control">
                                                                        <option>Very severe disease or local bacterial infection unlikely</option>
                                                                        <option>Local bacterial infection</option>
                                                                        <option>Very Severe Disease</option>
                                                                    </select>
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios208" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios208" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Select Findings  -->   
                                                            <td width="20%" style="text-align:center" colspan="2">
                                                            <label>Select Findings</label><br>
                                                                    <select  class="form-control">
                                                                        <option>Very severe disease or local bacterial infection unlikely</option>
                                                                        <option>Local bacterial infection</option>
                                                                        <option>Very Severe Disease</option>
                                                                    </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(W)</b>Correct Classification
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                                <td width="10%" style="text-align:center"></td>
                                                            <!-- HCW No Response -->  
                                                               <td width="10%" style="text-align:center"></td>
                                                            <!-- HCW Yes Findings -->
                                                                <td width="10%" style="text-align:center"></td>
                                                            <!-- HCW No Findings -->
                                                                <td width="10%" style="text-align:center"></td>
                                                            <!-- Assessor Yes Response -->   
                                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios209" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                            <!-- Assessor No Response -->
                                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios209" id="ResponseNo" value="No"></label></td>
                                                            <!-- Assessor Yes Findings  -->   
                                                                <td width="10%" style="text-align:center"></td>
                                                            <!-- Assessor No Findings -->    
                                                                <td width="10%" style="text-align:center"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div style="padding-left:1%">
                                                <label>Does the child have the Symptom Below?</label>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                </div>
                                                <label style="color:red">*If NO proceed to next symptom</label>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="3" width="33.3%">
                                                                <span style="font-size:14pt">2.Jaundice</span>
                                                            </th>
                                                            <th colspan="4">HCW Response</th>
                                                            <th colspan="4">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th width="20%" colspan="2"style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tabulated questions for 2B-->
                                                        <tr>
                                                            <td>
                                                                <b>(A)</b>Look for yellow discolouration of the skin including the soles
                                                                and palms
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios209" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios209" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios210" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios210" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios211" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios211" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios212" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios212" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B)</b>Asked for duration of the discolouration
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios213" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios213" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios214" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios214" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios215" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios215" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios216" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios216" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C)</b>Classification Done
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios217" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios217" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios218" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios218" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios218" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios219" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios219" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios220" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D)</b>Correct Classification</td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                        <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios222" id="ResponseYes" value="Yes"checked="">
                                                        </td>
                                                        <!-- Assessor No Response -->
                                                        <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios222" id="ResponseNo" value="No"checked="">
                                                            </td>   
                                                        <!-- Assessor Yes Findings  -->   
                                                            
                                                            <td width="10%" style="text-align:center">
                                                            
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            
                                                            <td width="10%" style="text-align:center">
                                                            </td>
                                                        </tr>
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div style="padding-left:1%">
                                                <label>Does the child have the Symptom Below?</label>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                        <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                </div>
                                                <label style="color:red">*If NO proceed to next symptom</label>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="3" width="33.3%">
                                                                <span style="font-size:14pt">3. Eye Infection</span>
                                                            </th>
                                                            <th colspan="4">HCW Response</th>
                                                            <th colspan="4">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th width="20%" colspan="2"style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Response</u>
                                                            </th>
                                                            <th width="20%" colspan="2" style="text-align:center">
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                            <td width="10%" style="text-align:center">YES</td>
                                                            <td width="10%" style="text-align:center">NO</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tabulated questions for 2B-->
                                                        <tr>
                                                            <td style="width:33.3%">
                                                                <b>(A)</b>Look for eye discharge
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios223" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios223" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios224" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios224" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios225" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios225" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios226" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios226" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                         
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B)</b>Asked for duration of eye discharge
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                <td width="10%" style="text-align:center">
                                                                <input type="radio" name="optionsRadios227" id="ResponseYes" 
                                                                value="Yes"checked="">
                                                                </td>
                                                <!-- HCW No Response -->  
                                                 <td width="10%" style="text-align:center">
                                                               <input type="radio" name="optionsRadios227" id="ResponseNo" value="No" checked="">
                                                               </td>
                                                <!-- HCW Breathe Counts Per Minute -->
                                                <td width="20%" style="text-align:center" colspan="2">
                                                                <label for="DaysEyeInfect_a">Days</label>
                                                                    <input type="number" name="DaysEyeInfect_a" id="DaysEyeInfect_a" placeholder="Enter Counts">
                                                                </td>
                                                <!-- Assessor Yes Response -->   
                                                <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios228" id="ResponseYes" value="Yes"
                                                                        checked=""></label></td>
                                                <!-- Assessor No Response -->
                                                <td width="10%" style="text-align:center"><label>
                                                                        <input type="radio" name="optionsRadios228" id="ResponseNo" value="No"></label></td>
                                                <!-- Assessor Breathe Counts Per Minute  -->   
                                                <td width="20%" style="text-align:center" colspan="2">
                                                                <label for="DaysEyeInfect_b">Days</label>
                                                                    <input type="number" name="DaysEyeInfect_b"id="DaysEyeInfect_b" placeholder="Enter Counts">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C)</b>Asked and checked if eye is draining pus
                                                            </td>
                                                        <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios229" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios229" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios230" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios230" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios231" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios231" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios232" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios232" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D)</b>Asked and checked if eyes are swollen
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios233" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios233" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios234" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios234" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios235" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios235" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios236" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios236" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E)</b>Asked snd checked if there are white spots in the pupil
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios237" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios237" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios238" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios238" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios239" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios239" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios240" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios240" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F)</b>Asked and looked if the infant has crossed eyes
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios241" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios241" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios242" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios242" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios243" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios243" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios244" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios244" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G)</b>Checked if there is clouding of the cornea
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios245" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios245" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios246" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios246" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios247" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios247" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios248" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios248" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H)</b>Asked and checked for fear of light
                                                            </td>
                                                               <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios249" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios249" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios250" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios250" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios251" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios251" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios252" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios252" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(I)</b>Ask and checked for fear excessive tearing
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios253" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios253" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios254" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios254" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center"><input type="radio" name="optionsRadios255" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios255" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios256" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios256" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(J)</b>Look for squeezing of the eyes
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios257" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios257" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios258" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios258" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios259" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios259" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios260" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios260" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(K)</b>Look for red eyes
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios261" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios261" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Yes Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios262" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Findings -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios262" id="ResponseNo" value="No" checked="">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios263" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios263" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios264" id="ResponseYes" value="Yes"checked="">
                                                            </td>
                                                        <!-- Assessor No Findings -->    
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios264" id="ResponseNo" value="No"checked="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(L)</b>Correctly assesses and classifies
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios265" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios265" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Select Findings -->
                                                            <td width="20%" colspan="2" style="text-align:center">
                                                            <label>Select Findings</label><br>
                                                                    <select class="form-control">
                                                                        <option>Squint</option>
                                                                        <option>Congenital cancer of the eye</option>
                                                                        <option>Congenital glaucoma</option>
                                                                        <option>Severe eye infection</option>
                                                                        <option>Eye infection</option>
                                                                        <option>Congenital condition or eye infection unlikely</option>
                                                                    </select>
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios266" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios266" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Yes Findings  -->   
                                                            <td width="20%" colspan="2" style="text-align:center">
                                                            <label>Select Findings</label><br>
                                                                    <select class="form-control">
                                                                        <option>Squint</option>
                                                                        <option>Congenital cancer of the eye</option>
                                                                        <option>Congenital glaucoma</option>
                                                                        <option>Severe eye infection</option>
                                                                        <option>Eye infection</option>
                                                                        <option>Congenital condition or eye infection unlikely</option>
                                                                    </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(M)</b>Correct classification done
                                                            </td>
                                                            <!-- HCW Yes Response -->
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios261" id="ResponseYes" 
                                                            value="Yes"checked="">
                                                            </td>
                                                        <!-- HCW No Response -->  
                                                           <td width="10%" style="text-align:center">
                                                           <input type="radio" name="optionsRadios261" id="ResponseNo" value="No" checked="">
                                                           </td>
                                                        <!-- HCW Enter Findings -->
                                                            <td width="20%" style="text-align:center">
                                                            <input type="text" name="findings1">
                                                            </td>
                                                        <!-- Assessor Yes Response -->   
                                                            <td width="10%" style="text-align:center">
                                                            <input type="radio" name="optionsRadios263" id="ResponseYes" value="Yes"
                                                                    checked=""></label></td>
                                                        <!-- Assessor No Response -->
                                                            <td width="10%" style="text-align:center"><label>
                                                                    <input type="radio" name="optionsRadios263" id="ResponseNo" value="No"></label></td>
                                                        <!-- Assessor Enter Findings  -->   
                                                            <td width="20%" colspan="2" style="text-align:center">
                                                            <input type="text" >
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <div style="padding-left:1%">
                                                    <label>Does the child have the Symptom Below?</label>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseYes" value="Yes" checked="">Yes</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" name="" id="ResponseNo" value="No">No</label>
                                                    </div>
                                                    <label style="color:red">*If NO proceed to next symptom</label>
                                                </div>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="30%">
                                                                <u>SYMPTOM</u>
                                                            </th>
                                                            <th colspan="2">
                                                                <u>HCW RESPONSE</u>
                                                            </th>
                                                            <th colspan="2">
                                                                <u>ASSESSOR RESPONSE</u>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <u>
                                                                    <span style="font-size:14pt">4. Diarrhoea</span>
                                                                </u>
                                                            </th>
                                                            <th width="13%">
                                                                <u>Respone</u>
                                                            </th>
                                                            <th>
                                                                <u>Findings</u>
                                                            </th>
                                                            <th width="13%">
                                                                <u>Respone</u>
                                                            </th>
                                                            <th>
                                                                <u>Findings</u>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Ask about the duration of diarrhoea</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios30" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios30" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                    placeholder="">
                                                                    <label>days</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios90" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios90" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input style="width:25%" type="text" class="" id="exampleInputEmail1"
                                                                    placeholder="">
                                                                    <label>days</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Ask about the prescence of blood in stool</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios32" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios32" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios91" id="ResponseNoPres" value="Present"
                                                                                checked="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios91" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios90" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios90" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponseNoPres" value="Present"
                                                                                checked="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Check if infant is lethurgic and unconscious</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios34" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios34" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios35" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios35" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios36" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios36" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios37" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios37" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Check if the infant is restless and irritable</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios38" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios38" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios39" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios39" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios40" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios40" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios40b" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios40b" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Look for sunken eyes</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios41" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios41" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios42" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios42" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios43" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios43" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios44" id="ResponseYes" value="Yes"
                                                                            checked="">Present</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios44" id="ResponseNo" value="No">Not Present</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Perform skin pinch</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios41" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios41" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios92" id="ResponseImmediately" value="Immediately"
                                                                                checked="">Goes back immediately</label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios92" id="ResponseSlowly" value="Slowly">slowly</label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios92" id="ResponseVSlowly" value="Very Slowly">very slowly</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios93" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios93" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios26" id="ResponseImmediately" value="Immediately"
                                                                                checked="">Goes back immediately</label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios26" id="ResponseSlowly" value="Slowly">slowly</label>
                                                                        </div>
                                                                        <br>
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios26" id="ResponseVSlowly" value="Very Slowly">very slowly</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Correctly assess and classify diarrhoea and dehydration</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios45" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios45" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios94" id="ResponseNoDehy" value="No Dehydration"
                                                                                checked="">No Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios94" id="ResponseSomeDehy" value="Some Dehydration">Some Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios94" id="ResponseServereDehy" value="Severe Dehydration">Servere Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios94" id="ResponseProlongedDiarrhoea"
                                                                                value="Prolonged Diarrhoea">Prolonged diarrhoea</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios94" id="ResponseAbdominalPain"
                                                                                value="AbdPain">Possible abdominal Pain</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios47" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios47" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseNoDehy" value="No Dehydration"
                                                                                checked="">No Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseSomeDehy" value="Some Dehydration">Some Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseServereDehy" value="Severe Dehydration">Servere Dehydration</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseProlongedDiarrhoea"
                                                                                value="Prolonged Diarrhoea">Prolonged diarrhoea</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseAbdominalPain"
                                                                                value="AbdPain">Possible abdominal Pain</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H) Correct Classification</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row"></div>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios47" id="ResponseYes" value="Yes"
                                                                                checked="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios47" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <label>
                                                    <b>TREATMENT</b>
                                                </label>
                                                <label style="color:red">*Include all treatments used comma separated without regarding the dosage</label>
                                                <br>
                                                <input style="width:100%;height:100px" type="text" class="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">5A. Feeding Problem</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th style="width:11%">Response</th>
                                                            <th>Findings</th>
                                                            <th style="width:11%">Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tabulated questions for 2B-->
                                                        <tr>
                                                            <td>
                                                                <b>(A) Weight Taken</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KGs</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KGs</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Weight Taken</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios22" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios22" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios42" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios42" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Ask if the infant is breastfeeding</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios13" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios13" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponseNoPres" value="Present"=""="">Exclusivebreastfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponsePres" value="Not Present">Complimentaryfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponsePres" value="Not Present">Replacementfeeding
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios33" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios33" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponseNoPres" value="Present"=""="">Exclusivebreastfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponsePres" value="Not Present">Complimentaryfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios12" id="ResponsePres" value="Not Present">Replacementfeeding
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Ask if the infant is breastfeeding</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios44" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios44" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Ask how many times the children&nbsp;</b>
                                                                <br>
                                                                <b>&nbsp; &nbsp; &nbsp; &nbsp;is breastfeeding in 24hrs</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Times</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Times...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Times</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Times...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Ask how many times the children &nbsp;</b>
                                                                <br>
                                                                <b>&nbsp; &nbsp; &nbsp; &nbsp;is breastfeeding in 24hrs</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios16" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios16" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Times</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Times...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios36" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios36" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Times</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Times...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Ask if the child is exclusively &nbsp;</b>
                                                                <br>
                                                                <b>&nbsp; &nbsp; &nbsp; &nbsp; breastfeeding</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios17" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios17" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios37" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios37" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios47" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios47" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H) Correct Classification</b>
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios38" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios38" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(I) Check for infant positioning</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios19" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios19" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponseNoPres" value="Present"=""="">Correct&nbsp; Positioning
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponsePres" value="Not Present">Incorrect Positioning</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios39" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios39" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponseNoPres" value="Present"=""="">Correct&nbsp; Positioning
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponsePres" value="Not Present">Incorrect Positioning</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(J) Check for infant positioning</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios110" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios110" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponseNoPres" value="Present"=""="">Correct&nbsp; Positioning
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponsePres" value="Not Present">Incorrect Positioning</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios310" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios310" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponseNoPres" value="Present"=""="">Correct&nbsp; Positioning
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios29" id="ResponsePres" value="Not Present">Incorrect Positioning</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(K) Check for breast attachment</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios111" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios111" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponseNoPres" value="Present"=""="">Good attachment
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponsePres" value="Not Present">Not well attached
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponsePres" value="Not Present">No Attachment</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios311" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios311" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponseNoPres" value="Present"=""="">Good attachment
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponsePres" value="Not Present">Not well attached
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios211" id="ResponsePres" value="Not Present">No Attachment</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(L) Check if infant is suckling effectively</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios112" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios112" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios212" id="ResponseNoPres" value="Present"=""="">Suckling effectively
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios212" id="ResponsePres" value="Not Present">Not suckling effectively
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios212" id="ResponsePres" value="Not Present">Not suckling at all
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios312" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios312" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios412" id="ResponseNoPres" value="Present"=""="">Suckling effectively
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios412" id="ResponsePres" value="Not Present">Not suckling effectively
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios412" id="ResponsePres" value="Not Present">Not Suckling at all
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(M) Check for white patches or ulcers in</b>
                                                                <br>
                                                                <b>&nbsp; &nbsp; &nbsp; &nbsp; the mouth (thrush)</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios113" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios113" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios213" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios213" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios313" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios313" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios413" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios413" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(N) Correctly assesses and classifies</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios114" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios114" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios214" id="ResponseNoPres" value="Present"=""="">Feeding&nbsp; problem/ low weight
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios214" id="ResponsePres" value="Not Present">No feeding&nbsp; problem&nbsp;or &nbsp;low weight
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios314" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios314" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios414" id="ResponseNoPres" value="Present"=""="">Feeding &nbsp; problem&nbsp; or low weight</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios414" id="ResponsePres" value="Not Present">No feeding&nbsp; problem&nbsp; or low weight</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(O) Correct Classification</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios115" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios115" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" placeholder="...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios315" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios315" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <input type="text" placeholder="...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div style="padding-left:1%">
                                                <label style="color:red">
                                                    <b>IF INFANT IS LESS THAN ONE WEEK</b>
                                                </label>
                                            </div>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">5B: Weight</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Weight Taken</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios11" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsRadios11" id="ResponseNo" value="No">No</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KGs</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsradios31" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios31" id="ResponseNo" value="No">No</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KGs</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Correctly assesses and classifies</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="optionsradios114" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                        <label>
                                                                            <input type="radio" name="optionsradios114" id="ResponseNo" value="No">No</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponseNoPres" value="Present"=""="">Normal&nbsp; weight
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponsePres" value="Not Present">Low birth&nbsp; weight&nbsp;
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponsePres" value="Not Present">Very low&nbsp; birth weight&nbsp;
                                                                        <br>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsradios314" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios314" id="ResponseNo" value="No">No</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponseNoPres" value="Present"=""="">Normal&nbsp; weight
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponsePres" value="Not Present">Low birth&nbsp; weight&nbsp;
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios1" id="ResponsePres" value="Not Present">Very low&nbsp; birth weight&nbsp;
                                                                        <br>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Correct Classification</b>
                                                            </td>
                                                            <td>
                                                                <div></div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsradios315" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                    <label>
                                                                        <input type="radio" name="optionsradios315" id="ResponseNo" value="No">No</label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">6: Special Treatment Needs</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Check if the mother has had fever
                                                                    <br>or treated for an infection with
                                                                    <br>antibiotics within two weeks after delivery
                                                                    <br>
                                                                </b>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios11" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios11" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; bacterial infection
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponsePres" value="Not Present">No risk of&nbsp; bacterial&nbsp; &nbsp;infection
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; bacterial infection
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponsePres" value="Not Present">No risk of&nbsp; bacterial&nbsp; &nbsp;infection
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Check if the membranes were
                                                                    <br>raptured more than 18 hours before
                                                                    <br>delivery OR foul smelling liquor
                                                                    <br>
                                                                </b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; bacterial infection
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponsePres" value="Not Present">No risk of&nbsp; bacterial&nbsp; &nbsp;infection
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; bacterial infection
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios21" id="ResponsePres" value="Not Present">No risk of&nbsp; bacterial&nbsp; &nbsp;infection
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Check if mother tested VDRL positive</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios13" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios13" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; congenital syphillis
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponsePres" value="Not Present">No risk of&nbsp; congenital syphillis
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios33" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios33" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; congenital syphillis
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios23" id="ResponsePres" value="Not Present">No risk of&nbsp; congenital syphillis
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Check if mother is confirmed HIV positive</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; HIV transmission
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponsePres" value="Not Present">No risk of&nbsp; HIV transmission
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; HIV transmission
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponsePres" value="Not Present">No risk of&nbsp; HIV transmission
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Check if mother has been started on&nbsp;</b>
                                                                <br>
                                                                <b>TB treatment in less than 2 months</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios25" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; tuberculosis
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios25" id="ResponsePres" value="Not Present">No risk of&nbsp; tuberculosis
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios25" id="ResponseNoPres" value="Present"=""="">Risk of&nbsp; tuberculosis
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios25" id="ResponsePres" value="Not Present">No risk of&nbsp; tuberculosis
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box" id="Section3">
                                            <div class="box-body">
                                                <br>
                                                <center>
                                                    <h2>
                                                        <b>SECTION 3 of 4: OBSERVATION OF CASE MANAGEMENT : ONE CASE PER HCW</b>
                                                    </h2>
                                                </center>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">Malnutrition</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tabulated questions for 2B-->
                                                        <tr>
                                                            <td>
                                                                <b>(A) Checked for severe wasting</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseYes" value="Yes"=""=""
                                                                                    style="color">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios12" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios22" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios22" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios32" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios42" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios42" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Chexked for odoema on both feet</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios14" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios24" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios34" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios44" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios44" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) MUAC taken and recorded&nbsp;</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios15" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Centimeters</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter cm...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios35" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Centimeters</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter cm...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Weight taken and recorded &nbsp;</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios16" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios16" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KG</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios36" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios36" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <label>Weight in KG</label>
                                                                </div>
                                                                <div>
                                                                    <input type="text" placeholder="Enter Kgs...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Malnutrition&nbsp;</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios17" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios17" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios27" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios37" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios37" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios47" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios47" id="ResponsePres" value="Not Present">Not Present</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">Anaemia</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Checked for palmor pallor</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="options12" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                        <label>
                                                                            <input type="radio" name="options12" id="ResponseNo" value="No">No</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponseNoPres" value="Present"=""="">Severe palmor pallor
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponsePres" value="Not Present">Some palmor pallor
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponsePres" value="Not Present">No palmor pallor
                                                                        <br>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options32" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                    <label>
                                                                        <input type="radio" name="options32" id="ResponseNo" value="No">No</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponseNoPres" value="Present"=""="">Severe palmor pallor
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponsePres" value="Not Present">Some palmor pallor
                                                                        <br>
                                                                    </label>
                                                                    <br>
                                                                    <label>
                                                                        <input type="radio" name="options42" id="ResponsePres" value="Not Present">No palmor pallor
                                                                        <br>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Anaemia</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="">
                                                                        <label>
                                                                            <input type="radio" name="options14" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                        <label>
                                                                            <input type="radio" name="options14" id="ResponseNo" value="No">No</label>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options24" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                    <label>
                                                                        <input type="radio" name="options24" id="ResponsePres" value="Not Present">Not Present</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options34" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                    <label>
                                                                        <input type="radio" name="options34" id="ResponseNo" value="No">No</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="options44" id="ResponseNoPres" value="Present"=""="">Present</label>
                                                                    <label>
                                                                        <input type="radio" name="options44" id="ResponsePres" value="Not Present">Not Present</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">Condition</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) HIV exposure/infection</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios1a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios1a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1b" id="ResponseNoPres" value="Present"=""="">Not HIV exposed/Infected</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1b" id="ResponsePres" value="Not Present">HIV exposed</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1d" id="ResponseNoPres" value="Present"=""="">Not HIV exposed/Infected</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios1d" id="ResponsePres" value="Not Present">HIV exposed</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) If child is HIV exposed, was HIV test done?</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios2a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios2a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponseNoPres" value="Present"=""="">HIV Positive</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponsePres" value="Not Present">HIV Negative</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponsePres" value="Not Present">Not ready (PCR Test only)
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponseNoPres" value="Present"=""="">HIV Positive</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponsePres" value="Not Present">HIV Negative</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios2b" id="ResponsePres" value="Not Present">Not ready (PCR Test only)
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Immunisation Status(BCG,OPV,
                                                                    <br>Pentavalent,Pneumocal,Measles)
                                                                    <br>
                                                                </b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios3a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios3a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3b" id="ResponseNoPres" value="Present"=""="">On Track</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3b" id="ResponsePres" value="Not Present">Not on track</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3d" id="ResponseNoPres" value="Present"=""="">On Track</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios3d" id="ResponsePres" value="Not Present">Not on track</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Vitamin A</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios4a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios4a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4b" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4b" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4d" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios4d" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Rotavirus at 6 weeks</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios5a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios5a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5b" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5b" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5d" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios5d" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Rotavirus at 10 Weeks</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios6a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios6a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6b" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6b" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6d" id="ResponseNoPres" value="Present"=""="">Up to date</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios6d" id="ResponsePres" value="Not Present">Not up to date</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Deworming</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios7a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios7a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7b" id="ResponseNoPres" value="Present"=""="">Deworming needed</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7b" id="ResponsePres" value="Not Present">No Deworming needed</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7b" id="ResponseNoPres" value="Present"=""="">Deworming needed</label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios7b" id="ResponsePres" value="Not Present">No Deworming needed</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(H) Child's feeding</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios8a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios8a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponseNoPres" value="Present"=""="">Exclusive breastfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponsePres" value="Not Present">Replacement feeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponsePres" value="Not Present">Complimentary feeding
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponseNoPres" value="Present"=""="">Exclusive breastfeeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponsePres" value="Not Present">Replacement feeding
                                                                                <br>
                                                                            </label>
                                                                            <br>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios8b" id="ResponsePres" value="Not Present">Complimentary feeding
                                                                                <br>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(I) Care for development</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios9a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios9a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9b" id="ResponseNoPres" value="Present"=""="">On track</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9b" id="ResponsePres" value="Not Present">Not on track</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9c" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9c" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9d" id="ResponseNoPres" value="Present"=""="">On track</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios9d" id="ResponsePres" value="Not Present">Not on track</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(J) Other conditions</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios10a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios10a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input style="width:70%" type="text" class="form-control" placeholder="Enter ...">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios10b" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios10b" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input style="width:70%" type="text" class="form-control" placeholder="Enter ...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(K) Mother's condition</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios11a" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsradios11a" id="ResponseNo" value="No">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:70%" type="text" class="form-control" placeholder="Enter ...">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios11b" id="ResponseYes" value="Yes"=""="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsradios11b" id="ResponseNo" value="No">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="form-group">
                                                                    <input style="width:70%" type="text" class="form-control" placeholder="Enter ...">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th rowspan="2">
                                                                <span style="font-size:14pt">Treatment and Counselling</span>
                                                            </th>
                                                            <th colspan="2">HCW Response</th>
                                                            <th colspan="2">Assessor Response</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                            <th>Response</th>
                                                            <th>Findings</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <b>(A) Needed Vitamin A supplemenation given</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(B) Needed Rotavirus at 6 weeks given</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(C) Needed Rotavirus at 10 weeks given</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(D) Needed deworming medication given</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(E) Appropriate counselling in feeding
                                                                    <br>problems and homecare given</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(F) Appropriate follow up arranged</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <b>(G) Appropriate refferal done</b>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="form-group2">
                                                                        <div class="">
                                                                            <label>
                                                                                <input type="radio" name="optionsradios31" id="RessponseYes" value="">Yes</label>
                                                                            <label>
                                                                                <input type="radio" name="optionradios31" id="ResponseNo" value="">No</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <input style="width:60%" type="text" class="" placeholder="">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <!-- /.box-primary2 -->
                                        <div class="box" id="Section4">
                                            <div class="box-body">
                                                <br>
                                                <center>
                                                    <h2>
                                                        <b>SECTION 4 of 4: CONSULTATION AND EXIT INTERVIEWS</b>
                                                    </h2>
                                                </center>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th style="width: 5%">
                                                                <span style="font-size:14pt">4.1</span>
                                                            </th>
                                                            <th style="width: 75%">
                                                                <span style="font-size:14pt">Consultation observation</span>
                                                            </th>
                                                            <th>
                                                                <b>Case 1</b>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.1</td>
                                                            <td>Did provider use the IMCI Chart Booklet?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios21" id="ResponseYes" value="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios31" id="ResponseNo" value="">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.2</td>
                                                            <td>Did the provider use the under five register to document assessement &amp;
                                                                classificaton?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" id="ResponseYes" value="">Yes</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios2" id="ResponseNo" value="">No</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.3</td>
                                                            <td>Did provider inform caregiver about illness of her child?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios3" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios3" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.4</td>
                                                            <td>Did provider teach and instruct caregiver to give medicine to child?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios4" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios4" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.5</td>
                                                            <td>Did provider give first dose of medicine at health centre?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios5" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios5" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.6</td>
                                                            <td>Did provider counsel about child's feeding?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios6" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios6" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.7</td>
                                                            <td>Did provider explain how to take care of child correctly?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios7" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios7" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.8</td>
                                                            <td>Did provider ask caregiver for feedback?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios8" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios8" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.9</td>
                                                            <td>Did provider explain when to return?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios9" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios9" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.1.10</td>
                                                            <td>Did provider use caregiver's card?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios40" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionsRadios40" id="ResponseNo"
                                                                                value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-body">
                                                <table class="table">
                                                    <!-- /Page 6 IMCI Survey-->
                                                    <thead>
                                                        <!--/ Column headings for 2B. ASSESSMENT FOR THE SICK YOUNG INFANT AGE
                                                        UPTO 2 MONTHS -->
                                                        <tr>
                                                            <th style="width: 5%">
                                                                <span style="font-size:14pt">4.1</span>
                                                            </th>
                                                            <th style="width: 60%">
                                                                <span style="font-size:14pt">Consultation observation</span>
                                                            </th>
                                                            <th>
                                                                <b>Case 1</b>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.1</td>
                                                            <td>Was caregiver satisfied with the service offered?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios43" id="ResponseYes" value="Yes">Yes</label>
                                                                                <input type="radio" name="optionRadios43" id="ResponseNo" value="No">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.2</td>
                                                            <td>Who advised caregiver to seek services at the Health Facility?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Self
                                                                                    <input type="radio" name="optionsRadios42" id="ResponseMother" value="">
                                                                                </label>&nbsp;
                                                                                <label>Spouse
                                                                                    <input type="radio" name="optionsRadios42" id="ResponseFather" value="">
                                                                                </label>&nbsp;
                                                                                <label>Relative
                                                                                    <input type="radio" name="optionsRadios42" id="ResponseAunt" value="">
                                                                                </label>&nbsp;
                                                                                <label>Friend
                                                                                    <input type="radio" name="optionsRadios42" id="ResponseUncle" value="">
                                                                                </label>
                                                                            </div>
                                                                            <label>Community Health Worker
                                                                                <input type="radio" name="optionsRadios42" id="ResponseBrother"
                                                                                value="">
                                                                            </label>&nbsp;
                                                                            <label>Media e.g. Radio
                                                                                <input type="radio" name="optionsRadios42" id="ResponseSister"
                                                                                value="">
                                                                            </label>
                                                                            <br>
                                                                            <label>Specify Station
                                                                                <input type="text" name="optionText42" id="ResponseOthers"
                                                                                value="">
                                                                            </label>
                                                                            <label>Others (Specify)
                                                                                <input type="text" name="optionText42" id="ResponseOthers"
                                                                                value="">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.3</td>
                                                            <td>Did caregiver explain correctly how to give medicine?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios44" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios44" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.4</td>
                                                            <td>Did caregiver explain correctly how to take care of child at home?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios45" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios45" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.5</td>
                                                            <td>Did caregiver explain when to return to health centre immediately?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios46" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios46" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.6</td>
                                                            <td>Did caregiver explain when to return to the health centre for follow-up?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Yes</label>
                                                                                <input type="radio" name="optionRadios11" id="ResponseNo" value="">No</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4.2.7</td>
                                                            <td>Did caregiver explain correctly how to give medicine?</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseMother" value="">Mother</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseFather" value="">Father</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionRadios11" id="ResponseGrandmother" value="">Grandmother</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseAunt" value="">Aunt</label>
                                                                                <label>
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseUncle" value="">Uncle</label>
                                                                            </div>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios11" id="ResponseBrother" value="">Brother</label>
                                                                            <label>
                                                                                <input type="radio" name="optionsRadios11" id="ResponseSister" value="">Sister</label>
                                                                            <label>Others (Specify)
                                                                                <input type="text" name="optionText11" id="ResponseOthers"
                                                                                value="">
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-header">
                                                <h3 class="box-title">ASSESSMENT OUTCOME</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:20%">
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionsRadios11" id="ResponseYes" value="">Fully Practicing IMCI</label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionRadios21" id="ResponseNo" value="">Practicing with gaps</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <label>Reason:
                                                                    <input type="text" name="optionText33" id="ResponseNo" value="">
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="">
                                                                    <label>
                                                                        <input type="radio" name="optionRadios31" id="ResponseNo" value="">Not practicing at all</label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <label>Reason:
                                                                    <input type="text" name="optionText33" id="ResponseNo" value="">
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-header">
                                                <h3 class="box-title">Criteria for Certification: SECTION A</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:5%">(A)</td>
                                                            <td style="width:50%">Correctly identifies 4 danger signs</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(B)</td>
                                                            <td>Correctly identifies 4 symptoms</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(C)</td>
                                                            <td>Correctly conducts HIV assessment</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(D)</td>
                                                            <td>Correctly classifies, treat and counsel</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(E)</td>
                                                            <td>Correct management of young infant</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <span style="color:red;padding-left:2%">
                                                    <b>A partiipant MUST correctly identify all the above in section A to be
                                                        certified</b>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="box box-primary">
                                            <br>
                                            <div class="box-header">
                                                <h3 class="box-title">Checked for the Following: SECTION B</h3>
                                            </div>
                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <table class="table ">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width:5%">(A)</td>
                                                            <td style="width:50%">Malnutrition</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(B)</td>
                                                            <td>Anaemia</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(C)</td>
                                                            <td>Deworming</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(D)</td>
                                                            <td>Child's Feeding</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(E)</td>
                                                            <td>Care for Development</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(F)</td>
                                                            <td>Immunization</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->
                                        <div class="box box-primary">
                                            <div class="box-body">
                                                <p>
                                                    <b>Where NO, there are gaps identified and the HCW will need mentorship to
                                                        incorporate these in routine care for the child
                                                        <br>If YES to all, consider HCW for TOT and Mentorship Training
                                                        <br>(NOTE: IF THE HEALTHCARE WORKER FAILS TO ATTAIN ALL THE POINTS IN SECTON
                                                        A, THE PARTICIPANT SHOULD BE GIVEN A SECOND CHANCE. IF THE PARTICIPANT
                                                        FAILS IN THE SECOND ATTEMPT, MENTORSHIP IS RECOMMENDED BEFORE FURTHER ASSESMENT)</b>
                                                </p>
                                                <div class="box box-primary">
                                                    <div class="box-header">
                                                        <h3 class="box-title">CERTIFICATION</h3>
                                                    </div>
                                                </div>
                                                <div class="box-body no-padding"></div>
                                                <table class="table">
                                                    <thead>
                                                        <!-- /.box -->
                                                    </thead>
                                                </table>
                                                <table class="table table-condensed">
                                                    <tbody>
                                                        <tr>
                                                            <td>(A)</td>
                                                            <td>HEALTHCARE PROVIDER CERTIFIED</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="radio-inline">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-inline">
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(B)</td>
                                                            <td>HEALTHCARE PROVIDER RECOMMENDED FOR MENTORSHIP</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="radio-inline">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-inline">
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>(C)</td>
                                                            <td>HEALTHCARE PROVIDER RECOMMENDED FOR TOT</td>
                                                            <td>
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="form-group">
                                                                            <div class="radio-inline">
                                                                                <label>Yes
                                                                                    <input type="radio" name="optionsRadios11" id="ResponseYes" value="">
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-inline">
                                                                                <label>No
                                                                                    <input type="radio" name="optionRadios11" id="ResponseNo" value="">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                            </div>
                        </div>
                        </section>
                
                    <!-- /.box -->
                    <!-- /.box-body </div><!-- /.box -->
                    <!-- Input addon -->
                    <!--/.col (left) -->
        </div>
        </div>
        </section>
        </aside>
 

                    @endsection

