@extends('app')
@section('header')

 <!--<h1  align="middle">-->

             {{$surveyname}}

              <small>(Analysis Results - <c id="s"></c>)</small>

@endsection
@section('content')



          
           
        
  <div class="row">
  {!! Form::open() !!}
  {!! Form::close() !!}
   </div>
   <div class="row">
   @if(substr($survey,0,4)=='IMCI')
   @include('analytics/IMCIcounty')
   @else
   @include('analytics/county')
   
   @endif


  

            

            

@endsection


@section('js')


  

 <style type="text/css">
   .ui-dialog{
     position: fixed; padding: .2em; width: 300px; overflow: hidden; 
}
 </style>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>  
 <script type="text/javascript">

 function runFunction(name, arguments)
{
    var fn = window[name];
    if(typeof fn !== 'function')
        return;

    fn.apply(window, arguments);
}





$(document).ready(function(){

    $(".cmpr").attr("hidden","true");
    $(".dropdon").attr("hidden","true");
       $("#Data1").jqxListBox({ theme: "arctic",width: '100%', height: 200 });
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
google.setOnLoadCallback(makeChart);
  
 $('#Data').change(makeChart);

 function makeChart() {
  var html = '<div class="box box-warning"><div class="box-header with-border"><h3 class="box-title">Please Wait</h3></div><div class="box-body"></div><div class="wait overlay"><i class="fa fa-refresh fa-spin"></i></div></div>'
  $('#chartmaker').html(data);
       var data = {
         
         '_token': $('input[name=_token]').val(),
          'survey': '{{$survey}}',
          'link':$('#Data').val()
    };
 
   $.ajax({
      url: '{{config("app.prefix")}}/analytics/datarequest',
      type: "post",
       data: data,
           success: function(data){
            $('#chartmaker').html(data);     
            drawChart();
      }
 
   });   




 }
  $('#County').change(makeChart);
  $('#Term').change(makeChart);

  
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
    var graphs = $('#graphs').val();
    if ($('#theyears').val()!= 'not'){
     var y1 = $('#Year1').val();
     var y2 = $('#Year2').val();
     var years = [y1,y2];
    }
    else
    {
     var  years = ['not','not'];
    }
    // alert(years);
    var dtypes = $('#thetypes').val();
    $( ".wait" ).children().addClass("fa fa-refresh fa-spin");
      $( ".wait" ).addClass("overlay");
    var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val(),
         'graphs': graphs,
         'years': years,
         'dtypes': dtypes,
         'term':$('#Term').val(),
         'survey':'{{$survey}}'
    };
 
   $.ajax({
      url: '{{config("app.prefix")}}/analytics/data',
      type: "post",
       data: data,
           success: function(data){
    var Odata = JSON.parse(data);
    var jsonData = Odata.Data;

      var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
   x = window.mapdata;
    // alert(jsonData);
    // var x  = typeof(jsonData);
    // alert (x);
    Object.keys(jsonData).forEach(function(key,index) {
      // alert(jsonData[key]);
      renderchart(jsonData[key],key);
    // key: the name of the object key
    // index: the ordinal position of the key within the object 
});
        $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
    $( ".wait" ).removeClass("overlay");

     @if(substr($survey,0,4)=='IMCI')
   @include('analytics/IMCImapdata')
   @else
   @include('analytics/mapdata')
   @endif
    


 @if(substr($survey,0,4)!='IMCI')
  $('#s').html($('#County').val());
  $('#X').html('Data from '+TotalSubmitt+ ' facilities in '+$('#County').val());
    
    if (allcheck==1){

    var nos = Odata['Numbers'];

    $('#X').html('Data from ' + nos['Count'] + ' facilities in ' + nos['Counties'] + ' counties');

    } 
   
   @endif
}});}

   function  renderchart(dataobject,dataindex){
    
      runFunction(dataobject.pop(),[dataindex,dataobject]);


  }

  function col(index,obj) {
      var cdata = google.visualization.arrayToDataTable(obj);

       var coptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 }

             };
             
      var c = new google.visualization.ColumnChart(document.getElementById(index));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           staff_Trained.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }
  }

  function colfullstack(index,obj) {
     var cdata = google.visualization.arrayToDataTable(obj);

       var coptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
         isStacked: 'percent'

             };
             
     var c = new google.visualization.ColumnChart(document.getElementById(index));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           staff_Trained.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }
  }
  function barfullstack(index,obj) {
     var cdata = google.visualization.arrayToDataTable(obj);

       var coptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:'40%',top:25,width:'50%',height:'75%'}
      };

      var c = new google.visualization.BarChart(document.getElementById(index));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           c.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }
  }

   function barfullstackshort(index,obj) {
     var cdata = google.visualization.arrayToDataTable(obj);

       var coptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:'25%',top:25,width:'75%',height:'75%'}
      };

      var c = new google.visualization.BarChart(document.getElementById(index));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           c.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }
  }
  function barstack(index,obj)
    {
      var cdata = google.visualization.arrayToDataTable(obj);

      var coptions = {
       
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: true,
       hAxis: {minValue: 0},
        vAxis: {minValue:0},
        chartArea:{left:'40%',top:25,width:'100%',height:'75%'}
      };
      var c = new google.visualization.BarChart(document.getElementById(index));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           staff_Trained.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }

    }
  function pie(index,obj)
    {
     
       var cdata = new google.visualization.DataTable();
        cdata.addColumn('string', 'Facilities');
        cdata.addColumn('number', 'Number');
        cdata.addRows(obj);

        // Set chart options
        var coptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       sliceVisibilityThreshold:0,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var c = new google.visualization.PieChart(document.getElementById(index));
        c.draw(cdata, coptions);

         function resizec () {
      
       
            c.draw(cdata, coptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }
  }
  
  

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
             minWidth: 950,
             maxHeight: 600,
            title: "Facilities assessed in " + county
          });
          $("#dialog").dialog('open');
          $('.ui-widget-overlay').css('background', 'white');







      }
    }); 
        
    });






</script>
    
   
@endsection
