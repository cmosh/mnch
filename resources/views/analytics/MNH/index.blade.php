@extends('app')
@section('header')
  <!--<h1  align="middle">-->
                 Maternal and Neonatal Health Survey   
              <small>(Analysis Results)</small>
            <!--</h1>-->
            
@endsection

@section('content')



  <div class="row">
 
             
              {!! Form::open() !!}
       



                         {!! Form::close() !!}


   </div>
   <div class="row">
   @include('analytics/county')

 <div class="col-md-8">

  <!-- small box -->
               <div class="small-box bg-blue">
                <div class="inner">
                  <h3> <p id="X">Data from {{$SubmittedCount}} facilities in {{count($SubmittedCounties)}} counties</p><sup style="font-size: 20px"></sup></h3>
                 
                </div>
              
              </div>
                       
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>FACILITY INFORMATION</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

         @include('analytics/MNH/html/ownership')


         @include('analytics/MNH/html/types')
           
</div>

     
            <div class="col-md-12">
            
     <div class="row">       
            
                   @include('analytics/MNH/html/dservice')
                   


                    @include('analytics/MNH/html/dserviceconduct')
                   
@include('analytics/MNH/html/hman')
     </div>
<div class="row">


        @include('analytics/MNH/html/skillbirth')
          

        @include('analytics/MNH/html/bedcapacity')
          @include('analytics/MNH/html/hours24')

</div>
            </div>



        <div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>FACILITY DATA AND MATERNAL AND NEONATAL SERVICE DELIVERY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
  <div class="row">
 @include('analytics/MNH/html/bemonc')
  @include('analytics/MNH/html/BemoncChallenge')
  

 
 </div>
 <div class="row">
 @include('analytics/MNH/html/cemonc')
 @include('analytics/MNH/html/HIVTest')
  
  </div>
 <div class="row">
 @include('analytics/MNH/html/MainBlood')
 @include('analytics/MNH/html/ReasonBlood')
 @include('analytics/MNH/html/Reasoncs')
 </div>
 
  <div class="row">
  @include('analytics/MNH/html/kangaroo')
  @include('analytics/MNH/html/devpep')
  @include('analytics/MNH/html/newborn')
   </div>
 
   




<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>GUIDELINES, JOB AIDS AND TOOLS AVAILABILITY </b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

          @include('analytics/MNH/html/gjavailability')


           @include('analytics/MNH/html/tavailability')

   @include('analytics/MNH/html/jjavailability') 

     
<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>EQUIPMENT AVAILABILITY AND FUNCTIONALITY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

      @include('analytics/MNH/html/EquipAvail')
    @include('analytics/MNH/html/testing')
  @include('analytics/MNH/html/devkit')



            

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
         'survey':'mnh'
       
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
        
         'Term':$('#Term').val()

    };
 
   $.ajax({
      url: '/analytics/mnhajax',
      type: "post",
       data: data,
           success: function(data){

            // alert('x');
          
     
		var jsonData = JSON.parse(data);
    
  var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
   x = window.mapdata;

  @include('analytics/mapdata')


	//include js
    
	     @include('analytics/MNH/js/gjavailability')     
        @include('analytics/MNH/js/tavailability')
       @include('analytics/MNH/js/jjavailability')
       @include('analytics/MNH/js/dservice')
        @include('analytics/MNH/js/hman')
       @include('analytics/MNH/js/ownership')
       @include('analytics/MNH/js/types')
        @include('analytics/MNH/js/bemonc')
        @include('analytics/MNH/js/cemonc')
         @include('analytics/MNH/js/newborn')
     @include('analytics/MNH/js/HIVTest')
     @include('analytics/MNH/js/kangaroo')
     @include('analytics/MNH/js/devpep')
         
                 @include('analytics/MNH/js/EquipAvail')
    @include('analytics/MNH/js/testing')
  @include('analytics/MNH/js/devkit')
      

  $('#X').html('Data from '+TotalSubmitt+ ' facilities in '+$('#County').val());
        if (allcheck==1) $('#X').html('Data from {{$SubmittedCount}} facilities in {{count($SubmittedCounties)}} counties');


      $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
      $( ".wait" ).removeClass("overlay");

      }
 
   });   


       

}





var inside = $('#thesvg').contents();

inside.find('.county').click(function() {
  var cts = this.getAttribute("cname");
   $(document).ready(function() {

$('#County').val(cts);
 document.getElementById("select2-County-container").innerHTML = cts;

});

drawChart();

var x = 'Selected ' + cts + ' county';

});



  $(function() {
  var moveLeft = 0;
  var moveDown = 0;

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



    $.getJSON("/analytics/terms",{county: $(this).val(), ajax: 'true'}, function(j){
      var options = '';
      for (var i = 0; i < j.length; i++) {
        options += '<option value="' + j[i].Term + '" selected>' + j[i].Term + '</option>';
      }


      $("select#Term").html(options);
    })
  })
})
</script>
    
   
@endsection