
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />


@endsection 

@section('content')
   
                 




    	
			
			


				{!! Form::open(['url' => '/'.$id]) !!}

				<?php echo $Mel?>

           

         

				{!! Form::submit('Submit',['class' => 'btn btn-danger form-control','id'=>'thesubmit','style'=>'display:none;']) !!}

				{!! Form::close() !!}
                 <a  href="#Section1">  <button  id="some_id2" class="btn btn-info form-control" >Confirm</button></a>

        

@endsection

@section('javascript')
       <script type="text/javascript">
$('#some_id2').click(function() {

 // assessments/{id}/{date}/{term}/{county}
  // var linki = '/assessments/' + ($('#sv').val()).substring(0,2) + '/'+ $('#County').val();
  // //alert(linki);

  //  $(location).attr('thesubmit', linki);
    $('#thesubmit').show();
    $('#some_id2').hide();
});

           
      </script>   
	 <!-- Select2 -->
    <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
     <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>


  <script type="text/javascript">
    

    function executecoolness(name) {
    $("[name="+name+"]:checked").each(function() {
        
        $("[coolradio=" + this.id+"]").show();
           $("[coolradio=" + this.id+"]").attr('name',name+'[]');
     


            });
    $("[name="+name+"]:not(:checked)").each(function() {
        
        $("[coolradio=" + this.id+"]").hide();
        $("[coolradio=" + this.id+"]").removeAttr('name');
          
          
    });
}

$(document).ready( function() {
    triggers = $("[coolradio]")
        .map(function(){ return $("#" + $(this).attr("coolradio")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executecoolness(this.name);
        $(this).change( function(){ executecoolness(this.name); } );
    });
});
</script>

 <script type="text/javascript">
    

    function executeAutomaticVisibility(name) {
    $("[name="+name+"]:checked").each(function() {
        $("[automaticallyVisibleIfIdChecked=" + this.id+"]").show();
    });
    $("[name="+name+"]:not(:checked)").each(function() {
        $("[automaticallyVisibleIfIdChecked=" + this.id+"]").hide();
    });
}

$(document).ready( function() {
    triggers = $("[automaticallyVisibleIfIdChecked]")
        .map(function(){ return $("#" + $(this).attr("automaticallyVisibleIfIdChecked")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executeAutomaticVisibility(this.name);
        $(this).change( function(){ executeAutomaticVisibility(this.name); } );
    });
});
</script>

 <!-- Page script -->
    <script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

       
        //Money Euro
        $("[data-mask]").inputmask();
   

        
        

      

        
      });



          
    </script>

<script type="text/javascript">
function showDiv(prefix,chooser,id) 
{
        for(var i=0;i<chooser.options.length;i++) 
        {
            var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
        var selectedOption = (chooser.options[chooser.selectedIndex].value);
        var selectedValues = $("#"+id).val();
 
        if(selectedValues.indexOf("4") >= 0)  
        {
            displayDiv(prefix,"1");
            
        }
        
        //alert(selectedOption);
        
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


@endsection 