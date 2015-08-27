@extends('template')


@section('pageinfo')

 
         
  @endsection




@section('content')

  
                




<div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  User Monitoring
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        <th>User</th>
                        <th>Survey</th>
                         <th>Facility Name</th>
                         <th>Date</th>
                        <th>Status</th>
                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($user_monitor as $user)
                        <tr>
                        <td class="rr"> {{ $user->name}}</td>
                        <td> {{ $user->Survey}}</td>
                        <td class="nr"><span>{{ $user->FacilityName}}</span>  </td>
                        <?php

                          $date= date_create($user->Date);
                          $dateformated=date_format($date,'d F Y');

                         ?>
                        <td><span><?php echo $dateformated?> </span>  </td>
                        <td> {{ $user->Status}}</td>
                        
                       
                     	 </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        <th>User</th>
                        <th>Survey</th>
                         <th>Facility Name</th>
                         <th>Date</th>
                        <th>Status</th>
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div>
s



@endsection

 