

@extends('template')


@section('pageinfo')

 <h1>

             My Dashboard

            <small> survey start page</small>
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
    <div class="row">  
<div class="col-lg-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h4 class="text-center" >Welcome, {{ Auth::user()->name }}</h4>
                  
                </div><!-- /.box-header -->
                </div>
                </div>
                </div>
                
 <div class="row">
 <div class ="col-lg-12">
<div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p>To start a new assessment , please click <u> 'Start' </u>below </p> 
                 <p>To view a previous assessment, please click <u> 'View' </u>below </p> 
                </div><!-- /.box-body -->
              </div>
</div>
      </div>        

      <br>
 
              <div class="col-lg-6 col-xs-6">
 <div class="small-box bg-aqua">
                <div class="inner">
                  <h2>Start Assessment</h2>
                  <p>IMCI | CH | MNH<br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="start_assessment" class="small-box-footer">Start<i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div>
              <div class="col-lg-6 col-xs-6">
 <div class="small-box bg-yellow">
                <div class="inner">
                  <h2>View Assessments</h2>
                  <p>IMCI | CH | MNH<br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="assessments/show" class="small-box-footer">View<i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
              </div>


@endsection
