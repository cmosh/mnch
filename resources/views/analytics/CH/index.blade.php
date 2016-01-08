@extends('app')
@section('header')

  <h1  align="middle">
             Child Health Survey
              <small>(Analysis Results)</small>
            </h1>
            <hr style="width: 100%; color: #3C8DBC; height: 1px; background-color:#3C8DBC;" />
@endsection
@section('content')



          
           
        
  <div class="row">
 
             
              {!! Form::open() !!}
       



                         {!! Form::close() !!}


   </div>
   @include('analytics/county')

 
 <div class="col-md-9">

  <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3> <p id="X">Data from {{$SubmittedCount->X}} facilities in {{count($SubmittedCounties)}} counties</p><sup style="font-size: 20px"></sup></h3>
                 
                </div>
               {{--  <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div> --}}
              
              </div>
                       
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

  <div class="col-md-12">
         

 @include('analytics/CH/html/staff_training')
       

           @include('analytics/CH/html/health_services')         

 </div>
  
<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>GUIDELINES, JOB AIDS AND TOOLS AVAILABILITY</b></h2></center>
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
 @include('analytics/CH/html/locationortcorner')

<div class="col-md-4">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>SUPPLIES AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>

 @include('analytics/CH/html/supplies_availability')
</div>


<div class="col-md-4">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>RESOURCE AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>

 @include('analytics/CH/html/resource_availability')
</div>
<div class="col-md-4">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b title = "cccc" class="g">COMMUNITY STRATEGY</b></h2></center>
                        <br>
                        </div>
                        </div>

 @include('analytics/CH/html/community_strategy')

           
</div>


            

@endsection


@section('js')


  

 
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
 <script type="text/javascript">


window.inside = $('#thesvg').contents();



 

      $(function () {
        getmapdata();

       window.inside = $('#thesvg').contents();
        $(".select2").select2();

          @foreach($SubmittedCounties as $SubmittedCounty)
        window.inside.find("#{{str_replace('\'','',str_replace(' ','-',strtolower($SubmittedCounty->County)))}}").css('fill','#E5E5FF');   
        @endforeach
         
      });

     

google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);
  

  $('#County').change(drawChart);
  $('#Term').change(drawChart);

	
function mapRequest (county) {
   document.getElementById("countyname").innerHTML = '<strong>'+county+'</strong>';
     x = window.mapdata;

  @include('analytics/mapdata')

   document.getElementById("svFa").innerHTML = '<b>'+TotalSubmitt+'</b>/'+TotalTotal;
   x2 = 100*(TotalSubmitt/TotalTotal);
  $('#svFaBar').attr('style','width: '+x2+'%');
  
}
function getmapdata() {



 
    var data = {
         
         '_token': $('input[name=_token]').val(),
          'survey': 'ch'
    };
 
   $.ajax({
      url: '/analytics/maprequest',
      type: "post",
       data: data,
           success: function(data){
     mapdata = JSON.parse(data);
   
     var x = window.mapdata;
   var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
  
    @include('analytics/mapdata')
  
      

      }
 
   });   





}
function drawChart() {

	  $( ".wait" ).children().addClass("fa fa-refresh fa-spin");
      $( ".wait" ).addClass("overlay");
	  var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val(),
         'Year1': $('#Year1').val(),
         'Year2': $('#Year2').val(),
         'Year3': $('#Year3').val(),
         'Year4': $('#Year4').val(),
         'Term':$('#Term').val()

    };
 
   $.ajax({
      url: '/analytics/chajax',
      type: "post",
       data: data,
           success: function(data){
    
		var jsonData = JSON.parse(data);
    
    var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
   x = window.mapdata;

  @include('analytics/mapdata')
    // var jsonData = jsonData1['analytics'];
    // alert(jsonData['Guidelines']);


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
	     @include('analytics/CH/js/annualTrends')
       @include('analytics/CH/js/nondiarrhoea')
       @include('analytics/CH/js/orttrends')
       @include('analytics/CH/js/ownership')
       @include('analytics/CH/js/types')
       @include('analytics/CH/js/staff_training')
       @include('analytics/CH/js/community_strategy')
       @include('analytics/CH/js/locationortcorner')
       @include('analytics/CH/js/health_services') 

        $('#X').html('Data from '+TotalSubmitt+ ' facilities in '+$('#County').val());
        if (allcheck==1) $('#X').html('Data from {{$SubmittedCount->X}} facilities in {{count($SubmittedCounties)}} counties');


      $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
      $( ".wait" ).removeClass("overlay");

      }
 
   });   


       

}


$('#Year1').change(year1);

  @include('analytics/CH/js/year1change')
$('#Year2').change(year2);

  @include('analytics/CH/js/year2change')
$('#Year3').change(year3);

  @include('analytics/CH/js/year3change')
$('#Year4').change(year4);

  @include('analytics/CH/js/year4change')




window.inside.find('.county').click(function() {
  var cts = this.getAttribute("title");
   $(document).ready(function() {

$('#County').val(cts);
 document.getElementById("select2-County-container").innerHTML = cts;
$('#X').html('Data from '+TotalSubmitt+ 'facilities in '+$('#County').val());
});



drawChart();

var x = 'Selected ' + cts + ' county';

});



  $(function() {
  var moveLeft = 20;
  var moveDown = 20;

  window.inside.find('.county').hover(function(e) {
      var cts = this.getAttribute("title");
      mapRequest(cts);

    $('div#pop-up').show();

      
  }, function() {
    $('div#pop-up').hide();
  });

  window.inside.find('.county').mousemove(function(e) {
    $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});




    </script>
  
    
   
@endsection