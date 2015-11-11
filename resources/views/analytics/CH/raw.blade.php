@extends('app')
@section('header')
  <h1  align="middle">
             Child Health Survey
              <small>( CSV Downloads for Raw Data)</small>
            </h1>
            <hr style="width: 100%; color: #3C8DBC; height: 1px; background-color:#3C8DBC;" />
@endsection

<div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 1 </h3>
                 
                </div>
                <div class="box-body">
                	>>	<a href="">Facility Summary</a> 
             		>>	<a href="">Staff Training</a> 

                </div><!-- /.box-body -->
                  <div id ="anT" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div>
            <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">SECTION 2 </h3>
                 
                </div>
                <div class="box-body">
                	>>	<a href="">Guidelines & Job Aids Availability</a> 
             		

                </div><!-- /.box-body -->
                  <div id ="anT" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div>
