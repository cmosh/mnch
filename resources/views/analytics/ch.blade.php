@extends('app')

@section('content')

  <div class="row">
 
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Child Health Survey<sup style="font-size: 20px"></sup></h3>
                  <p>Data from {{$SubmittedCHCount->X}} facilities in the counties of:<br> @foreach($SubmittedCHCounties as $SubmittedCHCountie)
                  - {{$SubmittedCHCountie->County}} <br>
                      @endforeach
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              
              </div>
       


   </div>

 <div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>FACILITY INFORMATION</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
         @include('analytics/CH/html/ownership')


         @include('analytics/CH/html/types')
           


         @include('analytics/CH/html/staff_training')
       
         @include('analytics/CH/html/health_services')


<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>GUIDELINES, JOB AIDS AND TOOLS </b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

          @include('analytics/CH/html/gjavailability')


           @include('analytics/CH/html/tavailability')


<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>COMMODITY AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

           @include('analytics/CH/html/chsec4diarhoea')
            @include('analytics/CH/html/chsec4antibiotics')
              @include('analytics/CH/html/chsec4malaria')


<!-- <div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>ORAL REHYDRATION THERAPY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>



            -->



            

@endsection


@section('js')


  <!-- ChartJS 1.0.1 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);

function drawChart() {


  

  // @include('analytics/CH/js/ownership')
       
  //  @include('analytics/CH/js/gjavailability')

  //     @include('analytics/CH/js/staff_training')

  //            @include('analytics/CH/js/health_services')

         


  //           @include('analytics/CH/js/types')
  // @include('analytics/CH/js/tavailability')
  // @include('analytics/CH/js/chsec4diarhoea')
  //  @include('analytics/CH/js/chsec4antibiotics')
  //  @include('analytics/CH/js/chsec4malaria')
  //   @include('analytics/CH/js/ort_func')


       

}
    </script>

    
   
@endsection