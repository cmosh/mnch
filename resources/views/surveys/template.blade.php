
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href ="{{ URL::asset('bower_components/parsleyjs/src/parsley.css') }}"  rel="stylesheet" type="text/css" />  


@endsection 

@section('content')
   

            

       





    {!! Form::open(['url' => '/'.$id.'/Progress','id'=>'demo-form','data-parsley-validate'=>'']) !!}

                <?php echo $Mel?>

           

         


                {!! Form::submit('Submit',['class' => 'submit btn btn-success form-control','id'=>'thesubmit','style'=>'display:none;']) !!}


                {!! Form::close() !!}
                 <a>  <button  id="some_id2" class="send-btn btn btn-info form-control" >Confirm and Proceed to Review</button></a>

                  <a>  <button  id="loader" style="display:none;" w="body" class="send-btn btn btn-warning form-control" disabled> Submitting <img src="/pace/loader.gif"  id="imgProgress" /> </button></a>
                  

				
			
			


			

        

@endsection

@section('javascript')

 <script src="/pace/pace.min.js"></script>
  <link href="/pace/pace.css" rel="stylesheet" />

<script type="text/javascript">


window.setInterval(sonline,120000);

function sonline() {



     var data = {
                     
             'action':'set',        

            'AssID':'{{$AssID}}',
             
         '_token': $('input[name=_token]').val()

    };
 
         


    $.ajax({
      url: '/survey/session',
      type: "post",
       data: data,
     
      success: function(data){
     

      }
    }); 



}



    
    var timeoutId;  
$('.asave').change(function () {
    if (timeoutId) clearTimeout(timeoutId);

    timeoutId = setTimeout(function () {

        var data = {
            'type':'auto',
          

            'AssID':'{{$AssID}}',
              'user':{{ Auth::user()->id }},
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]').val(),
  
                @endforeach
         '_token': $('input[name=_token]').val()

    };
 
         var data2 = {
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]:checked').val(),

                @endforeach
         
    };

        var data3 ={
              @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name="{{$AjaxName}}[]"]').val(),
  
                @endforeach
     

        }
        $.extend( data, data2,data3 );


    $.ajax({
      url: '/survey/save',
      type: "post",
       data: data,
       error:function(){
        alert('Unable to autosave');
       },
      success: function(data){
       var dt = new Date($.now())
           $('#autosavetext').text('(Autosaved '+ dt +')');    
      }
    }); 
        
    }, 20000);
});


</script>

<script type="text/javascript">
$(document).ready(function(){
     $('.send-btn').click(function(){ 

      var btn = $(this).attr('w');

    var data = {

        'type':'auto',
        'AssID':'{{$AssID}}',
         'user':{{ Auth::user()->id }},
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]').val(),
  
                @endforeach
         '_token': $('input[name=_token]').val()

    };
 
         var data2 = {
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]:checked').val(),

                @endforeach
         
    };

        $.extend( data, data2 );

    $.ajax({
      url: '/survey/save',
      type: "post",
       data: data,
        
      success: function(data){
            $('#changeclass').attr('class','callout callout-success');

             $('#changeclass').text('Saved');    
              $('#thesubmit').show();    
              setTimeout(function(){
    if(btn=='head') window.location = ('{{URL::asset("/status/save")}}/{{$AssID}}');
  }, 20000);

             



      }
   

    });      
  
            
});

});
         
</script>


<script type="text/javascript">





$("#demo-form").submit(function(e) { 

        e.preventDefault();

        if ( $(this).parsley().isValid() ) {

   $('#thesubmit').hide();   
 $('#loader').show();   

    var data = {

        'type':'Submitted',
        'AssID':'{{$AssID}}',
         'user':{{ Auth::user()->id }},
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]').val(),
  
                @endforeach
         '_token': $('input[name=_token]').val()

    };
 
         var data2 = {
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]:checked').val(),

                @endforeach
         
    };

        $.extend( data, data2 );

    $.ajax({

    
      url: '/survey/save',
      type: "post",
       data: data,
      success: function(data){
            $('#changeclass').attr('class','callout callout-danger');

             $('#changeclass').text('Saved');  
             
             @if($location=="CH")
             var u = 'CH'; 
             @elseif($location=="MN")
              var u = 'MNH'; 
             @else 
              var u = 'IMCI'; 
             @endif

           

              window.location = ('{{URL::asset("/status/submit")}}/{{$AssID}}');




      }
    });


    }  

  

   return false;

            }); 

         
</script>


<script type="text/javascript">
    


    var form = document.getElementById("savebt");
document.getElementById("demo-form").setAttribute("action", "/{{$id}}/Saved");
document.getElementById("demo-form").addEventListener("click", function () {

//  form.submit();
});



</script>
       <script type="text/javascript">
$('#some_id2').click(function() {

 // assessments/{id}/{date}/{term}/{county}
  // var linki = '/assessments/' + ($('#sv').val()).substring(0,2) + '/'+ $('#County').val();
  // //alert(linki);

  //  $(location).attr('thesubmit', linki);

   
    $('#saved').show();
    window.scrollTo(0, 0);
    
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
             $("[coolradio=" + this.id+"]").attr('required','');






            });
    $("[name="+name+"]:not(:checked)").each(function() {
        
        $("[coolradio=" + this.id+"]").hide();
        $("[coolradio=" + this.id+"]").removeAttr('required');
            $("[coolradio=" + this.id+"]").val('');
          
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
        
    $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".themultiple").attr('data-parsley-mincheck','1');

     $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").attr('required','');
          
             

  
});   
   
    $("[name="+name+"]:not(:checked)").each(function() {
       $("[automaticallyVisibleIfIdChecked=" + this.id+"]").hide();
          $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".themultiple").removeAttr('data-parsley-mincheck');
      $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").removeAttr('required');
            $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".rmselect").removeAttr('selected');
      $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").removeAttr('checked');
        $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").val('');
         

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



$( ".coolhidden" ).change(function() {

  var replaceval =  $(this).attr('coolstore');

  $('#'+replaceval).val(this.value);

 
});


 

$( ".coolmultiple" ).change(function() {
  var str = this.name;
  var str2 =  str.slice(0,-2)
  var thehidden = '#' +str2 + 'other';
//arrValues.indexOf('Sam') > -1
  
  var size = "";

  $("#"+str2+ " option:selected").each(function () {
                size += $(this).val() + " ";
            });



  if (size.indexOf('-1') > -1) {
  $(thehidden).show();
  $(thehidden).attr('required','');
}else{
   $(thehidden).hide();
   $(thehidden).removeAttr('required');
}
   
   

});
 


</script>



@endsection 