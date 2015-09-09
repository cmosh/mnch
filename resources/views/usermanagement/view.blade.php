@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />



   <link href="/bower_components/jq/jquery-ui.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="/bower_components/jq/jquery-ui.js"></script>
 

 

@endsection 

@section('content')
<div class="row">
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
                
                  <p style="font-size:16pt">Add Multiple Users</p> 
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
                  <h3 class="box-title">

                  Users
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th>Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                  
                        <th>Role</th>
                        <th>Action</th>
                        <th>Action</th>
                        <th>Action</th>
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($users as $user)
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
 <td>
 <form action="/usermanagement/editusers/{{$user->id}}">
    <input class="btn btn-primary form-control" type="submit" value="EDIT">
    </form>
    </td>
    <td>
 <form action="/usermanagement/status_change/{{$user->id}}">
 @if($user->status==0)
    <input style="color:green" class="btn btn-primary form-control" type="submit" value="ACTIVATE">
 @else   
    <input  style="color:red" class="btn btn-primary form-control" type="submit" value="DEACTIVATE">
 @endif
    </form>
    </td>


    <td>
 <form action="/usermanagement/reset/{{$user->id}}">
    <input class="btn btn-primary form-control" type="submit" value="RESET">
    </form>
    </td>
                     	 </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                         
                        <th>Role</th>
                        <th>Action</th>
                        <th>Action</th>
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
      $(function () {
       $('#example1').DataTable();
       
      });
    </script>

         
  @endsection
 