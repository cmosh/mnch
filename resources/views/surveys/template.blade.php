
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
     $('.send-btn').click(function(e){ 

      e.preventDefault();
      var btn = $(this).attr('w');
       $('#saving').show();
       $('#some_id2').hide();

    window.scrollTo(0, 0);

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
    
    
}, 1000);
      }
   

    });      
  
            
});


  return false;
});
         
</script>

 {!!javascript_include_tag('survey')!!}

<script type="text/javascript">


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

         
</script>
<script type="text/javascript">
     $(function () {
        var Facility = '<div class="box-header"><h3 class="box-title">Facility Information</h3></div><table class="table"><thead><tr><td colspan="1" style="vertical-align:middle"><b>Facility Name</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Type</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Tier</b> </td></tr></thead><tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->FacilityName}}" class="form-control" id="InputFacilityName" disabled="" type="text"></td><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Type}}" class="form-control" id="InputFacilityType"  disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle"> <input  value="{{$TheFacility->Tier}}" class="form-control" id="InputFacilityTier"  disabled="" type="text"></td></tr></tbody><thead><tr><td colspan="1" style="vertical-align:middle"><b>Owned By</b></td><td colspan="1" style="vertical-align:middle"><b>County</b> </td><td colspan="1" style="vertical-align:middle"><b>District/Sub-County</b> </td> </tr> </thead> <tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Owner}}" class="form-control" id="InputFacilityOwner"  disabled="" type="text"></td>  <td colspan="1" style="vertical-align:middle"><input value="{{$TheFacility->County}}" class="form-control" id="InputFacilityCounty" placeholder="Enter county" disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle">  <input  value="{{$TheFacility->District}}" class="form-control" id="InputFacilitySubCounty" placeholder="Enter district/sub-county" disabled="" type="text"> </td> </tr></tbody></table>';
        $('#thefacility').html(Facility);
         //Initialize Select2 Elements
        $(".select2").select2();
        //Money Euro
        $("[data-mask]").inputmask();
         });
</script>


{!!javascript_include_tag('survey_0')!!}
{!!javascript_include_tag('survey_1')!!}
{!!javascript_include_tag('survey_2')!!}


@endsection 