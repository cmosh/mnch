@extends('app')

@section('content')
 <link href="/css/dragging.css" rel="stylesheet" type="text/css" />

  
              {!! Form::open() !!}{!! Form::close() !!}

<fieldset id="container">

 <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Counties</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
        <div class="bucket" >
           
            <div  class="droppable ">
               <ul id="main_list" class="source sortable">
               <li data-value="All">All Counties</li>
               @foreach ($SubmittedCounties as $SubmittedCounty ) 
                <li data-value="{{$SubmittedCounty->County}}"> {{$SubmittedCounty->County}}</li>
               @endforeach
   
</ul>
                 </div><!-- /.box-body -->
                 </div>
              </div><!-- /.box -->
            </div>

         
        
    </div>


  <div class="col-md-6">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Counties</h3>
                 <table id="checks">
                 <tr>
                 <td>
                  <div class="checkbox">
                        <label for="base">
                          <input id="base" value="Baseline" class="cbox" type="checkbox">
                          Baseline
                        </label>
                      </div>
                      </td>
                      <td> &nbsp; </td>
                      <td>
                      <div class="checkbox">
                        <label for="mid">
                          <input id="mid" class="cbox" value="Midterm" type="checkbox">
                          Midterm
                        </label>
                      </div>
                      </td>
                       <td> &nbsp; </td>
                      <td>
                      <div class="checkbox">
                        <label for="end">
                          <input id="end" class="cbox" value="Endterm" type="checkbox">
                          Endterm
                        </label>
                      </div>
                      </td>
                      </tr>
                     </table>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
        <div class="choosen">
          
       
                <ul id="selt_count" class="target sortable">
                  
                </ul>
                 </div>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

           
       
   



    
</fieldset>
<div class="col-md-12">
  
  <div id='partbase'></div>
   <div id='partmid'></div>

 <div id='partend'></div>

</div>


   


@endsection


@section('js')
    <link href="/bower_components/jq/jquery-ui.css" rel="stylesheet" /> 
    <script src="/bower_components/jq/jquery-ui.js"></script>    
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">
    google.load('visualization', '1', {packages: ['corechart', 'bar']});

  $('.sortable').sortable({
    connectWith: '.sortable',
    tolerance: 'pointer'
});
$('.sortable li').mousedown(function() {
    $('.sortable').not($(this).parent()).each(function() {
        if ($(this).find('li').length >= 3) {
            if ($(this).attr('id') != "main_list" ) {
                $(this).sortable('disable');
            }
        }
    });
});
$('.sortable li').mouseup(function() {
    $('.sortable').each(function() {
        $(this).sortable('enable');
    });
});
</script>
    <script type="text/javascript">
  window.cols=0;
  resetpart('base');
   resetpart('mid');
   resetpart('end');


$('#checks').on('click', '.cbox', function (e) {
                    if(this.checked){

                      window.cols++;
                      setcolwidth();

                       var values = $('#selt_count li').map(function() {
                return $(this).attr('data-value');
            });
                      perfomance(this.id,values,true);

                    }
                      else{
                         window.cols--;
                       resetpart(this.id);

                      };
                });



function resetpart(term){
var theterm = $('#'+term).val();
  
    $('#part'+term).html('<div class="opt" id="box'+term+'" style="display: none;"><div class="box box-danger"><div class="box-header with-border"><h3 class="box-title">'+theterm+'</h3><div class="box-tools pull-right"><button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button></div></div><div class="box-header with-border"><h3 class="box-title" id="title'+term+'1"></h3></div><div class="box-body"><div id="'+term+'1"></div></div><div class="box-header with-border"><h3 class="box-title" id="title'+term+'2"></h3></div><div class="box-body"><div id="'+term+'2"></div></div><div class="box-body"><div class="box-header with-border"><h3 class="box-title" id="title'+term+'3"></h3></div><div id="'+term+'3"></div></div><div class="wait'+term+' overlay"><i class="fa fa-refresh fa-spin"></i></div></div></div></div>');



}
function setcolwidth(){

  switch(window.cols){

    case 1:  $( ".opt").addClass("col-md-12");
            $( ".opt").removeClass("col-md-4");
            $( ".opt").removeClass("col-md-6");
    

    break;

    case 2:
     $( ".opt").addClass("col-md-6");
            $( ".opt").removeClass("col-md-4");
            $( ".opt").removeClass("col-md-12");

    break;
    case 3:
     $( ".opt").addClass("col-md-4");
            $( ".opt").removeClass("col-md-6");
            $( ".opt").removeClass("col-md-12");

    break;

    default:
     $( ".opt").addClass("col-md-4");
            $( ".opt").removeClass("col-md-6");
            $( ".opt").removeClass("col-md-12");

    break;
  }
  resizecd();

}
function perfomance(term,values,ov){

     $('#box'+term).show();
     theterm = $('#'+term).val();
     
    for (var i = 0; i <values.length; i++) {
      if(ov){
        $( ".wait"+term ).children().addClass("fa fa-refresh fa-spin");
       $( ".wait"+term ).addClass("overlay"); 
     }
            county=values[i];
            box = term + [i+1];
               
            drawChart(box, county,theterm);
             

           };       
    





}
   
  function rtrim(str, length) {
  return str.substr(0, str.length - length);
}

	function drawChart(box,county,theterm) {

	 
	  var data = {
          'county':county,
         '_token': $('input[name=_token]').val(),
         'fi': '{{$funct}}',
         'yr':'{{$yr}}',
         'term':theterm
        

    };
  
 
   $.ajax({
      url: '/compare/chv2',
      type: "post",
       data: data,
           success: function(data){
    
		var jsonData = JSON.parse(data);
     

 
  
  
    
	  @include('/analytics/comparison/'.$chart)	  
	
     $('#title'+box).html(county);

    $( ".wait"+rtrim(box,1) ).children().removeClass("fa fa-refresh fa-spin");
    $( ".wait"+rtrim(box,1) ).removeClass("overlay");

       
      }
 
   });   


       

}
  
  function thebegin(id){
   

      var chk =  $('#'+id).prop('checked');
   
       if(chk){
                       var values = $('#selt_count li').map(function() {
                return $(this).attr('data-value');
            });
                      perfomance(id,values,false);

                    }
                      
              



  }

 function resizecd () {
     
     thebegin('base');
      thebegin('mid');
       thebegin('end');

           
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizecd, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizecd);
    }

   


	</script>
  
   
@endsection