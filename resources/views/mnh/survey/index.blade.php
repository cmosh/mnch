
	@extends('mnh/survey/dashboard')
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
                        

                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Facility Information</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                <label>Facility Name</label>
                                                <input type="text" class="form-control" id="InputFacilityName"
                                                placeholder="Enter name">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Facility Tier</label>
                                                <input type="text" class="form-control" id="inputFacilityTier"
                                                placeholder="Enter type">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>County</label>
                                                <input type="text" class="form-control" id="inputFacilityCounty"
                                                placeholder="Enter tier">
                                            </div>
                                            <br>
                                            <div class="col-xs-4">
                                                <label>Facility Type</label>
                                                <input type="text" class="form-control" id="inputFacilityType"
                                                placeholder="Enter owner">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Owned By</label>
                                                <input type="text" class="form-control" id="inputOwnedBy"
                                                placeholder="Enter county">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>District/Sub-County</label>
                                                <br>
                                                <input type="text" class="form-control" id="inputDistrict" placeholder="Enter district/sub-county">
                                            </div>
                                        </div>
                                        <div class="box-header">
                                            <h3 class="box-title">Assessor Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">Name</div>
                                            <div class="col-xs-3">Designation</div>
                                            <div class="col-xs-3">Email</div>
                                            <div class="col-xs-3">Phone Number</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <!-- Assessor Name-->
                                                <input type="text" class="form-control" id="fc_name1" placeholder="Enter Name">
                                            </div>
                                            <div class="col-xs-3">
                                                <!-- Assessor Designation-->
                                                <input type="text" class="form-control" id="fc_designation1" placeholder="Enter Designation">
                                            </div>
                                            <div class="col-xs-3">
                                                <!-- Assessor Mobile Number-->
                                                <input type="text" class="form-control" id="fc_mobile1" placeholder="Enter Mobile">
                                            </div>
                                            <div class="col-xs-3">
                                                <!-- Assessor Email-->
                                                <input type="email" class="form-control" id="fc_email1" placeholder="Enter Email">
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
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Facility Contact Information</h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <label>Cadre</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-xs-3">
                                                    <label>Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-3">Facility In charge</div>
                                                <div class="col-xs-3">
                                                    <!--Name of Facility -->
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                    <br>
                                                </div>
                                                <div class="col-xs-3">MCH In charge</div>
                                                <div class="col-xs-3">
                                                    <!--Name of Facility -->
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                    <br>
                                                </div>
                                                <div class="col-xs-3">Maternity in charge</div>
                                                <div class="col-xs-3">
                                                    <!--Name of Facility -->
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                                <!--/. col-md-12-->
                            </div>
                            <div class="box box-primary">
                                <div class="box-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="col-xs-4">Question</th>
                                                <th class="col-xs-3" colspan="2" align="center">Response</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-md-4" rowspan="2">
                                                    <label>DOES THIS FACILITY CONDUCT DELIVERIES</label>
                                                </td>
                                                <td class="col-xs-3">
                                                    <label>YES</label>
                                                </td>
                                                <td class="col-xs-3">
                                                    <label>NO</label>
                                                </td>
                                                <td class="col-xs-3">
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-xs-3">
                                                    <label>1</label>
                                                    <input type="radio" name="opt1">
                                                </td>
                                                <td class="col-xs-3">
                                                    <label>2</label>
                                                    <input type="radio" name="opt1">
                                                </td>
                                                <td>
                                                    <br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-12">
                                                    <p>
                                                        <b>IF NO, WHAT ARE THE MAIN REASONS FOR NOT CONDUCTING DELIVERIES(multiple
                                                            selections allowed)</b>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Inadequate skill 1.
                                                        <input type="checkbox" name="inadSkill">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label class="Text-center">Inadequate staff 2.
                                                        <input type="checkbox" name="inadSkill">
                                                    </label>
                                                </td>
                                                <td>
                                                    <label>Inadequate infrastructure 3.
                                                        <input type="checkbox" name="inadInfra">
                                                    </label>
                                                </td>
                                                <td class="col-md-3">
                                                    <label>Inadequate Equipment 4.
                                                        <input type="checkbox" name="inadEquip">
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="col-md-5">
                                                        <label>In adequate Commodities and Suppliers 5.
                                                            <input type="checkbox" name="inadComm">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="col-xs-3">
                                                    <label>Others (Please Specify)</label>
                                                    <input type="text" name="inadOther ">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>PROVISION OF NURSES</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Question</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Response</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>1.Total number of skilled birth attendants deployed in a meternity unit</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter ...">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-header">
                                    <label>PROVISION OF BEDS</label>
                                </div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="col-md-4 col-xs-3">Question</th>
                                            <th class="col-md-3 col-xs-3">Response</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr></tr>
                                        <tr>
                                            <td>
                                                <label>(A)Total number of Beds in Facility</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(B)Total number of Beds in Maternity</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(C)Total number of Beds for New-borns</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(D)Total number of Beds in Facility</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(E)Total number of Beds in Facility</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(F)Total number of Beds in Facility</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Enter Number">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>PROVISION OF SERVICES</label>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="col-md-5 col-xs-3" rowspan="2">Question</th>
                                            <th class="col-md-3 col-xs-3" colspan="2">Response</th>
                                        </tr>
                                        <tr>
                                            <th class="col-md-3 col-md-offset-2">
                                                <label>Yes</label>
                                            </th>
                                            <th class="col-md-3 col-md-offset-2">
                                                <label>No</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>(1)Does this facility operate 24 Hours a Day, 7 days a Week?</label>
                                            </td>
                                            <td>
                                                <div class="col-md-3 col-md-offset-2">
                                                    <div class="radio">
                                                        <label>1
                                                            <input type="radio" name="opt1">
                                                        </label>
                                                        <br>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-3 col-md-offset-2">
                                                    <div class="radio">
                                                        <label>2
                                                            <input type="radio" name="opt1">
                                                        </label>
                                                        <br>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>Health Facility Management</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6" rowspan="2">
                                        <label>QUESTION</label>
                                        <br>
                                    </div>
                                    <div class="col-md-3" colspan="2">
                                        <label>Response</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-6">
                                        <label>YES</label>
                                    </div>
                                    <div class="col-md-3">
                                        <label>NO</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(1) Does this facility have Health Facility Management Committee or Board?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt3">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt3">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(2) Does this facility have a Quality Improvement Committee?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt4">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt4">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(3) Does this facility have a Maternal Perinatal Death Review [MPDR] Committee?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt5">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt5">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(4) Does this facility have a Infection Prevention Committee?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt6">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt6">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(5) Does this facility have a disciplinary Committee?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt7">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt7">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>(6) Does this Facility have a Corruption Prevention Committee?</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>1
                                                <input type="radio" value="1" name="opt8">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="radio">
                                            <label>2
                                                <input type="radio" value="2" name="opt8">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                       <div class="box" id="Section2" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 2 of 8: FACILITY DATA AND MATERIAL AND NEONATAL SERVICE DELIVERY</b></h2></center>
                        <br>
                        </div>
                        </div>

                          <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">INDICATE THE NUMBER OF DELIVERIES CONDUCTED IN THE FACILITY IN THE PREVIOUS
                                        YEAR(JAN-DEC)</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <label>YEAR
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>JAN
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>FEB
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>MARCH
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>APRIL
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>MAY
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>JUNE
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>JULY
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>AUG
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>SEP
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>OCT
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>NOV
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                        <div class="col-md-1">
                                            <label>DEC
                                                <input type="number" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                    <table></table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                            <!-- Form Element sizes -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">PROVISION OF BASIC EMERGENCY OBSTETRIC NEONATAL CARE(BEmONC) SIGNAL FUNCTIONS</h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <div width="24%"></div>
                                <div width="24%"></div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="28%" rowspan="2" style="vertical-align:middle">
                                                <div style="text-align:left">
                                                    <b>SIGNAL FUNCTION</b>
                                                </div>
                                            </th>
                                            <th width="24%" colspan="2" style="text-align:center">
                                                <div class="text-center">
                                                    <b>WAS CONDUCTED</b>
                                                </div>
                                            </th>
                                            <th width="48%" colspan="12" style="text-align:center">
                                                <div class="text-center">
                                                    <b>INDICATE PRIMARY CHALLENGE</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th width="10%" style="vertical-align:middle">
                                                <div style="text-align:center">
                                                    <b>YES</b>
                                                </div>
                                            </th>
                                            <th width="10%" style="vertical-align:middle">
                                                <div style="text-align:center">
                                                    <b>NO</b>
                                                </div>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Inadequate Drugs</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Inadequate Skills</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Inadequate Supplies</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>No Job Aids</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Inadequate Equipment</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Case Never Present</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>No Challenged Experienced</b>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Administration of parenternal antibiotics</b>
                                            </td>
                                            <td style="text-align:center">
                                                <input type="radio" name="opt0" value="1">
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt0" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt9">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt9">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Administration of uterotonic drugs within one minute of delivery antibiotics</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt1" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt1" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt10">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt10">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Administration of uterotonic drugs within one minute of delivery antibiotics</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt2" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt2" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt11">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt11">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Manual removal of placenta</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt3" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt3" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt12">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt12">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Removal of retained products of conception</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt4" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt4" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt13">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt13">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Assisted vaginal delivery</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt5" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt5" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt14">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt14">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>New born resuscitation</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt6" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt6" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt15">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt15">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <b>Use of partograph</b>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt7" value="1">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" name="opt7" value="2">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="1" name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="2 " name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="3" name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="4" name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="5" name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="6" name="opt16">
                                                </label>
                                            </td>
                                            <td style="text-align:center">
                                                <label>
                                                    <input type="radio" value="7" name="opt16">
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>PROVISION OF Comprehensive Emergency Obstetric and New-born Care (CEmONC)
                                        Services</label>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" width="34%" style="vertical-align:middle">
                                                <b>Question</b>
                                            </th>
                                            <th colspan="2" width="34%" style="text-align:center">
                                                <b>Response</b>
                                            </th>
                                            <th width="36%" colspan="12"></th>
                                        </tr>
                                        <tr>
                                            <th style="text-align:center">
                                                <label>Yes</label>
                                            </th>
                                            <th style="text-align:center">
                                                <label>No</label>
                                            </th>
                                            <th width="36%" colspan="12"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(1) Is ther a time a mother needed blood transfusion and could not be
                                                    transfused?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt1" value="1">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt1" value="2">
                                                </label>
                                            </td>
                                            <td width="36%" colspan="12"></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(A) If blood transfusion is performed, indicate main source of blood</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Blood Bank Available</label>
                                                <br>
                                                <label>
                                                    <input type="radio" name="opt2" value="1">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Transfusion Done But No Blood Bank</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt2" value="2">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center; " width="36%" colspan="12">
                                                <label>Other (Specify)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input name="opt2" type="radio" value="Other">
                                                    </span>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(B)If No, Give a reason why blood transfusion is not performed</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Blood Bank Not Available</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt17" value="1">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Supplies and Equipment Not Available</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt17" value="2">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;" width="36%" colspan="12">
                                                <label>Other (Specify)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input name="opt17" type="radio" value="Other">
                                                    </span>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Yes</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>No</label>
                                            </td>
                                            <td width="36%" colspan="12"></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(2) Does this facility have reagents for blood grouping?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt18" value="1">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt18" value="2">
                                                </label>
                                            </td>
                                            <td width="36%" colspan="12"></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(3) Does this facility have a fride for the storage of blood?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt19" value="1">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt19" value="2">
                                                </label>
                                            </td>
                                            <td width="36%" colspan="12"></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(4)Does this facility conduct Caesarean Section</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt20" value="1">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt20" value="2">
                                                </label>
                                            </td>
                                            <td width="36%" colspan="12"></td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">
                                                <label>(A)If No, Give the MAIN reason for not conductiong Caesarean Section</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Supplies and Equipment Not Available</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt21" value="1">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Theatre Space Not Available</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt21" value="2">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Human Resource</label>
                                                <br>
                                                <label></label>
                                                <input type="radio" name="opt21" value="3">
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>Other (Specify)</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <input name="optionsRadios1a" type="radio" value="Other">
                                                    </span>
                                                    <input class="form-control" type="text">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>Provision Of HIV Testing and Counselling</label>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="50%" rowspan="2" style="verticle-align:middle">
                                                <label>QUESTION</label>
                                            </th>
                                            <th colspan="3" style="verticle-align:middle;text-align:center;" width="50%">
                                                <label>Response</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="verticle-align:middle;text-align:center;">
                                                <label>YES</label>
                                            </th>
                                            <th style="verticle-align:middle;text-align:center;">
                                                <label>NO</label>
                                            </th>
                                            <th colspan="12" width="20%" style="verticle-align:middle;text-align:center;">
                                                <label>If No, give MAIN reason</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>(1) Does this facility have Health Facility Management Committee or Board?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt21">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt21">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt21" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(2)Are all pregnant women tested for HIV?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt22">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt22">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt22" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(3) Are ARVs provided to mothes in the MCH??</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt23">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt23">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt23" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(4) Are all infants screened for HIV exposure?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt24">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt24">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt24" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(5) Are Prophylaxis provided to neonates in the MCH?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt24">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt24">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt24" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(6) Are ARVs provided to mothers in the matrnity unit?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt25">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt25">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt25" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(7) Are mothers re-tested for HIV in the maternity unit?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt26">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt26">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt26" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(8) Does this facility offer partner testing?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt27">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt27">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt27" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(9) Does this facility offer psycho-social support?(e.g Mentor Mothers)</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt28">
                                                </label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt28">
                                                </label>
                                            </td>
                                            <td>
                                                <input type="text" name="opt28" placeholder="Enter main reason">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box box-header">
                                    <label>Provision Of New-born Care</label>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="50%" rowspan="2" style="verticle-align:middle;">
                                                <b>Question</b>
                                            </th>
                                            <th colspan="2" width="50%" style="verticle-align:middle;text-align:center;">Response</th>
                                        </tr>
                                        <tr>
                                            <th width="25%" style="verticle-align:middle;text-align:center;">
                                                <label>Yes</label>
                                            </th>
                                            <th width="25%" style="verticle-align:middle;text-align:center;">
                                                <label>No</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>(1)Does this facility manage and admit new-borns?</label>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt29">
                                                </label>
                                                <br>
                                            </td>
                                            <td style="verticle-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt29">
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">Health Facility Management</div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" width="50%">
                                                <label>QUESTION</label>
                                                <br>
                                            </th>
                                            <th colspan="2" width="50%" style="vertical-align:middle;text-align:center;">
                                                <label>Response</label>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align:middle;text-align:center;">
                                                <label>YES</label>
                                            </th>
                                            <th style="vertical-align:middle;text-align:center;">
                                                <label>NO</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>(1) Does this facility provide Kangaroo mother care?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt30">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt30">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(2) Is there a designed space for KMC?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt31">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt31">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(3) Are mothers encouraged to employ KMC?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt32">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt32">
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>(4) Is the facility aware of KMC?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="1" name="opt33">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" value="2" name="opt33">
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <label>Preparedness for Delivery</label>
                                </div>
                                <p>Criteria: Adult Resuscitation Kit Complete, Working and Clean ; New-born
                                    Resuscitation Kit Complete, working and clean; Recieving Place ; Adequate
                                    Light ; No Draft (cold air); Clean (delivery beds, recovery beds and all
                                    surfaces); Waste Disposal System; Sterilization color-coded; Sharp Container;
                                    Privacy, Delivery Kit Complete</p>
                                <p>A facility must meet the ABOVE criteria to be fully prepared</p>
                                <table
                                class="table">
                                    <thead>
                                        <tr></tr>
                                        <tr></tr>
                                        <tr>
                                            <th width="50%" rowspan="2">Question</th>
                                            <th colspan="2" width="50%" style="vertical-align:middle;text-align:center;">Response</th>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align:middle;text-align:center;">
                                                <label>Yes</label>
                                            </th>
                                            <th style="vertical-align:middle;text-align:center;">
                                                <label>No</label>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label>(1) Is this facility prepared for delivery?</label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt34">
                                                </label>
                                            </td>
                                            <td style="vertical-align:middle;text-align:center;">
                                                <label>
                                                    <input type="radio" name="opt34">
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>


                                <div class="box" id="Section3" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 3 of 8: FACILITY INFORMATION</b></h2></center>
                        <br>
                        </div>
                        </div>







                             <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="1" style="vertical-align:middle">
                                                <b>GUIDELINES AVAILABILITY</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>RESPONSE</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Aspects</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Yes</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>No</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(1) Does the facility have updated National Roadmap to improving Maternal
                                                and Neonatal Health</td>
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
                                            <td width="25%" style="vertical-align:middle">(2) Does the facility have updated National Guidelines for Quality Obstetric
                                                and Essential Newborn Care?</td>
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
                                            <td width="25%" style="vertical-align:middle">(3) Does the facility have updated PMTCT guidelines?</td>
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
                                            <td width="25%" style="vertical-align:middle">(4) Does the facility have an updated Post Abortion Care Guidelines?</td>
                                            <td
                                            layout="text-align:center">
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
                                            <td width="25%" style="vertical-align:middle">(5) Does the facility have Infant Young Child Feeding policy statement?</td>
                                            <td
                                            layout="text-align:center">
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
                                            <td width="25%" style="vertical-align:middle">(6) Does the facility have Baby Friendly Hospital Initiative Guideline?</td>
                                            <td
                                            layout="text-align:center">
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
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        
                        <!-- /.box -->
                        <!-- /.box-body </div><!-- /.box -->
                        <!-- Input addon -->
                        <!--/.col (left) -->
                    
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <!-- /.box -->
                            <!-- /.box -->
                            <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="1" style="vertical-align:middle">
                                                <b>JOB AIDS AVAILABILITY</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>RESPONSE</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Aspects</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Yes</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>No</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(1) Does the facility have an updated PPH (AMSTL) job aid?</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(2) Does the facility have an updated Breastfeeding job aid?</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(3) Does the facility have an updated Neonatal Resuscitation Job aid?</td>
                                            <td
                                            layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="2optionsRadios2c" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(4) Does the facility have an updated MgS04 job aid?</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(5) Does the facility have an updated HBB Action Plan (Asphyxia) job aid?</td>
                                            <td
                                            layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="2optionsRadios2e" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(6) Does the facility have Guidelines of Blood Transfusion in Pregnancy
                                                job aid?</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(7) Does the facility use Methods of Oxygen Administration job aid?</td>
                                            <td
                                            layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                                </td>
                                                <td layout="text-align:center">
                                                    <div class="text-center" style="width:100%" width="25%">
                                                        <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(8) Does the facility have an updated KMC job aid?</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="2optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                        <!-- /.box-body </div><!-- /.box -->
                        <!-- Input addon -->
                        <!--/.col (left) -->
                    </div>
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <!-- /.box -->
                            <!-- /.box -->
                            <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="1" style="vertical-align:middle">
                                                <b>TOOLS AVAILABILITY</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>RESPONSE</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Aspects</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Yes</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>No</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(1) Referral Form</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(2) CDRR (Consumption Data Request Report)</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(3)ANC Register</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(4) MPDSR Tools (New Born &amp; Maternal)</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(5) Partograph</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(6) Maternity Register</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(7) Post Natal Register</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(8) Newborn Register</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(9) Mother Child Booklet</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">(10) FP Register</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="3optionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>




                                <div class="box" id="Section4" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 4 of 8: STAFF TRAINING</b></h2></center>
                        <br>
                        </div>
                        </div>

                         <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="12" style="vertical-align:top">
                                                <b>HOW MANY STAFF MEMBERS HAVE BEEN TRAINED IN THE FOLLOWING?</b>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th style="vertical-align:middle">
                                                <b>Cinical Staff</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Total in facility</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Total available on duty</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Basic Emergency Obstetric Neonatal Care (BEmONC)</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Focused Antenatal Care</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Post Natal Care</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Essential Newborn Care</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>Maternal and Perinatal death Surveillance and review (MPDSR)</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Standards - Based Management and Recognition(SBM-R)</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in Uterine Balloon Tamponade</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b># of Staff Trained in PP IUCD</b>
                                            </th>
                                            <th style="vertical-align:middle">
                                                <b>How Many Of The Total Staff Members Trained In BEmONC are still Working
                                                    in the Maternity/ MCH / Gynaecological Ward</b>
                                            </th>
                                        </tr>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="8.333%">
                                                <b>Doctor</b>
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="8.333%">
                                                <b>Nurse</b>
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="8.333%">
                                                <b>R.C.O</b>
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                            <td width="8.333%">
                                                <input style="width:100%" type="text" class="" id="exampleInputEmail1"
                                                placeholder="">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                       










                                <div class="box" id="Section5" >
                       

                        <div class="box-body">
                         <br>
                     
                        <center><h2><b>SECTION 5 of 8: COMMODITY AVAILABILITY</b></h2></center>
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
                                    <h3 class="box-title" contenteditable="true">INDICATE THE AVAILABILITY, MAIN REASON FOR UNAVILABILITY, DURATION OF
                                        UNAVAILABILITY &amp; WHAT HAPPENED WHEN THE COMMODITY WAS NOT AVAILABLE</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" style="vertical-align:middle">
                                                <b>Commodities</b>
                                            </th>
                                            <th colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability
                                                        <br>(One Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th colspan="3" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Main Reason for Unavailability</b>
                                                </div>
                                            </th>
                                            <th colspan="4" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Duration of Unavailability</b>
                                                </div>
                                            </th>
                                            <th colspan="5" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>When the commodity was not available what
                                                        <br>happened? (Multiple Selections Allowed)</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th width="6.25%">
                                                <font size="0.9">Name</font>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Unit</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Available</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Not Available</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Not Ordered</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Ordered but not yet received</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Expired</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">1 Week</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">2 Weeks</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">1 Month</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">More than 1 month</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Patient purchase of the commodity privately</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Facility purchase of the commodity privately</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">Facility received the commodity from another facility</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">The
                                                        <br>procedure
                                                        <br>was not
                                                        <br>conducted
                                                        <br>(case refered)</font>
                                                </b>
                                            </th>
                                            <th width="6.25%">
                                                <b>
                                                    <font size="0.9">The procedure was conducted without the commodity</font>
                                                </b>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="vertical-align:middle">Benzyl Penicillin</td>
                                            <td style="vertical-align:middle">5mu</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="1optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Benzyl Penicillin</td>
                                            <td style="vertical-align:middle">1mu</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="2optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Calcium Gluconate Injection</td>
                                            <td style="vertical-align:middle">100mg/ml (10%)in 10ml amp</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="3optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Ceftriaxone</td>
                                            <td style="vertical-align:middle">Injection 1g</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="4optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Chlorhexidine</td>
                                            <td style="vertical-align:middle">4% (7.1% Chlorhexidine digluconate)</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="5optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Chlorhexidine</td>
                                            <td style="vertical-align:middle">5%</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="6optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Dexamethasone Injection</td>
                                            <td style="vertical-align:middle">4mg/ml in 1ml</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="7optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Efavirenz (EFV)</td>
                                            <td style="vertical-align:middle">600MG Tab</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="8optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Emergency Oral Contraceptive</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="9optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Ergometrine</td>
                                            <td style="vertical-align:middle">Injection</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="10optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Female condoms</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="11optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Gentamicin</td>
                                            <td style="vertical-align:middle">2ml Vial 80mg/2ml</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="12optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Hydralazine IV</td>
                                            <td style="vertical-align:middle">20mg/ml</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="13optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">lmplanon</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="14optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Injectable Hormonal Contraceptives</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="15optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Insecticide Treated Nets</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="16optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">IUCD (Copper T)</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="17optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Jadelle</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="18optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Lamivudine/Zidovudine</td>
                                            <td style="vertical-align:middle">(3TC/AZT) 150MG/300MG</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="19optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Lignocaine 1% Injection</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="20optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Lopinavir+Ritonavir (LPV/r)</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="21optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Magnesium Sulphate IV</td>
                                            <td style="vertical-align:middle">500mg/ml</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="22optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Hydralazine IV</td>
                                            <td style="vertical-align:middle">20mg/ml</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="23optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Metronidazole IV</td>
                                            <td style="vertical-align:middle">500mg/100ml in 10ml amp</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="24optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Misoprostol</td>
                                            <td style="vertical-align:middle">200mcg</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="25optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Misoprostol</td>
                                            <td style="vertical-align:middle">25mcg</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="26optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Nevirapine (NVP)</td>
                                            <td style="vertical-align:middle">10mg/ 5ml 5yr</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="27optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Nevirapine (SD NVP)</td>
                                            <td style="vertical-align:middle">200MG Tab</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="28optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Oral Hormonal Contraceptives</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="29optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Oxygen</td>
                                            <td style="vertical-align:middle"></td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="30optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Oxytocin</td>
                                            <td style="vertical-align:middle">10 IU</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="31optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Oxytocin</td>
                                            <td style="vertical-align:middle">5 IU</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="32optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Sulphadoxine + Pyrimethamine</td>
                                            <td style="vertical-align:middle">500MG + 25MG Tab</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="33optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Vitamin K</td>
                                            <td style="vertical-align:middle">2mg</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="34optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Water for Injection</td>
                                            <td style="vertical-align:middle">10ml amp</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="35optionsRadios9" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle">Zidovudine (AZT)</td>
                                            <td style="vertical-align:middle">300MG Tab</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios4" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios5" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios6" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios7" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios8" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <input type="radio" name="36optionsRadios9" id="optionsRadios1" value="option1">
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
                     
                        <center><h2><b>SECTION 6 of 8: EQUIPMENT AVAILABILITY AND FUNCTIONALITY</b></h2></center>
                        <br>
                        </div>
                        </div>



                        <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="2" style="vertical-align:middle">
                                                <b>Equipment Name</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability (One Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability Quantities (In Numbers)</b>
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
                                                    <b>Functional</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Non Functional</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Manual/ Electrical Suction machine</td>
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
                                            <td width="25%" style="vertical-align:middle">Ambu bag-Adult size</td>
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
                                            <td width="25%" style="vertical-align:middle">Ambu bag-Paediatric size</td>
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
                                            <td width="25%" style="vertical-align:middle">MVA (Manual Vacuum Aspiration) kit</td>
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
                                            <td width="25%" style="vertical-align:middle">Airways (different sizes)</td>
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
                                            <td width="25%" style="vertical-align:middle">Patella hammer</td>
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
                                            <td width="25%" style="vertical-align:middle">Large size Speculum</td>
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
                                            <td width="25%" style="vertical-align:middle">Graves Vaginal Speculums</td>
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
                                            <td width="25%" style="vertical-align:middle">Stethoscope</td>
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
                                            <td width="25%" style="vertical-align:middle">BP Machine</td>
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
                                            <td width="25%" style="vertical-align:middle">Vacuum Pump/Extractor</td>
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
                                            <td width="25%" style="vertical-align:middle">Infant Weighing Scale</td>
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
                                            <td width="25%" style="vertical-align:middle">Color-coded Bins (Black, Red, Yellow)</td>
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
                                            <td width="25%" style="vertical-align:middle">Adult Weighing Scale</td>
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
                                            <td width="25%" style="vertical-align:middle">Fetoscope</td>
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
                                            <td width="25%" style="vertical-align:middle">Resuscitaire</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1p" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1p" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Heater</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1q" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1q" id="optionsRadios1" value="option1">
                                                </div>
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
                            <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="2" style="vertical-align:middle">
                                                <b>Testing Supplies</b>
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
                                            <td width="25%" style="vertical-align:middle">Uristicks</td>
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
                                            <td width="25%" style="vertical-align:middle">DNA PCR Testing Kit</td>
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
                                            <td width="25%" style="vertical-align:middle">Rapid Testing Kits for HIV</td>
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
                                            <td width="25%" style="vertical-align:middle">RDT strips and reagent for malaria</td>
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
                                            <td width="25%" style="vertical-align:middle">Microscope for malaria test</td>
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
                                            <td width="25%" style="vertical-align:middle">Instrument Tray</td>
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
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box-body -->
                            <div class="box box-primary">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" rowspan="2" style="vertical-align:middle">
                                                <b>Delivery Kit Components</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability (One Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability Quantities (In Numbers)</b>
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
                                                    <b>Functional</b>
                                                </div>
                                            </th>
                                            <th width="12%" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Non Functional</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Bowls 8"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Kidney Dish 10"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3b" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Toothed Dissecting Forceps 6"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3c" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Mayo Scissors curved 7"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3d" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Cord Scissors 10cm(4")</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3e" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Needle Holder 7"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3f" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Artery Forceps Straight 8"</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3g" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Episiotomy Scissors (Braun stadler12.5cm/Barnes 14.Scm)</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3h" id="optionsRadios1" value="option1">
                                                </div>
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
                                            <td width="25%" style="vertical-align:middle">Gallipots</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3i" id="optionsRadios1" value="option1">
                                                </div>
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
                                    <h3 class="box-title" contenteditable="true">INDICATE THE AVAILABILITY AND MAIN REASON FOR UNAVAILABILITY FOR THE FOLLOWING KITS/SETS</h3>
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
                                            <td width="25%" style="vertical-align:middle">Delivery kit</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">IV starter kit</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2b" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Adult resuscitation kit</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Neonate resuscitation kit</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2d" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Vaginal examination pack</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2e" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Suction tube</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2f" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Cut down tray set</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2g" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Caesarian Section set</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2h" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Cord Clamps</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2i" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Baby Wrappers I Linen (At least 3)</td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1j" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios1j" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2j" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2j" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="loptionsRadios2j" id="optionsRadios1" value="option1">
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
                     
                        <center><h2><b>SECTION 7 of 8: RESOURCE AVAILABILITY </b></h2></center>
                        <br>
                        </div>
                        </div>
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">INDICATE THE AVAILABILITY AND LOCATION OF THE FOLLOWING RESOURCES</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="5%" style="vertical-align:middle">
                                                <b>Resource Name</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability (One Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th width="37.5%" colspan="5" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Location of Availability (Multiple Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th width="37.5%" colspan="5" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Main Source</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2" width="5%" style="vertical-align:middle">Running Water</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Available</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Not Available</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>OPD</b>
                                                </div>
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
                                                    <b>Maternity</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Other</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>River/Stream</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Bore-hole</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Piped</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Water Truck</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Other</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
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
                                                    <input type="radio" name="optionsRadios32a" id="optionsRadios1" value="option1">
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
                                                    <input type="radio" name="optionsRadios7a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios8a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">INDICATE THE STORAGE AND ACCESS TO WATER</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="20%" style="vertical-align:middle" rowspan="2">
                                                <b>ASPECT</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Response</b>
                                                </div>
                                            </th>
                                            <th width="40%" colspan="5" layout="text-align:center" rowspan="2" style="vertical-align:middle">
                                                <div class="text-center">
                                                    <b>Specify Water Storage Point</b>
                                                </div>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Yes</b>
                                                </div>
                                            </th>
                                            <th layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>No</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">Do you have storage of water? (if yes, Please specify)</td>
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
                                            <td width="25%" style="vertical-align:middle" rowspan="2">Does the community have access to Water? (if yes, Please specify main
                                                source from the selection)</td>
                                            <td></td>
                                            <td></td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>River/Stream</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Bore-hole</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Piped</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Water Truck</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Other</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios1c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%">
                                                    <input type="radio" name="optionsRadios5c" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">INDICATE THE AVAILABILITY AND STORAGE, SUPPLIER AND SOURCE OF THE FOLLOWING</h3>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th width="5%" style="vertical-align:middle">
                                                <b>Resource Name</b>
                                            </th>
                                            <th width="20%" colspan="2" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Availability (One Selection Allowed)</b>
                                                </div>
                                            </th>
                                            <th width="37.5%" colspan="5" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Main Supplier</b>
                                                </div>
                                            </th>
                                            <th width="37.5%" colspan="5" layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Main Source</b>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="5%" style="vertical-align:middle" rowspan="2" contenteditable="true">Electricity</td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Available</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Not Available</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center">
                                                    <b>Central Government/County Government</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Privately Supplied</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Own Initiative</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Partner</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Not Applicable</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>National Grid</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Generator</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Solar</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Bio-Gas</b>
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="10%">
                                                    <b>Others</b>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios1qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios3a" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" width="25%" style="width:100%">
                                                    <input type="radio" name="optionsRadios6qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                            <td layout="text-align:center">
                                                <div class="text-center" style="width:100%" width="25%">
                                                    <input type="radio" name="optionsRadios6qa" id="optionsRadios1" value="option1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- /.box-body -->
                            </div>
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title" contenteditable="true">PROVISION &nbsp;FOR WASTE DISPOSAL</h3>
                                </div>
                                <table class="table">
                                    <thead></thead>
                                    <tbody>
                                        <tr>
                                            <td width="25%" style="vertical-align:middle">
                                                <b>{1). How Does this facility dispose of Waste?</b>
                                            </td>
                                            <td>
                                                <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Waste pit</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Placenta pit</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Incinerator</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Burning</label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="radio" style="width:100%;vertical-align:middle" width="25%">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">Others</label>
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
                     
                        <center><h2><b>SECTION 8 of 8: COMMUNITY STRATEGY </b></h2></center>
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
                                                    <b>(1) Total number of Community Units attached to a facility</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(2) Total number of Community Units regularly supervised and provided feedback</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(3) Total number of Community Units trained on Community MNH</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(4) Total number of Community Units supported with incentives for CHVs</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(5) Total Number of Pregnant Cases referred by CHVs to a health facility for Skilled Birth Attendant (SBA) for the past 3 months</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(6) Total Number of Infants born at home referred to the facility by CHVs</b>
                                                </td>
                                                <td>
                                                    <input style="width:100%;" type="text" class="" id="exampleInputEmail1"
                                                    placeholder="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <b>(7) Total Number of HIV Exposed Infants referred to the facility by CHVs</b>
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
                            </div>
                            <!-- /.box -->
                            <!-- /.box-body </div><!-- /.box -->
                            <!-- Input addon -->
                            <!--/.col (left) -->
                        </div>




                   




                    </section>
 

                    @endsection

