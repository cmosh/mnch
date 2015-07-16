
	@extends('ch/survey/dashboard')
	@section('pageinfo')

@section('content')

  <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        
                        <div class="box" id="Section1" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 1 of 8: FACILITY INFORMATION</b></h2></center>
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
                                <!-- /.box -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Assessor Information</h3>
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
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" id="fc_email1"
                                                placeholder="Enter Phone Number">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
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
                                </div>
                                <div class="box box-primary"></div>
                                <!-- /.box-body -->
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Clinical Staff</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Total in facility</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Total available on duty</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Number of trained staff in IMCI</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Number of trained staff in ICCM</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Number of Staff Trained in Enhanced Diarrhoea Management</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>Number of staff trained Diarrhoea and Pneumonia CM Es for USs</u>
                                                </th>
                                                <th width="12.5%" style="vertical-align:middle">
                                                    <u>How many of the total staff members trained in IMCI are still working
                                                        in Child Health Unit</u>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Doctor</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Nurse</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>R.C.O</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">HEALTH SERVICES</h3>
                                    </div>
                                    <table class="table">
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">
                                                    <b>Where are sick children Seen?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">General OPD</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Paediatric OPD</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">MNH</label>
                                                    </div>
                                                </td>
                                                <td colspan="12" width="25%">
                                                    <label>Other</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input name="optionsRadios" type="radio" value="Other">
                                                        </span>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <!-- /.box -->
                            <!-- /.box-body </div><!-- /.box -->
                            <!-- Input addon -->
                            <!--/.col (left) -->
                        </div>
                        <div class="box" id="Section2" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 2 of 8: GUIDELINES,JOBS AND TOOLS</b></h2></center>
                        <br>
                        </div>
                        </div>



                        <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">GUIDELINES AND JOBS AIDS AVAILABILITY</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="75%" style="vertical-align:middle">
                                                    <u>Aspect</u>
                                                </th>
                                                <th width="25%" style="vertical-align:middle" colspan="2">
                                                    <u>Response</u>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>A. Does the facility have updated 2012 IMCI guidelines/chart booklets?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>B. Does the facility have updated ORT guidelines?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios2" id="optionsRadios2" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>C. Does the facility have updated Integrated Community Case Management/Community
                                                        IMCI (ICCM) guidelines?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios3" id="optionsRadios3" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>D. Does the facility have an updated Paediatric Protocol 2010/2013?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios4" id="optionsRadios4" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios4" id="optionsRadios4" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>E. Does the facility have an updated Diarrhoea management job aid 2014?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios5" id="optionsRadios5" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios5" id="optionsRadios5" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>F. Does the facility have updated IEC materials for categories?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios6" id="optionsRadios6" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios6" id="optionsRadios6" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>G. Does the facility have updated ART guidelines 2012?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios7" id="optionsRadios7" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios7" id="optionsRadios7" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>H. Does the facility have an updated Early Infant Diagnosis Algorithm
                                                        2009/2012/2014?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios8" id="optionsRadios8" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios8" id="optionsRadios8" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">Does the unit have the following tools?</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="75%" style="vertical-align:middle">
                                                    <u>Aspect</u>
                                                </th>
                                                <th width="25%" style="vertical-align:middle" colspan="2">
                                                    <u>Response</u>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>A.Early Infant Diagnosis (EID) register</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios9" id="optionsRadios9" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios9" id="optionsRadios9" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>B. Under 5 Register</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios10" id="optionsRadios10" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios10" id="optionsRadios10" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>C. ORT Corner register (improvised)</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios11" id="optionsRadios11" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios11" id="optionsRadios11" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>D. Mother Child Booklet</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios12" id="optionsRadios12" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios12" id="optionsRadios12" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>E. ORT Corner register (MOH)</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios13" id="optionsRadios13" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios13" id="optionsRadios13" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>F. IMCI case recording form</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios14" id="optionsRadios14" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios14" id="optionsRadios14" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>G. Referral Slips</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios15" id="optionsRadios15" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios15" id="optionsRadios15" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="vertical-align:middle">
                                                    <b>H. ICCM Tools</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios16" id="optionsRadios16" value="option1">Yes</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="vertical-align:middle">
                                                        <label>
                                                            <input type="radio" name="optionsRadios16" id="optionsRadios16" value="option1">No</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>



                                <div class="box" id="Section3" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 3 of 8: DOCUMENTED FACILITY LEVEL DATA</b></h2></center>
                        <br>
                        </div>
                        </div>



                       
                                <!-- general form elements -->
                                <!-- /.box -->
                                <!-- /.box -->
                                <!-- /.box-body -->
                                <div class="box box-primary">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="28%" rowspan="2" style="vertical-align:top">
                                                    <b>Diarrhoea Treatment in Under 5 Register</b>
                                                </th>
                                                <th width="72%" colspan="12" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>2012</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align:middle">
                                                    <b>Jan</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Feb</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Mar</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Apr</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jun</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jul</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Aug</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Sep</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Oct</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Nov</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Dec</b>
                                                </th>
                                            </tr>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Total Number of Diarrhoea Cases</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS + Zinc</b>
                                                    <br>(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
                                                    <br>metronldazole + ORS+Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS</b>
                                                    <br>(Example: ORS only, ORS+ antibiotics+ ORS+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with Zinc</b>
                                                    <br>(Example: Zinc only, Zinc + antibiotic, Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with antibiotics</b>
                                                    <br>(Example:Antibiotics+other treatment without zinc or ORS, antibiotics
                                                    only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with others</b>
                                                    <br>(Example: Others+ vitamin A only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true">
                                                    <b>No Treatment</b>(i.e No drugs prescribed)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" colspan="12">
                                                    <b>Non Diarrhoea cases that received ORS + Zinc</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Fever</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Pneumonia</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Others</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Total number of cases documented in ORT Corner Register</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="28%" rowspan="2" style="vertical-align:top">
                                                    <b>Diarrhoea Treatment in Under 5 Register</b>
                                                </th>
                                                <th width="72%" colspan="12" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>2013</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align:middle">
                                                    <b>Jan</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Feb</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Mar</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Apr</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jun</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jul</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Aug</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Sep</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Oct</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Nov</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Dec</b>
                                                </th>
                                            </tr>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Total Number of Diarrhoea Cases</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS + Zinc</b>
                                                    <br>(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
                                                    <br>metronldazole + ORS+Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS</b>
                                                    <br>(Example: ORS only, ORS+ antibiotics+ ORS+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with Zinc</b>
                                                    <br>(Example: Zinc only, Zinc + antibiotic, Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with antibiotics</b>
                                                    <br>(Example:Antibiotics+other treatment without zinc or ORS, antibiotics
                                                    only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with others</b>
                                                    <br>(Example: Others+ vitamin A only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true">
                                                    <b>No Treatment</b>(i.e No drugs prescribed)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" colspan="12">
                                                    <b>Non Diarrhoea cases that received ORS + Zinc</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Fever</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Pneumonia</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Others</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Total number of cases documented in ORT Corner Register</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="28%" rowspan="2" style="vertical-align:top">
                                                    <b>Diarrhoea Treatment in Under 5 Register</b>
                                                </th>
                                                <th width="72%" colspan="12" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>2014</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align:middle">
                                                    <b>Jan</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Feb</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Mar</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Apr</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jun</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jul</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Aug</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Sep</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Oct</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Nov</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Dec</b>
                                                </th>
                                            </tr>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Total Number of Diarrhoea Cases</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS + Zinc</b>
                                                    <br>(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
                                                    <br>metronldazole + ORS+Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS</b>
                                                    <br>(Example: ORS only, ORS+ antibiotics+ ORS+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with Zinc</b>
                                                    <br>(Example: Zinc only, Zinc + antibiotic, Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with antibiotics</b>
                                                    <br>(Example:Antibiotics+other treatment without zinc or ORS, antibiotics
                                                    only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with others</b>
                                                    <br>(Example: Others+ vitamin A only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true">
                                                    <b>No Treatment</b>(i.e No drugs prescribed)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" colspan="12">
                                                    <b>Non Diarrhoea cases that received ORS + Zinc</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Fever</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Pneumonia</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Others</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Total number of cases documented in ORT Corner Register</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="28%" rowspan="2" style="vertical-align:top">
                                                    <b>Diarrhoea Treatment in Under 5 Register</b>
                                                </th>
                                                <th width="72%" colspan="12" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>2015</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th style="vertical-align:middle">
                                                    <b>Jan</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Feb</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Mar</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Apr</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jun</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Jul</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Aug</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Sep</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Oct</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Nov</b>
                                                </th>
                                                <th style="vertical-align:middle">
                                                    <b>Dec</b>
                                                </th>
                                            </tr>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>Total Number of Diarrhoea Cases</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS + Zinc</b>
                                                    <br>(Example: ORS+Zinc, ORS+Zinc+vitamin A, ORS+Zinc+ antibiotics, ORS+zinc+
                                                    <br>metronldazole + ORS+Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with ORS</b>
                                                    <br>(Example: ORS only, ORS+ antibiotics+ ORS+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with Zinc</b>
                                                    <br>(Example: Zinc only, Zinc + antibiotic, Zinc+Others)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with antibiotics</b>
                                                    <br>(Example:Antibiotics+other treatment without zinc or ORS, antibiotics
                                                    only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Treatment with others</b>
                                                    <br>(Example: Others+ vitamin A only)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true">
                                                    <b>No Treatment</b>(i.e No drugs prescribed)</td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td style="vertical-align:middle">
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td contenteditable="true" colspan="12">
                                                    <b>Non Diarrhoea cases that received ORS + Zinc</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Fever</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Pneumonia</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Others</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>Total number of cases documented in ORT Corner Register</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                                <td>
                                                    <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                           
                            <!-- /.box -->
                            <!-- /.box-body </div><!-- /.box -->
                            <!-- Input addon -->
                            <!--/.col (left) -->
                        


                          <div class="box" id="Section4" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 4 of 8: COMMODITY AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>


                        <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">MAIN SUPPLIER</h3>
                                    </div>
                                    <table class="table">
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">
                                                    <b>Who is the main supplier of the commodities BELOW?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Central Government/
                                                            <br>County Government</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Privately Supplied</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Own Initiative</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Partner</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Not Applicable</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE COMMODITIES
                                            BELOW</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="20%" rowspan="2" style="vertical-align:middle">
                                                    <b>Commodity Name</b>
                                                </th>
                                                <th width="20%" rowspan="2" style="vertical-align:middle">
                                                    <b>Commodity Unit</b>
                                                </th>
                                                <th width="20%" colspan="2" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Availability (One Selection Allowed)</b>
                                                    </div>
                                                </th>
                                                <th width="40%" colspan="3" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Main Reason for Unavailability</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Available</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Not Available</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Not Ordered</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Ordered but not yet received</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Expired</b>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Artemether + Leumefantrine (AL)</td>
                                                <td width="25%" style="vertical-align:middle">20mg + 120mg</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Artesunate Injection</td>
                                                <td width="25%" style="vertical-align:middle"></td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Injection Quinine</td>
                                                <td width="25%" style="vertical-align:middle">300mg/lml in 2ml amp.</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Syrup Metronidazole</td>
                                                <td width="25%" style="vertical-align:middle">200mg/5ml</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Syrup Amoxicillin</td>
                                                <td width="25%" style="vertical-align:middle">125mg/5ml</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Syrup Cotrimoxazole</td>
                                                <td width="25%" style="vertical-align:middle">240mg/5ml</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Tablet Paed Cotrimoxazole</td>
                                                <td width="25%" style="vertical-align:middle">120mg</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Low Osmolarity Oral Rehydration Salts (ORS)</td>
                                                <td width="25%" style="vertical-align:middle">1 sachet (500ml)</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1h" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1h" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2h" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2h" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2h" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">RESOMAL</td>
                                                <td width="25%" style="vertical-align:middle"></td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1i" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1i" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2i" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2i" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2i" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Vitamin A</td>
                                                <td width="25%" style="vertical-align:middle">50,000 IU</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1j" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1j" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2j" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2j" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2j" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Vitamin A</td>
                                                <td width="25%" style="vertical-align:middle">100,000 IU</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1k" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1k" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2k" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2k" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2k" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Vitamin A</td>
                                                <td width="25%" style="vertical-align:middle">200,000 IU</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1l" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1l" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2l" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2l" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2l" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Zinc Sulphate</td>
                                                <td width="25%" style="vertical-align:middle">20mg(number of strips, 1 Strip = 10 tablets)</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1m" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1m" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2m" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2m" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2m" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">ORS &amp; Zinc Co-pack</td>
                                                <td width="25%" style="vertical-align:middle">4 sachets (SOOml) of ORS &amp; 10 tablets of Zinc</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1n" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1n" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2n" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2n" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2n" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Rota Virus Vaccine</td>
                                                <td width="25%" style="vertical-align:middle"></td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1o" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1o" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2o" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2o" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2o" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>









                          <div class="box" id="Section5" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 5 of 8: ORAL REHYDRATION THERAPY</b></h2></center>
                        <br>
                        </div>
                        </div>




                         <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title" contenteditable="true">ORAL REHYDRATION THERAPY CORNER ASSESSMENT</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="6">
                                                <u>
                                                    <b>*Verify this information by looking at the ORT Register and identifying
                                                        the location of the ORT Corner</b>
                                                </u>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle" rowspan="3" width="50%" colspan="1">
                                                <b>Does this Facility have a designed location for oral rehydration?</b>
                                            </td>
                                            <td layout="text-align:center" colspan="5" width="50%">
                                                <b>RESPONSE</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Yes</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>No</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle" colspan="1" rowspan="2" width="50%">
                                                <b>Where is the designated location of the ORT Corner?</b>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>MCH</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>US Clinic</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>OPD</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Ward</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Other Specify</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input name="optionsRadios1a" type="radio" id="optionsRadios1" value="option1">
                                                    </span>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle" colspan="1" rowspan="2" width="50%">
                                                <b>ORT Corner Functionality</b>
                                            </td>
                                            <td colspan="5" width="50%">
                                                <b>RESPONSE</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Yes</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>No</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle" colspan="1" width="50%">
                                                <b>(A) Are there drugs available in the ORT Corner?</b>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1z" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1z" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle" colspan="1" width="50%">
                                                <b>(B) Is the ORT register up to date (Including zero-reporting)</b>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1y" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1y" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>




                            <div class="box" id="Section6" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 6 of 8: SUPPLIES AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>





                        
                        
                        
                        <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">MAIN SUPPLIER</h3>
                                    </div>
                                    <table class="table">
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">
                                                    <b>Who is the main supplier of the commodities BELOW?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Central Government/
                                                            <br>County Government</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Privately Supplied</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Own Initiative</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Partner</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Not Applicable</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">INDICATE THE AVAILABILITY OF THE FOLLOWING SUPPLIES</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="20%" rowspan="2" style="vertical-align:middle">
                                                    <b>Supplies Name</b>
                                                </th>
                                                <th width="20%" colspan="2" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Availability (One Selection Allowed)</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Available</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Not Available</b>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Spacer</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Suction machine</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">NG Tube</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Disposable Syringes</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Insulin Syringes</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">IV Starter Kit</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Nebulizer</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1g" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>




                                <div class="box" id="Section7" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 7 of 8: RESOURCE AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>




                        <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title" contenteditable="true">MAIN SUPPLIER</h3>
                                    </div>
                                    <table class="table">
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">
                                                    <b>Who is the main supplier of the commodities BELOW?</b>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Central Government/
                                                            <br>County Government</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Privately Supplied</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Own Initiative</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Partner</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                        <label>
                                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Not Applicable</label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <h3 class="box-title">INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES</h3>
                                    </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="20%" rowspan="2" style="vertical-align:middle">
                                                    <b>Resource Name</b>
                                                </th>
                                                <th width="20%" colspan="2" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Availability (One Selection Allowed)</b>
                                                    </div>
                                                </th>
                                                <th width="40%" colspan="5" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Location of Availability (Multiple Selection Allowed)</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Available</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>Not Available</b>
                                                    </div>
                                                </th>
                                                <th width="12%" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>OPD</b>
                                                    </div>
                                                </th>
                                                <th layout="text-align:center">
                                                    <div class="text-center" width="10%">
                                                        <b>MCH</b>
                                                    </div>
                                                </th>
                                                <th layout="text-align:center">
                                                    <div class="text-center" width="10%">
                                                        <b>US Clinic</b>
                                                    </div>
                                                </th>
                                                <th layout="text-align:center">
                                                    <div class="text-center" width="10%">
                                                        <b>Ward</b>
                                                    </div>
                                                </th>
                                                <th layout="text-align:center">
                                                    <div class="text-center" width="10%">
                                                        <b>Other</b>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Safe Water Source(AL)</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios4a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios5a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">Electricity</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios3b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios4b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios5b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios6b" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">TV</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios3c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios4c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios6c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="25%" style="vertical-align:middle">DVD Player</td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios1d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios2d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios3d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios4d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios5d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="optionsRadios6d" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>




                                <div class="box" id="Section8" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 8 of 8: COMMUNITY STRATEGY</b></h2></center>
                        <br>
                        </div>
                        </div>




                         <div class="box box-primary">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="100%" style="vertical-align:top" colspan="2">
                                                    <b>COMMUNITY STRATEGY</b>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th width="80%" style="vertical-align:top">
                                                    <b>ASPECT</b>
                                                </th>
                                                <th width="20%" colspan="12" layout="text-align:center">
                                                    <div class="text-center">
                                                        <b>TOTAL</b>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr></tr>
                                            <tr></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <b>(1) Total number of Community Units established and functional</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(2) Total number of Community Units trained in ICCM</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(3) Total number of cases treated with Zinc and ORS Co-pack under Community
                                                        Case Management of diarrhoea</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(4) Total number of active CHEWS</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(5) Total number of active CHEWs trained on ICCM</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(6) Total number of active CHVs</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(7) Total number of active CHVs trained on ICCM</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- /.box-body -->
                                </div>







                    </section>

 

                    @endsection

