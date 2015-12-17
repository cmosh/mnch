@extends('app')
@section('header')
  <h1  align="middle">
             Child Health Survey
              <small>( CSV Downloads for Raw Data)</small>
            </h1>
            <hr style="width: 100%; color: #3C8DBC; height: 1px; background-color:#3C8DBC;" />
@endsection
@section('content')
<div  class="col-md-12">
<div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 1 </h3>
                 
                </div>
                <div class="box-body">
                	>>	<a href="/rawdata/facility-summary">Facility Summary</a> 
                  <br>
             		>>	<a href="/rawdata/staff-training">Staff Training</a>
                 <br>
                >>  <a href="/rawdata/health-services">Health Services</a> 


                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
            

            <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 2 </h3>
                 
                </div>
                <div class="box-body">
                	>>	<a href="/rawdata/guidelines">Guidelines & Job Aids Availability</a> 
                  <br>
             		   >> <a href="/rawdata/tools">Tools Availability</a> 

                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->

</div>
<div  class="col-md-12">
               <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 3 </h3>
                 
                

                </div>
                <div class="box-body">
                  >> <a href="/rawdata/">Treatment Data in U5 Register</a>
                 <br> 
                 >> <a href="/rawdata/">Annual Treatment Trends</a> 
                 <br>
                 >> <a href="/rawdata/">Non-Diarrhoea Cases Treated with Zinc & ORS</a> 
                 <br>
                 >> <a href="/rawdata/">Annual ORT Corner Management Trends</a> 
                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->



               <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 4 </h3>
                 
                </div>
                <div class="box-body">
                 >> <a href="/rawdata/diarrhoea">Diarrhoea Treatment Commodities</a> 
                  <br>
                  >> <a href="/rawdata/antibiotics">Antibiotics</a> 
                  <br>
                  >> <a href="/rawdata/malaria">Malaria Treatment Commodities</a> 
               </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
              </div>
              <div  class="col-md-12">
               <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 5 </h3>
                </div>
                <div class="box-body">
                 
                                      >> <a href="/rawdata/ort-functionality">Ort Corner Functionality</a>
<br>
                    >> <a href="/rawdata/ort-location">Location of ORT</a>

                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
           <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 6 </h3>
                 
                </div>
                <div class="box-body">
                  >> <a href="/rawdata/supplies-availability">Supplies Availability</a>
                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
              </div>
              <div  class="col-md-12">
                      <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 7 </h3>
                 
                </div>
                <div class="box-body">
                   >> <a href="/rawdata/resource-availability">Resource Availability</a>
                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
                      <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 8 </h3>
                 
                </div>
                <div class="box-body">
                                                  >> <a href="/rawdata/community-strategy">Community Strategy</a> 

                  <br>
                </div><!-- /.box-body -->

                </div>
              </div><!-- /.box -->
              </div>
           
            @endsection

