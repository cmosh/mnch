

@extends('template')


@section('pageinfo')

 
         
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
               
                
     <div>

     
 
              <div class="col-md-12">
 <div class="small-box bg-aqua">
                <div class="inner">
                  <h2>Child Health</h2>
                  <p>(CH Surveys)<br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="assessment/CH" class="small-box-footer" style="font-size:18pt">Choose <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div>

              <div class="col-md-12">
 <div class="small-box bg-yellow">
                <div class="inner">
                  <h2>Maternal and Neonatal Healthcare</h2>
                  <p>(MNH Surveys)<br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="assessment/MNH" class="small-box-footer" style="font-size:18pt">Choose <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>

             
                <div class="col-md-12">
  <div class="small-box bg-red">
                <div class="inner">
                  <h2>Integrated Management of Childhood Illness</h2>
                  <p>(IMCI Surveys)<br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="assessment/IMCI" class="small-box-footer" style="font-size:18pt">Choose <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>

    <div class="col-md-12">
  <div class="small-box bg-green">
                <div class="inner">
                  <h2>Autosaved Incomplete Assessments</h2>
                  <p><br></p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="Autosaved/{{Auth::user()->id}}" class="small-box-footer" style="font-size:18pt">Choose <i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
                       

</div>
</div>

@endsection
