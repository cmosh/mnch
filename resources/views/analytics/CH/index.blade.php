@extends('app')
@section('header')

 <!--<h1  align="middle">-->
             Child Health Survey
              <small>(Analysis Results)</small>
            <!--</h1>-->
            
@endsection
@section('content')



          
           
        
  <div class="row">
 
             
              {!! Form::open() !!}
       



                         {!! Form::close() !!}

<!-- -->
   </div>
   <div class="row">
   @include('analytics/county')

 
 
 <div class="col-md-9"  >

  <!-- small box -->
              <div id="facilitiesBox" class="small-box bg-blue">
                <div class="inner">
                  <h3> <p id="X">Data from {{$SubmittedCount}} facilities in {{count($SubmittedCounties)}} counties</p><sup style="font-size: 20px"></sup></h3>
                
              <span><button id="fcbtn" class="btn btn-block btn-warning btn-xs">View</button></span>  
         
                </div>
               {{--  <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div> --}}
              
              </div>

              <div id="dialog" title="Dialog Title">x</div>


                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>FACILITY INFORMATION</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>


         @include('analytics/CH/html/ownership')


         @include('analytics/CH/html/types')
<div class="col-md-3">

</div>
</div>
  <div class="row">
         

 @include('analytics/CH/html/staff_training')
       

           @include('analytics/CH/html/health_services')         

 </div>
  
<div class="row">
                        
                        <div class="box-info" >                     
                     <div class=" ">
                         <br>                     
                        <center><h2><b>GUIDELINES, JOB AIDS AND TOOLS AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
<div class="row">
          @include('analytics/CH/html/gjavailability')


           @include('analytics/CH/html/tavailability')
</div>

 <div class="row">
                        
                        <div class="box-info">                     
                     <div class="">
                         <br>                     
                        <center><h2><b>DOCUMENTED FACILITY LEVEL DATA</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
        <div class="row">
         @include('analytics/CH/html/u5reg')


         @include('analytics/CH/html/annualTrends')
           </div>

        <div class="row">
         @include('analytics/CH/html/nondiarrhoea')
       
         @include('analytics/CH/html/orttrends')
         </div>

<div class="row">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>COMMODITY AVAILABILITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
          <div class="row">
           @include('analytics/CH/html/chsec4diarhoea')
            @include('analytics/CH/html/chsec4antibiotics')
              @include('analytics/CH/html/chsec4malaria')
          </div>


<div class="row">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>ORAL REHYDRATION THERAPY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
 <div class="row ">
       @include('analytics/CH/html/ort_func')
       @include('analytics/CH/html/locationortcorner')
 </div>
<div class="row">
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
        window.inside.find("#{{str_replace('\'','',str_replace(' ','-',strtolower($SubmittedCounty)))}}").css('fill','#E5E5FF');   
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

   document.getElementById("svFa").innerHTML = '<b>'+TotalSubmitt+'</b>'; 
  
}
function getmapdata() {



 
    var data = {
         
         '_token': $('input[name=_token]').val(),
          'survey': 'ch'
    };
 
   $.ajax({
      url: '{{config("app.prefix")}}/analytics/maprequest',
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
      url: '{{config("app.prefix")}}/analytics/chajax',
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
    
	     @include('analytics/CH/js/ownership')
       @include('analytics/CH/js/types')
       @include('analytics/CH/js/staff_training')
       @include('analytics/CH/js/health_services') 
       @include('analytics/CH/js/gjavailability')
       @include('analytics/CH/js/tavailability')
       @include('analytics/CH/js/chsec4diarhoea')
       @include('analytics/CH/js/chsec4antibiotics')
       @include('analytics/CH/js/chsec4malaria')
       @include('analytics/CH/js/supplies_availability')
       @include('analytics/CH/js/resource_availability')
       @include('analytics/CH/js/community_strategy')
       @include('analytics/CH/js/ort_func')
       @include('analytics/CH/js/locationortcorner')
       @include('analytics/CH/js/u5reg')
       @include('analytics/CH/js/annualTrends')
       @include('analytics/CH/js/nondiarrhoea')
       @include('analytics/CH/js/orttrends') 

        $('#X').html('Data from '+TotalSubmitt+ ' facilities in '+$('#County').val());
        if (allcheck==1) $('#X').html('Data from {{$SubmittedCount}} facilities in {{count($SubmittedCounties)}} counties');


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
  
  <script type="text/javascript" charset="utf-8">


$(function(){
  $("select#County").change(function(){


    $.getJSON("{{config('app.prefix')}}/analytics/terms",{county: $(this).val(), ajax: 'true'}, function(j){
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i]+ '">' + j[i]+ '</option>';
      }
      $("select#Term").html(options);
      $("#Term").select2("val", j[0]);
      // $("select#Term").val(j[0]);
    })
  })
});


$('#fcbtn').click(function () {
     var county = $('#County').val();
     var survey = 'CH';
        var data = {
            'county':county,  
            'survey':survey,
            '_token': $('input[name=_token]').val()
          };
 
        


    $.ajax({
      url: '{{config("app.prefix")}}/analytics/facilitylist',
      type: "post",
       data: data,
      success: function(data){
        data2 = JSON.parse(data)
        var text= "Facility Code\t\tFacility Name";
         $.each(data2, function(key, value) {
                 text = text + value.FacilityCode + "\t\t\t" + value.FacilityName + "\n";
            });
         



$("#dialog").dialog({

  title: "Facilities",
  text: text
});







      }
    }); 
        
    });






</script>
    
   
@endsection