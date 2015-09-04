@extends('template')


@section('pageinfo')

 
         
  @endsection




@section('content')

  
     <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  Progress Review
                  </h3>
                </div>      
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">General</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_2" data-toggle="tab">Today's User Completion</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_3" data-toggle="tab">Total User Completiion</a></li>
                  
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <!-- /.box-header -->
                <div class="box-body">
                <table style="float:right">
                  
                  <tr>
                  <td>

                  <b>Filter by:</b>
                  </td>
                  <td>
                   <select id="filterer" class="form-control select2 " style="width: 100%;" name="filterer" > 
                      <option value ="All" id ="filter0" >All</option>
                       <option value ="County" id ="filter1" >County</option>
                        <option value ="Survey" id ="filter2" >Survey</option>
                         <option value ="Term" id ="filter3" >Term</option>
                       </select>

                  </td>
                  
                  <td>
                   <b  "padding-left:20px" >Search:</b>
                   </td>
                   <td>
            <select style="padding-left:20px" id="searcher" class="form-control select2 " style="width: 100%;" name="filterer" >
           

                     @foreach($counties_assessed as $ca)
                        <option value = <?php echo $ca->Name ?> class="searcher0" id ="searcherallcounty" >{{$ca->Name}}</option> 


                     @endforeach
                       
                     

                         
                      <option value ="Baseline" class="searcher1" id ="searcher2" >Baseline</option>
                      <option value ="Midterm" class="searcher1" id ="searcher2" >Midterm</option>
                      <option value ="Endterm" class="searcher1" id ="searcher2" >Endterm</option>
                     
                      <option value ="CHV2"  class="searcher2" id ="searcher3" >CHV2-2014 to Present</option>
                      
                      <option value ="MNHV2"  class="searcher2" id ="searcher3" >MNHV2-2014 to Present</option>
                      
                      <option value ="IMCI"  class="searcher2" id ="searcher3" >IMCI</option>
                      
                      
                       </select>
                       
                  </td>
                  </tr>
                </table>
                <br>
                <br>
                <table id="example1" class="table table-bordered table-striped">
  


                  
                    <thead>
                      <tr>

                     
                        
                        <th>Survey</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th >County</th>
                         <th>Entered by</th>
                        

                        <th>Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($user_monitor as $user)
                        <tr>

                      

                        
                        <td> {{ $user->Survey}}</td>

                        

                        <td > {{ $user->Assessment_Term}}</td>



                        <td > {{ $user->assname}}</td>
                        
                        <?php

                          $date= date_create($user->Date);
                          $dateformated=date_format($date,'d F Y');

                         ?>
                        <td><span><?php echo $dateformated?> </span>  </td>
                        <td ><span>{{ $user->FacilityName}}</span>  </td>
                        <td  ><span>{{$user->County}}</span></td>
                        <td ><span>{{ $user->username}}</span>  </td>
                        @if($user->Status=='Submitted')
 <td><form action="/assessments/show/{{$user->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW"></form></td>                          @else
                          <td>Incomplete</td>
                          @endif
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                      
                        <th>Survey</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th>County</th>
                         <th>Entered by</th>
                        

                        <th>Action</th>
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              
                  </div><!-- /.tab-pane -->





                  <div class="tab-pane" id="tab_2">
                    <table id="example1" class="table table-bordered table-striped">
  


                  
                    <thead>
                      <tr>

                     
                        
                        <th>User Name</th>
                        <th>Submited Surveys </th>
                        <th>Incomplete Surveys </th>
                    
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($Surveycompletion_daily as $daily)
                        <tr>

                      

                        
                        <td> {{ $daily->name}}</td>
<?php
$comp=$daily->Completted_Surveys;
$inco=$daily->Incomplete_Surveys;
if($comp=='')
{
  $comp=0;
}
if($inco=='')
{
  $inco=0;
}
?>

                        <td > <?php echo $comp ?></td>



                        <td > <?php echo $inco ?></td>
                        
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                        <th>User Name</th>
                        <th>Submited Surveys </th>
                        <th>Incomplete Surveys </th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                   <table id="example1" class="table table-bordered table-striped">
  


                  
                    <thead>
                      <tr>

                     
                        
                        <th>User Name</th>
                        <th>Submited Surveys </th>
                        <th>Incomplete Surveys </th>
                    
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      <tr>
                      From August-26-2015
                      </tr>
                      

                        @foreach($Surveycompletion_total as $total)
                        <tr>

                      

                        
                        <td> {{ $total->name}}</td>
<?php
$comp=$total->Completted_Surveys;
$inco=$total->Incomplete_Surveys;
if($comp=='')
{
  $comp=0;
}
if($inco=='')
{
  $inco=0;
}
?>

                        <td > <?php echo $comp ?></td>



                        <td > <?php echo $inco ?></td>
                        
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                        <th>User Name</th>
                        <th>Submited Surveys </th>
                        <th>Incomplete Surveys </th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

</div>





@endsection



 @section('javascript')

  



 
   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

 <!-- DATA TABLES -->
  <script type="text/javascript">

      $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
       var searchvar=$('#searcher').val();

       if($('#filterer').val()=='Survey')
       {
        var filter =  data[0]; 
      }
      else if($('#filterer').val()=='Term')
      {
        var filter =  data[1]; 
      }
      else if($('#filterer').val()=='County')
      {
        var filter =  data[5]; 
      }
      else if($('#filterer').val()=='All')
      {
        return true;
       
       


      }




        if ( filter==searchvar)

        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
  
    $('#searcher').val('');
    var table = $('#example1').DataTable();
document.getElementById("example1_filter").style.display = 'none';

$('#searcher').click(function()
{


if($('#filterer').val()=='All')
       {
         $('#searcher').val('');
          
         table.draw();
          document.getElementById("searcher").disabled = true;
      }
      else if($('#filterer').val()=='Survey')
       {
        
        table.draw();
         document.getElementById("searcher").disabled = false;
      }
      else if($('#filterer').val()=='Term')
       {
       
       
        table.draw();
         document.getElementById("searcher").disabled = false;
      }
      else if($('#filterer').val()=='County')
       {
         
       
        table.draw();
         document.getElementById("searcher").disabled = false;
      }

}



  );
    
    

    $('#filterer').click(function()
{


if($('#filterer').val()=='All')
       {
         $('#searcher').val('');
         $('.searcher0').hide();
        $('.searcher1').hide();
        $('.searcher2').hide();
         table.draw();
          document.getElementById("searcher").disabled = true;
      }
      else if($('#filterer').val()=='Survey')
       {
$('.searcher0').hide();
        $('.searcher1').hide();
        $('.searcher2').show();
        table.draw();
         document.getElementById("searcher").disabled = false;
      }
      else if($('#filterer').val()=='Term')
       {
         $('.searcher0').hide();
        $('.searcher1').show();
        $('.searcher2').hide();
        table.draw();
         document.getElementById("searcher").disabled = false;
      }
      else if($('#filterer').val()=='County')
       {
   $('.searcher0').show();
        $('.searcher1').hide();
        $('.searcher2').hide();
        table.draw();
         document.getElementById("searcher").disabled = false;
      }

}



  );  
     
    // Event listener 
    $('#searcher').keyup( function() {
        table.draw();
    } );
} );

    </script>

         
  @endsection

 