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
              {!! Form::open() !!}
       <div> <select class="form-control select2 " style="width: 100%;" name="County" id="County"> 
        <option value="All" selected>All Counties</option>
                      @foreach($SubmittedCHCounties as $SubmittedCHCountie)

                       <option value ="{{$SubmittedCHCountie->County}}" id ="{{$SubmittedCHCountie->County}}" >{{$SubmittedCHCountie->County}}</option>
                        @endforeach
                       </select></div>
                         {!! Form::close() !!}


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
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>DOCUMENTED FACILITY LEVEL DATA</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
         @include('analytics/CH/html/u5reg')


         @include('analytics/CH/html/annualTrends')
           


         @include('analytics/CH/html/nondiarrhoea')
       
         @include('analytics/CH/html/orttrends')

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


<div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>ORAL REHYDRATION THERAPY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
 @include('analytics/CH/html/ort_func')

<div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>SUPPLIES AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
 @include('analytics/CH/html/supplies_availability')

<div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>RESOURCE AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
 @include('analytics/CH/html/resource_availability')

           



            

@endsection


@section('js')


  <!-- ChartJS 1.0.1 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js" type="text/javascript"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);

  $('#County').change(drawChart);

	
function drawChart() {

	  $( ".wait" ).children().addClass("fa fa-refresh fa-spin");
      $( ".wait" ).addClass("overlay");
	  var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val()

    };
 
   $.ajax({
      url: '/analytics/ajax',
      type: "post",
       data: data,
           success: function(data){
        // alert(data);
     
		var jsonData = JSON.parse(data);

	//include js
	     @include('analytics/CH/js/gjavailability')
       @include('analytics/CH/js/tavailability')
       @include('analytics/CH/js/chsec4diarhoea')
       @include('analytics/CH/js/chsec4antibiotics')
       @include('analytics/CH/js/chsec4malaria')
       @include('analytics/CH/js/ort_func')
       @include('analytics/CH/js/supplies_availability')
       @include('analytics/CH/js/resource_availability')
       @include('analytics/CH/js/u5reg')
	    




      $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
      $( ".wait" ).removeClass("overlay");

      }
 
   });   


       

}
    </script>
  
    
   
@endsection