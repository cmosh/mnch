
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection



@section('content')
   
                 




    	
			
			


			

				<?php echo $Mel?>



			

        

@endsection

@section('javascript')
	 <!-- Select2 -->
   
   

 
<script type="text/javascript">


      $(function () {
        var Facility = '<div class="box-header"><h3 class="box-title">Facility Information</h3></div><table class="table"><thead><tr><td colspan="1" style="vertical-align:middle"><b>Facility Name</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Type</b></td><td colspan="1" style="vertical-align:middle"><b>Facility Tier</b> </td></tr></thead><tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->FacilityName}}" class="form-control" id="InputFacilityName" disabled="" type="text"></td><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Type}}" class="form-control" id="InputFacilityType"  disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle"> <input  value="{{$TheFacility->Tier}}" class="form-control" id="InputFacilityTier"  disabled="" type="text"></td></tr></tbody><thead><tr><td colspan="1" style="vertical-align:middle"><b>Owned By</b></td><td colspan="1" style="vertical-align:middle"><b>County</b> </td><td colspan="1" style="vertical-align:middle"><b>District/Sub-County</b> </td> </tr> </thead> <tbody><tr><td colspan="1" style="vertical-align:middle"> <input value="{{$TheFacility->Owner}}" class="form-control" id="InputFacilityOwner"  disabled="" type="text"></td>  <td colspan="1" style="vertical-align:middle"><input value="{{$TheFacility->County}}" class="form-control" id="InputFacilityCounty" placeholder="Enter county" disabled="" type="text"> </td><td colspan="1" style="vertical-align:middle">  <input  value="{{$TheFacility->District}}" class="form-control" id="InputFacilitySubCounty" placeholder="Enter district/sub-county" disabled="" type="text"> </td> </tr></tbody></table>';
        $('#thefacility').html(Facility);
         //Initialize Select2 Elements
        $(".select2").select2();
        //Money Euro
        $("[data-mask]").inputmask();
         });
        
          $(document).ready(function(){
              $("#cancelbt").click(function(event){
          $("#cancLink").attr("href", "waiting");
          var canconf= confirm('Are you sure you want to cancel the survey? All progress will be lost?');
          if(event.target==this && canconf==true){     
          $("#cancLink").attr("href", "/assessments/cancel/{{$AssID}}");
          alert( "Cancel Successful");
             }
          else{
          $("#cancLink").attr("href", "#");
          alert( "Cancel aborted");
          }
              });
          });

//<li> <a href="/assessments/cancel/{{$AssID}}"  role="button">
              //<span><button id="cancelbt" class="btn btn-block btn-warning btn-xs">Cancel and Discard</button></span>  
          //</a> </li>


          
    </script>




@endsection 