@extends('app')

@section('content')
 
              {!! Form::open() !!}
              {!! Form::close() !!}

<div class="col-md-12">
              <div class="box box-warning box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Counties</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
               
                 <div class="form-group">
                    <table>
                     <tr>
                  <td>
                    <label>
                      <input type="checkbox" value="All" ch="0" class="idle county flat-red"/>
                    All Counties
                    </label>
                    </td>
                   
                  @foreach($SubmittedCounties as $SubmittedCounty)
                  
                  <td>
                    <label>
                      <input type="checkbox" value="{{$SubmittedCounty->County}}" ch="0" class="idle county flat-red"/>
                     {{$SubmittedCounty->County}}
                    </label>
                    </td>
                   
                  @endforeach
                   </tr>
                  
                  </table>
                  </div>


                </div><!-- /.box-body -->
            </div>
            </div>


             <div class="col-md-4" id="box1" style="display: none;">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title" id="title1"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                <div id="canvas1"></div>  

                </div><!-- /.box-body -->
                 
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        

             <div class="col-md-4" id="box2" style="display: none;">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title" id="title2"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                <div id="canvas2"></div>  

                </div><!-- /.box-body -->
                 
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->      


             <div class="col-md-4" id="box3" style="display: none;">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title" id="title3"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                <div id="canvas3"></div>  

                </div><!-- /.box-body -->
                 
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->          




@endsection


@section('js')
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    

	<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart', 'bar']});

	max = 0;
	conty = "";
	bx ="";
	$('.county').parent().click(function(e){




		var sel = $(this).find('.county').attr('ch');
		sel++;
		$(this).find('.county').attr('ch',sel);
		

		var sw = sel%2;

		if(sw==1){
			var county = $(this).find('.county').val();
			max++;
			$(this).find('.county').removeClass('idle');
			if(max==3){$('.idle').parent().hide();}	
			make(max, county);

		}

		else{
			unmake(max);
			max--;
			$('.idle').parent().show();
			$(this).find('.county').addClass('idle');

		}
		
		
		
	});

	function make(box,county){
		 
		window.conty = county;
		window.bx = box;
		
		drawChart();
		$('#title'+box).html(county);
		$('#box'+box).show();

	}

	function unmake(box){
		$('#title'+box).html('');
		$('#box'+box).hide();

	}

	function drawChart() {

	 
	  var data = {
          'county':window.conty,
         '_token': $('input[name=_token]').val(),
         'fi': '{{$funct}}'
        

    };
    alert(window.conty);
 
   $.ajax({
      url: '/analytics/comparison',
      type: "post",
       data: data,
           success: function(data){
    
		var jsonData = JSON.parse(data);
     

   
  	alert(jsonData);
  
  
    
	  @include('/analytics/comparison/'.$chart)	  
	
     

       
      }
 
   });   


       

}

	</script>
   <link href="/bower_components/admin-lte/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
   <script src="/bower_components/admin-lte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

     <script type="text/javascript">
      $(function () {
       
        

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });


        	    		
        
      });
    </script>
    <script type="text/javascript">

    	




    </script>
   
@endsection