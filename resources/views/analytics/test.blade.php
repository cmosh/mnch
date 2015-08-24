@extends('app')

@section('content')


 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>61<sup style="font-size: 20px"></sup></h3>
                  <p>FACILITIES</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

 <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>2<sup style="font-size: 20px"></sup></h3>
                  <p>COUNTIES</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
 

         @include('analytics/CH/html/ownership')


         @include('analytics/CH/html/types')
           


         @include('analytics/CH/html/staff_training')
       
         @include('analytics/CH/html/health_services')




          @include('analytics/CH/html/gjavailability')


           @include('analytics/CH/html/tavailability')
           @include('analytics/CH/html/chsec4diarhoea')
            @include('analytics/CH/html/chsec4antibiotics')
              @include('analytics/CH/html/chsec4malaria')
              @include('analytics/CH/html/ort_func')



            

@endsection


@section('js')


  <!-- ChartJS 1.0.1 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);

function drawChart() {


  

  @include('analytics/CH/js/ownership')
       
   @include('analytics/CH/js/gjavailability')

      @include('analytics/CH/js/staff_training')

             @include('analytics/CH/js/health_services')

         


            @include('analytics/CH/js/types')
  @include('analytics/CH/js/tavailability')
  @include('analytics/CH/js/chsec4diarhoea')
   @include('analytics/CH/js/chsec4antibiotics')
   @include('analytics/CH/js/chsec4malaria')
    @include('analytics/CH/js/ort_func')


       

}
    </script>

    
   
@endsection