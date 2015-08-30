@extends('template')


@section('pageinfo')

 
         
  @endsection




@section('content')

  
                




<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  Progress Review
                  </h3>
                </div><!-- /.box-header -->
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
                   <b style="padding-left:10px">Search:</b>
            <input id="searcher" name="searcher" type="text">
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
                         <th style="display:none">County</th>
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
                        <td  style="display:none"><span>{{$user->County}}</span></td>
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
                         <th style="display:none">County</th>
                         <th>Entered by</th>
                        

                        <th>Action</th>
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
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
        var filter ='';
        $('#searcher').val('');
       
       


      }




        if ( filter==searchvar)

        {
            return true;
        }
        return false;
    }
);
 
$(document).ready(function() {
  
 
    var table = $('#example1').DataTable();
document.getElementById("example1_filter").style.display = 'none';

$('#filterer').click(function()
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
    
      
     
    // Event listener 
    $('#searcher').keyup( function() {
        table.draw();
    } );
} );

    </script>

         
  @endsection

 