@extends('app')

@section('content')



  <div class="row">
 
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>Maternal Neonatal Healthcare Survey<sup style="font-size: 20px"></sup></h3>
                  <p>Data from {{$SubmittedCHCount->X}} facilities in {{count($SubmittedCHCounties)}} counties</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
              
              </div>
              {!! Form::open() !!}
       



                         {!! Form::close() !!}


   </div>
   @include('analytics/CH/html/county')

 <div class="col-md-12">
                        
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
           


     
                 @include('analytics/MNH/html/dservice')

        @include('analytics/MNH/html/hman')

        <div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>FACILITY DATA AND MATERNAL AND NEONATAL SERVICE DELIVERY</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
  
 @include('analytics/MNH/html/bemonc')
@include('analytics/MNH/html/cemonc')
  @include('analytics/MNH/html/newborn')
  @include('analytics/MNH/html/devpep')
   @include('analytics/MNH/html/kangaroo')
 
   




<div class="col-md-12">
                        
                        <div class="box-info" >                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>GUIDELINES, JOB AIDS AND TOOLS </b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

          @include('analytics/MNH/html/gjavailability')


           @include('analytics/MNH/html/tavailability')

   @include('analytics/MNH/html/jjavailability') 

     







            

@endsection


@section('js')


  

 
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
 <script type="text/javascript">


      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

               
      });

    </script>

  <script type="text/javascript">
 

google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);

  $('#County').change(drawChart);

	
function mapRequest (county) {
   document.getElementById("countyname").innerHTML = '<strong>'+county+'</strong>';
     x = window.mapdata;

  @include('analytics/mapdata')

   document.getElementById("svFa").innerHTML = '<b>'+TotalSubmitt+'</b>/'+TotalTotal;
   x2 = 100*(TotalSubmitt/TotalTotal);
  $('#svFaBar').attr('style','width: '+x2+'%');
  
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
          
     mapdata = JSON.parse(data)['map'];
		var jsonData = JSON.parse(data)['analytics'];

    // var jsonData = jsonData1['analytics'];
    // alert(jsonData['Guidelines']);


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
     @include('analytics/MNH/js/kangaroo')
     @include('analytics/MNH/js/devpep')
   

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
alert(x);

});

$(function() {
  var moveLeft = 0;
  var moveDown = 0;

  inside.find('.county').hover(function(e) {
      var cts = this.getAttribute("cname");
      mapRequest(cts);

    $('div#pop-up').show();

      
  }, function() {
    $('div#pop-up').hide();
  });

  inside.find('.county').mousemove(function(e) {
    $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});



    </script>
  
    
   
@endsection