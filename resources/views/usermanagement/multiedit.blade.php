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
                 <p>Confirm/Correct Details according to the format below</p>

                </div><!-- /.box-body -->
              </div>


              <center>
              <div class="col-xs-12">
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
                      
                      

                        
                       

                        <tr>
                        <td >Username 1</td>
                        <td >Nairobi</td>
                        <td>700100101</td>
                        <td>34342121</td>
                        <td>email1@site.com</td>
                        <td>countyuser</td>

                      
                       </tr>

                       <tr>
                        <td >Username 2</td>
                        <td >Machakos</td>
                        <td>700100102</td>
                        <td>34342122</td>
                        <td>email2@site.com</td>
                        <td>dataclerk</td>

                      
                       </tr>

                       <tr>
                        <td >Username 3</td>
                        <td >Nakuru</td>
                        <td>700100103</td>
                        <td>34342123</td>
                        <td>email3@site.com</td>
                        <td>programuser</td>

                      
                       </tr>


                       <tr>
                        <td >Username 4</td>
                        <td >Samburu</td>
                        <td>700100104</td>
                        <td>34342124</td>
                        <td>email4@site.com</td>
                        <td>systemuser</td>

                      
                       </tr>

                     
                         





   

                    

                     
                    </tbody>
                    
                  </table>
              </div> 
              </center>   
              <br>


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



                        echo "<tr>
                        <td >  ".Form::text('name'.$i,$users[$i]['name'],array('id'=>'','class'=>'form-control'))."</td>
                        <td >".Form::text('county'.$i,$users[$i]['county'],array('id'=>'','class'=>'form-control'))." </td>
                       <td>".Form::text('phone'.$i,$users[$i]['PhoneNumber'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>".Form::text('idnum'.$i,$users[$i]['IDNumber'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>".Form::email('email'.$i,$users[$i]['email'],array('id'=>'','class'=>'form-control'))."</td>
                        <td>". Form::text('role'.$i,$users[$i]['role'],array('id'=>'','class'=>'form-control'))."</td>

                      
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
                  {!! Form::submit('Add Users',['class' => 'use-address btn btn-primary form-control']) !!}
              {!! Form::open(['url' => '/usermanagement/addusers_multi/store']) !!}

{!! Form::close() !!}
                </div><!--


            


</div>
</div>




  @endsection
 