@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')
      <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />


@endsection 

@section('content')
  <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  Add Multiple Users

                  </h3>
                </div> 
                <div class="box-body"> 



                <div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p style="color:red">Confirm/Correct Details on the form below</p>

                </div><!-- /.box-body -->
              </div>




              <div class="box-body">
              <br>
              <br>
                            {!! Form::open(['url' => '/usermanagement/addusers_multi/store','id'=>'form-multiedit']) !!}

                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th >Name</th>
                        <th>County</th>
                         <th>Phone Number</th>
                         <th>ID Number</th>
                         <th>Email</th>
                         <th>Role</th>
                        
                       
                  
                       
                  
                      </tr>
                    </thead>
                    
                    <tbody>

@foreach($users as $key => $user)



<tr>
<td>
              <input  class="form-control" data-parsley-trigger="keyup" value="{{$user['name']}}" name="name{{$key}}" type="text" required/>

</td>
<td>            <select class="form-control select2" data-parsley-trigger="keyup" style="width: 100%;" name="county{{$key}}"  required> 
               <?php

               $counter=0;
               ?>
                       @foreach($counties as $county)
                        @if($county->Name==$user['county'])
                       <option value ="{{$county->Name}}" id ="{{$county->Name}}" selected>{{$county->Name}}</option>
                     $counter++;

                        @else
                                                 <option value ="{{$county->Name}}"" id ="{{$county->Name}}" >{{$county->Name}}</option>


                        @endif
                        @endforeach


                        </select>
         </td>


         <td>
         <input data-parsley-type="digits" data-parsley-trigger="keyup" value="{{$user['PhoneNumber']}}" data-parsley-length="[9, 9]"  class="form-control" name="PhoneNumber{{$key}}" type="text"  required/>

         </td>
        <td>
        <input data-parsley-type="digits" data-parsley-trigger="keyup" value="{{$user['IDNumber']}}" data-parsley-minlength="4" class="form-control" name="IDNumber{{$key}}" type="text" required/> 

        </td>
        <td>
        <input parsley-type="email" data-parsley-trigger="keyup" value="{{$user['email']}}" class="form-control" name="email{{$key}}" type="email" required />

        </td>
        <td>
        <?php $role=0;
          if($user['role']=='countyuser')
          {
            $role=0;
          }
          if($user['role']=='dataclerk')
          {
            $role=1;
          }
          if($user['role']=='programuser')
          {
            $role=2;
          }
          if($user['role']=='systemuser')
          {
            $role=3;
          }

        ?>
       
                {!! Form::select('role'.$key,['County User','Data Clerk','Program User', 'System User' ],$role,array('class'=>'form-control select2' ,'data-parsley-trigger'=>'keyup')) !!}

        </td>








</tr>



@endforeach




   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>
                         <th >Name</th>
                        <th>County</th>
                         <th>Phone Number</th>
                         <th>ID Number</th>
                         <th>Email</th>
                         <th>Role</th>
                        
               
                      </tr>
                    </tfoot>
                  </table>
                  {!! Form::submit('Submit',['class' => 'use-address btn btn-primary form-control']) !!}

{!! Form::close() !!}
                </div>


            


</div>
</div>




  @endsection


  @section('javascript')

 <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

       
             
        

      

        
      });



          
    </script>

    <script src="/bower_components/parsleyjs/dist/parsley.js" type="text/javascript"></script>

<script type="text/javascript">

  $('#form-multiedit').parsley();



 </script>






@endsection
 