@extends('app')
@section('header')

 <!--<h1  align="middle">-->
         
              {{$surveyname}} Survey
              <small>(Analysis Results - Data from {{$SubmittedCount}} Healthworkers)</small>
   
           
            <!--</h1>-->
            
@endsection
@section('content')


<style type="text/css">

.graph {
   display: none;
}


</style>
          
           
        
  <div class="row">
  {!! Form::open() !!}
  {!! Form::close() !!}
   </div>
   <div class="row">
   
   @include('analytics/IMCIcounty') 


           
  @include('analytics/'.$survey.'/graphs')           

            

@endsection


@section('js')


  

 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>  
 <script type="text/javascript">

$(document).ready(function(){
  $('.graphobs').fadeOut();
     switchg();
   $("#Data1").jqxListBox({width: '100%', height: '370' });
       $("#Data1").jqxListBox('loadFromSelect', 'Data');

       $("#Data1").bind('select', function (event) {
        if (event.args) {
             var args = event.args;
             // select the item in the 'select' tag.
             var index = args.item.index;
             console.log(args.item.value);
             $('#Data')
    .val(args.item.value)
    .trigger('change');
           
        }
 });
}

  );

 $('#Data').change(switchg);

 function switchg() {
    var val = $('#Data').val();
    $('.graph').fadeOut();
   $('#'+val).show();
   window.dispatchEvent(new Event('resize'));
    $('#'+val).hide();
   $('#'+val).delay(1000).fadeIn();


 }


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
          'survey': '{{$survey}}'
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
         'term':$('#Term').val(),
         'survey':'{{$survey}}'

    };
 
   $.ajax({
      url: '{{config("app.prefix")}}/analytics/data',
      type: "post",
       data: data,
           success: function(data){
    var Odata = JSON.parse(data);
		var jsonData = Odata['Data'];
    
    var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
   x = window.mapdata;


   @if(substr($survey,0,4)=='IMCI')
   @include('analytics/IMCImapdata')
   @else
   @include('analytics/mapdata')
   @endif
    
    @include('analytics/'.$survey.'/js')

    $('#X').html('Data from '+TotalSubmitt+ ' healthworkers in '+$('#County').val());
    
    if (allcheck==1){

    var nos = Odata['Numbers'];

    $('#X').html('Data from ' + nos['Count'] + ' healthworkers in ' + nos['Counties'] + ' counties');

    } 

    $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
    $( ".wait" ).removeClass("overlay");
  }
});   

}
  
   @if($survey=='CHV2')
   @include('analytics/'.$survey.'/js2')  
   @endif

   window.inside.find('.county').click(function() {
  var cts = this.getAttribute("title");
   $(document).ready(function() {

$('#County').val(cts);
 document.getElementById("select2-County-container").innerHTML = cts;
$('#X').html('Data from '+TotalSubmitt+ 'healthworkers in '+$('#County').val());
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


    $.getJSON("{{config('app.prefix')}}/analytics/terms",{county: $(this).val(),survey:'{{$survey}}', ajax: 'true'}, function(j){
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i]+ '">' + j[i]+ '</option>';
      }
      $("select#Term").html(options);
      var $termchange = $("#Term").select2();
      // $termchange.val(j[0]).trigger("change"); 

    })
  })
});


$('#fcbtn').click(function () {
     var county = $('#County').val();
     var survey = '{{$survey}}';
        var data = {
            'county':county,  
            'survey':survey,
            'term':$('#Term').val(),
            '_token': $('input[name=_token]').val()
          };
 
        


    $.ajax({
      url: '{{config("app.prefix")}}/analytics/facilitylist',
      type: "post",
       data: data,
      success: function(data){
        data2 = JSON.parse(data)
        var text= '<table style="width:100%"><tr><th>Code</th><th>Name</th><th>County</th><th>Sub County</th></tr>';
         $.each(data2, function(key, value) {
                 text = text + "<tr><td>"+value.FacilityCode + "&nbsp;</td><td>" + value.FacilityName + "&nbsp;</td><td>" + value.SubCounty + "&nbsp;</td><td>"+value.County+"&nbsp;</td></tr>";
            });      

         text = text + "</table>";


         $("#dialog").html(text);

         if (county=="All") county = "all counties";
         else county = county + " county";

          $("#dialog").dialog({
             autoOpen: false,
              modal: true,
             minWidth: 500,
            title: "healthworkers assessed in " + county
          });
          $("#dialog").dialog('open');
          $('.ui-widget-overlay').css('background', 'white');







      }
    }); 
        
    });






</script>
    
   
@endsection