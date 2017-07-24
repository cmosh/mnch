@extends('template')
@section('title')
 <title>MNCH | {{$title}}</title>
@endsection



@section('content')

 {!! Form::open() !!}     



                         {!! Form::close() !!}
<div id="row_addusers" class="row">
<div class="col-xs-6">
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


            <div class="col-xs-6">
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
           





              
                  



 <div id="loader" style="display:none; width:80%;"  class="center-block alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <table>
  <tr >
  <td  width="100%">
  <h3 id="notificationstart" ></h3>
  <p>Please Wait</p>
  </td  class="col-md-3">
  <td width="25%">
  <i class="fa fa-refresh fa-spin fa-4x pullright"></i>
  </td>
  </tr>
    </table>   
                  
                  </div>

                 
<div  id="notification" style="display:none; width:80%;" class="center-block alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <table>
  <tr >
  <td  width="100%">
  <h3 id="notificationtext"></h3>
  <p>Success</p>
  </td  class="col-md-3">
  <td width="25%">
    <i class="fa fa-check fa-4x pullright"></i>  
  </td>
  </tr>
    </table>                      
                  </div>

                   <h3 class="box-title">
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

                 


                   <table id="example1" class="table table-bordered">
                   
         
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

    


                      @if($user->role==0)
                      
                        County User
                      
                      @elseif($user->role==1)

                        Data Clerk
                      @elseif($user->role==2)

                      Program User

                      @elseif($user->role==3)

                      System User

                      @elseif($user->role=='')
                      Unknown
                      @endif


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
                      @if($user->role==0)
                      
                        County User
                      
                      @elseif($user->role==1)

                        Data Clerk
                      @elseif($user->role==2)

                      Program User

                      @elseif($user->role==3)

                      System User

                      @elseif($user->role=='')
                      Unknown
                      @endif






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

  



 
  
    
   
 <!-- DATA TABLES -->
  <script type="text/javascript">


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
  $('html,body').scrollTop(0);
  document.getElementById("notificationstart").innerHTML = "Activating {{$user->name}}";
  $('#loader').show();

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
              $('#loader').hide();

      $("#notification").show();
document.getElementById("notificationtext").innerHTML = "{{$user->name}} has been activated ";

 
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
    document.getElementById("notificationstart").innerHTML = "Deactivating {{$user->name}}";
     $('#loader').show();
  

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
          $('#loader').hide();
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
    document.getElementById("notificationstart").innerHTML = "Reseting {{$user->name}}'s password";
     $('#loader').show();
  

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

          $('#loader').hide();
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
 