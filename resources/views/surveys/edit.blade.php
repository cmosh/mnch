
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


				{!! Form::submit('Finish and Save',['class' => 'btn btn-primary form-control']) !!}

				{!! Form::close() !!}

        

@endsection

@section('javascript')
	 <!-- Select2 -->
    <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
     <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>


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




@endsection 