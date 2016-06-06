@extends('app')
@section('header')
  
  <h1 align="middle" style="top:-10px;margin: 0;">
             Child Health Survey Raw Data
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
                	>>	<a href="{{config('app.prefix')}}/rawdata/facility-summary">Facility Summary</a> 
                  <br>
             		>>	<a href="{{config('app.prefix')}}/rawdata/staff-training">Staff Training</a>
                 <br>
                >>  <a href="{{config('app.prefix')}}/rawdata/health-services">Health Services</a> 


                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
            

            <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 2 </h3>
                 
                </div>
                <div class="box-body">
                	>>	<a href="{{config('app.prefix')}}/rawdata/guidelines">Guidelines & Job Aids Availability</a> 
                  <br>
             		   >> <a href="{{config('app.prefix')}}/rawdata/tools">Tools Availability</a> 

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
                  >> <a href="{{config('app.prefix')}}/rawdata/">Treatment Data in U5 Register</a>
                 <br> 
                 >> <a href="{{config('app.prefix')}}/rawdata/">Annual Treatment Trends</a> 
                 <br>
                 >> <a href="{{config('app.prefix')}}/rawdata/">Non-Diarrhoea Cases Treated with Zinc & ORS</a> 
                 <br>
                 >> <a href="{{config('app.prefix')}}/rawdata/">Annual ORT Corner Management Trends</a> 
                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->



               <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 4 </h3>
                 
                </div>
                <div class="box-body">
                 >> <a href="{{config('app.prefix')}}/rawdata/diarrhoea">Diarrhoea Treatment Commodities</a> 
                  <br>
                  >> <a href="{{config('app.prefix')}}/rawdata/antibiotics">Antibiotics</a> 
                  <br>
                  >> <a href="{{config('app.prefix')}}/rawdata/malaria">Malaria Treatment Commodities</a> 
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
                 
                                      >> <a href="{{config('app.prefix')}}/rawdata/ort-functionality">Ort Corner Functionality</a>
<br>
                    >> <a href="{{config('app.prefix')}}/rawdata/ort-location">Location of ORT</a>

                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
           <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 6 </h3>
                 
                </div>
                <div class="box-body">
                  >> <a href="{{config('app.prefix')}}/rawdata/supplies-availability">Supplies Availability</a>
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
                   >> <a href="{{config('app.prefix')}}/rawdata/resource-availability">Resource Availability</a>
                </div><!-- /.box-body -->
                 
                </div>
              </div><!-- /.box -->
                      <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 8 </h3>
                 
                </div>
                <div class="box-body">
                                                  >> <a href="{{config('app.prefix')}}/rawdata/community-strategy">Community Strategy</a> 

                  <br>
                </div><!-- /.box-body -->

                </div>
              </div><!-- /.box -->
              </div>
           
            @endsection

