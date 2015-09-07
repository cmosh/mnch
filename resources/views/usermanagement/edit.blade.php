@extends('template')


@section('pageinfo')

 
         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Edit User</font></div>
        <div class="panel-body">
        
   
{!! Form::open(['url' => 'usermanagement/update']) !!}
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                     {!! Form::text('name',$user[0]->name,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
</div>
          <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">County</label>
              <div class="col-md-6">
                {!! Form::text('county',$user[0]->county,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">

         <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>
              <div class="col-md-6">
                {!! Form::text('phone', $user[0]->PhoneNumber,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
                {!! Form::text('idnum', $user[0]->IDNumber,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                {!! Form::email('email',  $user[0]->email,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                {!! Form::select('roles',['County User','Data Clerk','Program User', 'System User' ], $user[0]->role ,['countyuser','dataclerk','programuser','systemuser'],array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
         <div class="form-group">
              <div class="col-md-12">
            
            {!! Form::submit('Save Changes',['class' => 'use-address btn btn-primary form-control']) !!}
         </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

         {!! Form::close() !!}
  


 @endsection


@section('js')
@endsection