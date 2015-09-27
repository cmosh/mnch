@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')


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
                      
                      

                        
                        <?php

                        for($i=0;$i<sizeof($users);$i++)
                        {

echo "<tr><td>".Form::text('name'.$i,$users[$i]['name'],array('id'=>'','class'=>'form-control'))."</td>";
$counter=0; 
?>
  <td>            <select class="form-control" style="width: 100%;" name=<?php echo "county".$i?>  required> 
               
                       @foreach($counties as $county)
                        @if($county->Name==$users[$i]['county'])
                       <option value =<?php echo $counter?> id ="{{$county->Name}}" selected>{{$county->Name}}</option>
                     <?php $counter++;  ?>

                        @else
                                                 <option value =<?php echo $counter?> id ="{{$county->Name}}" >{{$county->Name}}</option>


                        @endif
                        @endforeach


                        </select>
                        </td>
<?php
                        
                       echo" 
                       <td>".Form::text('phone'.$i,$users[$i]['PhoneNumber'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>".Form::text('idnum'.$i,$users[$i]['IDNumber'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>".Form::email('email'.$i,$users[$i]['email'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>
                        


                        <select class='form-control select2'  style='width: 100%; name='role'";echo$i;echo" id='role' required>";
               

               echo "<option value='programuser' "; if($users[$i]['role']=='countyuser'){echo 'selected';} echo">County User</option>
 <option value='dataclerk' "; if($users[$i]['role']=='dataclerk'){echo 'selected'; }  echo "Data Clerk</option>
<option value='programuser' "; if($users[$i]['role']=='programuser'){echo 'selected'; }  echo "Program User</option>               
<option value='countyuser' "; if($users[$i]['role']=='countyuser'){echo 'selected'; }  echo "System User</option>
                        </td>

                      
                       </tr>";

                     }

                        
?>




   

                    

                     
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
              {!! Form::open(['url' => '/usermanagement/addusers_multi/store']) !!}

{!! Form::close() !!}
                </div><!--


            


</div>
</div>




  @endsection
 