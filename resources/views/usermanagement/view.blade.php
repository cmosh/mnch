@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />



   <link href="/bower_components/jq/jquery-ui.css" rel="stylesheet" />

  
<script src="/bower_components/jq/jquery-ui.js"></script>
 

 

@endsection 

@section('content')

 {!! Form::open() !!}     



                         {!! Form::close() !!}
<div id="row_addusers" class="row">
<div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  
                  <p style="font-size:16pt">Add User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="/usermanagement/addusers" class="small-box-footer">Add <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                
                  <p id="tester" style="font-size:16pt">Add Multiple Users</p> 
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>

                <a href="/usermanagement/addusers_multi" class="small-box-footer">Add<i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

</div>



<div class="box box-primary">
                <div class="box-header">
                <a style="float:right" href="/usermanagement/export/{{$location}}/users/all/all">Download excel</a>
                <br>
               <a style="float:right" id="copy-button" data-clipboard-text="{{$users}}">Copy to Clipboard</a>

               <br>
               <button style="float:right" id="print-button" >Print</button>
           





              
                  <h3 class="box-title">
 
<div style="text-align:center"  id="notification" class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>  <i class="icon fa fa-check"></i> </h4>
                   <p id="notificationtext" ></p>
                  </div>
                 

                  Users
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">


                <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">Active Users</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_2" data-toggle="tab">Inactive Users</a></li>
                  
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                   <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th >Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                  
                        <th>Role</th>
                        <th style="display:none">created at</th>
                        <th  class= "hideprint">Action</th>
                        <th  class= "hideprint"></th>
                        <th  class= "hideprint"></th>
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($users as $user)
                        @if($user->status==1)
                        <tr>
                        <td > {{ $user->name}}</td>
                        <td >{{ $user->email}}  </td>
                        <td> {{ $user->county}}</td>
                        <td> {{ $user->PhoneNumber}}</td>
                        
                        <td> 

                      <?php 
                      if($user->role===0)
                      {
                        echo "county user";
                      }
                       if($user->role==1)
                      {
                        echo "data clerk";
                      }
                       if($user->role==2)
                      {
                        echo "program user";
                      }
                       if($user->role==3)
                      {
                        echo "system user";
                      }
                       if($user->role==='')
                      {
                        echo "Unknown";
                      }



                      ?>


                        </td>
                      <td  style="display:none">
                        
                        {{ $user->created_at}}  

                      </td>
 <td class="hideprint">
 <form action="/usermanagement/editusers/{{$user->id}}">
    <input class="btn btn-primary form-control " type="submit" value="EDIT">
    </form>
    </td>
    <td class= "hideprint">
 
 @if($user->status==0)
    <input id="activate{{$user->id}}" style="color:green;background-color:white" class="btn btn-primary form-control" type="submit" value="ACTIVATE">
 @else   
    <input id="deactivate{{$user->id}}" style="color:red;background-color:white" class="btn btn-primary form-control" type="submit" value="DEACTIVATE">
 @endif
   
    </td>


    <td class="hideprint">
 
    <input id="reset{{$user->id}}" type="button" class="btn btn-primary form-control" value="RESET PASSWORD">
   
    </td>
                       </tr>
                       @endif
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                         
                        <th>Role</th>
                        <th style="display:none">created at</th>
                        <th  class= "hideprint">Action</th>
                        <th  class= "hideprint"></th>
                        <th  class= "hideprint"></th>
                        
               
                      </tr>
                    </tfoot>
                  </table>






                  </div>



                   <div class="tab-pane" id="tab_2">

                    <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th >Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                  
                        <th>Role</th>
                        <th style="display:none">created at</th>
                        <th  class= "hideprint">Action</th>
                        <th  class= "hideprint"></th>
                        <th  class= "hideprint"></th>
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($users as $user)
                        @if($user->status==0)
                        <tr>
                        <td > {{ $user->name}}</td>
                        <td >{{ $user->email}}  </td>
                        <td> {{ $user->county}}</td>
                        <td> {{ $user->PhoneNumber}}</td>
                        
                        <td> 

                      <?php 
                      if($user->role===0)
                      {
                        echo "county user";
                      }
                       if($user->role==1)
                      {
                        echo "data clerk";
                      }
                       if($user->role==2)
                      {
                        echo "program user";
                      }
                       if($user->role==3)
                      {
                        echo "system user";
                      }
                       if($user->role==='')
                      {
                        echo "Unknown";
                      }



                      ?>


                        </td>
                      <td  style="display:none">
                        
                        {{ $user->created_at}}  

                      </td>
 <td class="hideprint">
 <form action="/usermanagement/editusers/{{$user->id}}">
    <input class="btn btn-primary form-control " type="submit" value="EDIT">
    </form>
    </td>
    <td class= "hideprint">
 
 @if($user->status==0)
    <input id="activate{{$user->id}}" style="color:green;background-color:white" class="btn btn-primary form-control" type="submit" value="ACTIVATE">
 @else   
    <input id="deactivate{{$user->id}}" style="color:red;background-color:white" class="btn btn-primary form-control" type="submit" value="DEACTIVATE">
 @endif
  
    </td>


    <td class="hideprint">
 
    <input id="reset{{$user->id}}" type="button" class="btn btn-primary form-control"  value="RESET PASSWORD">
  
    </td>
                       </tr>
                       @endif
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                         
                        <th>Role</th>
                        <th style="display:none">created at</th>
                        <th  class= "hideprint">Action</th>
                        <th  class= "hideprint"></th>
                        <th  class= "hideprint"></th>
                        
               
                      </tr>
                    </tfoot>
                  </table>



                  
                  </div>


                  </div>
                  </div>
               
                 
                </div><!-- /.box-body -->
              </div>
              <!-- test -->



             
       

    
    



    <!-- test-end -->



@endsection


 @section('javascript')

  



 
   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
      <script src="/bower_components/zeroclipboard/dist/ZeroClipboard.min.js" type="text/javascript"></script>
   
 <!-- DATA TABLES -->
  <script type="text/javascript">
  $("#notification").hide();

      $(function () {
               var table=$('#example1').DataTable(

        {"aaSorting": [[ 5, "desc" ]]});
       
    


     var table2= $('#example2').DataTable(

        {"aaSorting": [[ 5, "desc" ]]
      });
      
       
      
      });





      $(document).ready(function() {
       

            // Zero Clipboard initialization
            var client = new ZeroClipboard($('#copy-button'));

         
        });
      $('#print-button').click(function()

      {
        $('#row_addusers').hide();
        $('.hideprint').hide();

          window.print();

      $('#row_addusers').show();
      $('.hideprint').show();          

      });




       @foreach($users as $user)

 $('#activate{{$user->id}}').click(function()
 {
  if (confirm('Are you sure you want to activate {{$user->name}} ?')) {
  

   function ajax3() {
 var data = {
          'id':"{{$user->id}}",
         '_token': $('input[name=_token]').val()
        
    };


 
   $.ajax({
       url: '/usermanagement/status_change',
      type: "post",
       data: data,
           success: function(data){   
             location.reload();
      $("#notification").show();
document.getElementById("notificationtext").innerHTML = "{{$user->name}} has been activated ";
$('html,body').scrollTop(0);
 
$("#notification").delay(2000).show(0, function() {
    $("#notification").hide();
    

});
}
 });
 }


 ajax3();
 } else {
    // Do nothing!
}
});

  $('#deactivate{{$user->id}}').click(function()
 {

  if (confirm('Are you sure you want to Deactivate {{$user->name}} ?')) {
  

   function ajax2() {
 var data = {
          'id':"{{$user->id}}",
         '_token': $('input[name=_token]').val()
        
    };


 
   $.ajax({
       url: '/usermanagement/status_change',
      type: "post",
       data: data,
           success: function(data){
         location.reload();
      $("#notification").show();
document.getElementById("notificationtext").innerHTML = "{{$user->name}} has been deactivated ";
$('html,body').scrollTop(0);
 
$("#notification").delay(2000).show(0, function() {
    $("#notification").hide();

});
}
 });
 }


 ajax2();
 } else {
    // Do nothing!
}






});

   $('#reset{{$user->id}}').click(function check()
{
  if (confirm('Are you sure you want to reset password for {{$user->name}} ?')) {
  

   function ajax() {
 var data = {
          'id':"{{$user->id}}",
         '_token': $('input[name=_token]').val()
        
    };


 
   $.ajax({
       url: '/usermanagement/reset',
      type: "post",
       data: data,
           success: function(data){

         
      $("#notification").show();
document.getElementById("notificationtext").innerHTML = "Paswword has been reset for {{$user->name}} ";
$('html,body').scrollTop(0);
$("#notification").delay(3000).show(0, function() {
    $("#notification").hide();
});
}
 });
 }


 ajax();
 } else {
    // Do nothing!
}

}


 ); 
  




       @endforeach


      
    </script>

         
  @endsection
 