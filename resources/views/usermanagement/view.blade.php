@extends('template')


@section('pageinfo')

 
         
  @endsection

@section('content')



<div class="box">
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

@endsection