
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection



@section('content')
   

            
      
       





    {!! Form::open(['id'=>'demo-form','data-parsley-validate'=>'']) !!}

                <?php echo $Mel?>

           

         


                {!! Form::submit('Submit',['class' => 'submit btn btn-success form-control','id'=>'thesubmit','style'=>'display:none;','w'=>'not']) !!}


                {!! Form::close() !!}



                
                  

       <a>  <button  id="some_id2" w="body" class="send-btn btn btn-info form-control" >Confirm and Proceed to Review</button></a>
				
			
			


			

        

@endsection

@section('javascript')










<script type="text/javascript">


window.setInterval(sonline,120000);
window.ParsleyConfig = { excluded: "input[type=button], input[type=submit], input[type=reset], input[type=hidden], [disabled], :hidden" };
function sonline() {
  var data = {                    
             'action':'set',
             'AssID':'{{$AssID}}',
            'Survey':'{{$Survey}}',             
         '_token': $('input[name=_token]').val()

    };
  $.ajax({
      url: '{{config("app.prefix")}}/survey/session',
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
            'user':'{{ Auth::user()->id }}',
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
      url: '{{config("app.prefix")}}/survey/save',
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


$(document).ready(function(){
     $('.send-btn').click(function(e){ 

      e.preventDefault();
      var btn = $(this).attr('w');
       $('#saving').show();
       $('#some_id2').hide();

    window.scrollTo(0, 0);

    var data = {

        'type':'auto',
        'AssID':'{{$AssID}}',
         'user':'{{ Auth::user()->id }}',
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
      url: '{{config("app.prefix")}}/survey/save',
      type: "post",
       data: data,
       error:function(){
       
         $('#saving').hide();
         scroll(0,0);
         $('#notsaved').show();

           setTimeout(function(){
   $('#notsaved').hide();
   $('#some_id2').show();
}, 5000);

       },
        
      success: function(data){
           $('#saving').hide();
         scroll(0,0);
         $('#saved').show();
          
           setTimeout(function(){
             if(btn=='head') window.location = ('{{URL::asset("/status/save")}}/{{$AssID}}');
   $('#saved').hide();
     $('#thesubmit').show();
    
    
}, 10000);// changed from 1000ms to allow users to visibly read the saved notification
      }
   

    });      
  
            
});


  return false;
});
         

$('#thesubmit').click(function(){
  $(this).attr('w','surrender');
});


$("#demo-form").submit(function(e) { 

    if( $('#thesubmit').attr('w')=='not') return ;


        e.preventDefault();

        if ( $(this).parsley().isValid() ) {

        

   $('#thesubmit').hide();   
   window.scroll(0,0);
 $('#loader').show();   

    var data = {

        'type':'Submitted',
        'AssID':'{{$AssID}}',
         'user':'{{ Auth::user()->id }}',
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

    
      url: '{{config("app.prefix")}}/survey/save',
      type: "post",
       data: data,
        error:function(){

       $('#thesubmit').show();   
 $('#loader').hide(); 
 $('#notloaded').show(); 

     setTimeout(function(){
  $('#notloaded').hide(); 
  $('thesubmit').show();
}, 5000);

    
       },

      success: function(data){
        $('#loader').hide(); 
            $('#loaded').show();

           
             
             @if($location=="CH")
             var u = 'CH'; 
             @elseif($location=="MN")
              var u = 'MNH'; 
             @else 
              var u = 'IMCI'; 
             @endif

              setTimeout(function(){
   window.location = ('{{URL::asset("/status/submit")}}/{{$AssID}}');
}, 1000);

             




      }
    });


    }  

  

   return false;

            }); 


   var Facility = '<div class="box-header"><h3 class="box-title">Facility Information</h3></div><table class="table"><thead><tr><td colspan="1" style="vertical-align:middle"><b>Facility Name</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Type</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Tier</b> </td></tr></thead><tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->FacilityName}}" class="form-control" id="InputFacilityName" disabled="" type="text"></td><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Type}}" class="form-control" id="InputFacilityType"  disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle"> <input  value="{{$TheFacility->Tier}}" class="form-control" id="InputFacilityTier"  disabled="" type="text"></td></tr></tbody><thead><tr><td colspan="1" style="vertical-align:middle"><b>Owned By</b></td><td colspan="1" style="vertical-align:middle"><b>County</b> </td><td colspan="1" style="vertical-align:middle"><b>District/Sub-County</b> </td> </tr> </thead> <tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Owner}}" class="form-control" id="InputFacilityOwner"  disabled="" type="text"></td>  <td colspan="1" style="vertical-align:middle"><input value="{{$TheFacility->County}}" class="form-control" id="InputFacilityCounty" placeholder="Enter county" disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle">  <input  value="{{$TheFacility->District}}" class="form-control" id="InputFacilitySubCounty" placeholder="Enter district/sub-county" disabled="" type="text"> </td> </tr></tbody></table>';
    $('#thefacility').html(Facility);
    $(".select2").select2();
    $("[data-mask]").inputmask();


     $(document).ready(function(){
      if(window.offline) e.preventDefault();
              $("#cancelbt").click(function(event){
          $("#cancLink").attr("href", "waiting");
          var canconf= confirm('Are you sure you want to cancel the survey? All progress will be lost?');
          if(event.target==this && canconf==true){     
          $("#cancLink").attr("href", "{{config('app.prefix')}}/assessments/cancel/{{$AssID}}");
          alert( "Cancel Successful");
             }
          else{
          $("#cancLink").attr("href", "#");
          alert( "Cancel aborted");
          }
              });
          });



  $('.Date').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
        }
    });

   $('.yearpick').datepicker( {
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'yy',
        onClose: function(dateText, inst) { 
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, 1));
        }
    });


    $(function () {
    $('.Temp').on('keyup', function (e) {
        if (!this.value.match(/^\d{0,5}(\.[0-9]{1,2})?$/)) {
            $(this).addClass('errortemp'); // adding error class
        } else {
            $(this).removeClass('errortemp'); // remove error class
        }
    });
});


</script>


<style type="text/css">
.errortemp {
    color:red;
}

  .ui-datepicker-calendar {
    display: none;
    }
</style>
{!!javascript_include_tag('survey')!!}

@endsection 