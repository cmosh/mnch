
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href ="{{ URL::asset('bower_components/parsleyjs/src/parsley2.css') }}"  rel="stylesheet" type="text/css" />  
@endsection 

@section('content')
   

            

        <div id="saved" style="display:none">
        <br>
        <br>
        <br>
            <div  class="callout callout-success" >
                <h3>Saved!</h3>
                <p>Please check if you have fully completed the form before submitting.</p>
            </div>
            </div>





    {!! Form::open(['url' => '/'.$id,'id'=>'demo-form','data-parsley-validate'=>'']) !!}

                <?php echo $Mel?>

           

         


                {!! Form::submit('Submit',['class' => 'btn btn-danger form-control','id'=>'thesubmit','style'=>'display:none;']) !!}

                {!! Form::close() !!}
                 <a  href="#Section1">  <button  id="some_id2" class="btn btn-info form-control" >Confirm</button></a>

				{!! Form::submit('Submit',['class' => 'btn btn-success form-control','id'=>'thesubmit','style'=>'display:none;']) !!}

				{!! Form::close() !!}
                 <a  href="#saved">  <button  id="some_id2" class="btn btn-success form-control" >Confirm and Proceed to review</button></a>



    	
			
			


			

        

@endsection

@section('javascript')
       <script type="text/javascript">
$('#some_id2').click(function() {

 // assessments/{id}/{date}/{term}/{county}
  // var linki = '/assessments/' + ($('#sv').val()).substring(0,2) + '/'+ $('#County').val();
  // //alert(linki);

  //  $(location).attr('thesubmit', linki);

    $('#thesubmit').show();
    $('#saved').show();
    $('#some_id2').hide();
});

           
      </script>   
	 <!-- Select2 -->



      <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

       
        //Money Euro
        $("[data-mask]").inputmask();
   

        
        

      

        
      });



          
    </script>
        <script src="{{ URL::asset('bower_components/parsleyjs/dist/parsley2.min.js') }}"></script>  
        
    <!-- InputMask -->
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
     <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#demo-form').parsley({
            successClass: 'success',
            errorClass: 'error',
            errors: {
                classHandler: function(el) {
                    return $(el).closest('.control-group');
                },
                errorsWrapper: '<span class=\"help-inline\"></span>',
                errorElem: '<span></span>'
            }
        });
    });
</script>


  <script type="text/javascript">
    

    function executecoolness(name) {
    $("[name="+name+"]:checked").each(function() {
        
        $("[coolradio=" + this.id+"]").show();
           $("[coolradio=" + this.id+"]").attr('name',name+'[]');
             $("[coolradio=" + this.id+"]").attr('required','');


            });
    $("[name="+name+"]:not(:checked)").each(function() {
        
        $("[coolradio=" + this.id+"]").hide();
        $("[coolradio=" + this.id+"]").removeAttr('name');
           $("[coolradio=" + this.id+"]").removeAttr('required');
          
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
         var theparid = $("[automaticallyVisibleIfIdChecked=" + this.id+"]").attr('id');

       


    $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".themultiple").attr('data-parsley-mincheck','2');
     $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").attr('required','');
          
             

  
});   
   
    $("[name="+name+"]:not(:checked)").each(function() {
       $("[automaticallyVisibleIfIdChecked=" + this.id+"]").hide();
         $("*","[automaticallyVisibleIfIdChecked=" + this.id+"]").removeAttr('required');
         $("*","[automaticallyVisibleIfIdChecked=" + this.id+"]").removeAttr('data-parsley-mincheck');
         

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