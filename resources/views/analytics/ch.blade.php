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


  
 @include('analytics/CH/js/gjavailability')
 


       

}
    </script>
   <script type="text/javascript">

     $('#County').change(function(){ 
     	// alert($('#County').val());
    var data = {

       
       
         'county':$('#County').val(),
        
         '_token': $('input[name=_token]').val()

    };
 
       

    $.ajax({
      url: '/analytics/ajax',
      type: "post",
       data: data,
      success: function(data){
         alert(data);
     
	var jsonData = JSON.parse(data);

	alert(jsonData[0][0]);

	var gjavailabilitydata = google.visualization.arrayToDataTable([



        ['Guidelines Availability', 'Yes', 'No', { role: 'annotation' }],
        [jsonData[0][0],jsonData[0][1],jsonData[0][2],''],
        [jsonData[1][0],jsonData[1][1],jsonData[1][2],''],
         [jsonData[2][0],jsonData[2][1],jsonData[2][2],''],
          [jsonData[3][0],jsonData[3][1],jsonData[3][2],''],
        [jsonData[4][0],jsonData[4][1],jsonData[4][2],''],
         [jsonData[5][0],jsonData[5][1],jsonData[5][2],''],
          [jsonData[6][0],jsonData[6][1],jsonData[6][2],''],
           [jsonData[7][0],jsonData[7][1],jsonData[7][2],''],
      ]);

       var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var gjavailability = new google.visualization.BarChart(document.getElementById('gjavailability'));
      gjavailability.draw(gjavailabilitydata, options);
  
  
 


       





      }
    });      
  
             
});
         
</script>
    
   
@endsection