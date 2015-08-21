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

  <div class="box box-danger">

                <div class="box-header with-border">
                  <h3 class="box-title">Add Users</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               
                <div class="form-horizontal">

                  <div class="box-body">
                
            <p>Enter how many users you want to add.</p>
                     <div class="form-group">
                      <label for="date" class="col-sm-2 control-label"></label>
                      
                       <input type="number" name="num" id="num" value="1" />
                      
                    </div>

   
                   


                                       
                  </div><!-- /.box-body -->
                  <div class="box-footer">

                    <button  id="id_add" class="btn btn-danger form-control"> Add </button>

                  </div><!-- /.box-footer -->

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
                         <th>ID Number</th>
                        <th>Role</th>
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($users as $user)
                        <tr>
                        <td class="rr"> {{ $user->name}}</td>
                        <td class="nr"><span>{{ $user->email}}</span>  </td>
                        <td> {{ $user->county}}</td>
                        <td> {{ $user->PhoneNumber}}</td>
                        <td> {{ $user->IDNumber}}</td>
                        <td> {{ $user->role}}</td>
                     	 </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                         <th>Email</th>
                        <th>County</th>
                        <th>Phone Number</th>
                         <th>ID Number</th>
                        <th>Role</th>
                        
               
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>



 <script type="text/javascript">
$('#id_add').click(function() {

 
  var linki = '/usermanagement/addusers/' + $('#num').val() ;
  //alert(linki);
   $(location).attr('href', linki);
});
 </script>
@endsection

 