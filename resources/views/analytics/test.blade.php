@extends('app')

@section('content')

 


 

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