@extends('template')


@section('pageinfo')

@endsection 
         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Add Single User</font></div>
        <div class="panel-body">
          
      <div class="box-body">
           <div class="col-md-3" style="float:right">
            
            <button  id="clear" class="btn btn-primary form-control">Clear Form</button>
         </div>
   </div>
 {!! Form::open(['url' => 'usermanagement/store']) !!}
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                     {!! Form::text('name',null,array('id'=>'name','class'=>'form-control')) !!}
              </div>
            </div>
            </div>

           

<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">County</label>
              <div class="col-md-6">

              <?php 
                $x=array();
                foreach ($counties as $county)
                {
                 $x[]=$county->Name;
                }

              ?>



                {!! Form::select('county',$x, null ,array('id'=>'county','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
<div class="box-body">
         <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>
              <div class="col-md-6">
                {!! Form::text('phone',null,array('id'=>'phone','class'=>'form-control')) !!}<span style="color:red"> e.g 0700100100</span>
              </div>
            </div>
            </div>
            <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
                {!! Form::text('idnum',null,array('id'=>'idnum','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                {!! Form::email('email',null,array('id'=>'email','class'=>'form-control')) !!}
              </div>
            </div>
</div>
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                {!! Form::select('roles',['County User','Data Clerk','Program User', 'System User' ],0,array('id'=>'role','class'=>'form-control','width'=>'100%')) !!}
              </div>
            </div>
            </div>
            <br>
            <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
            
            {!! Form::submit('Add User',['class' => 'use-address btn btn-primary form-control']) !!}
         </div>
            </div>
            </div>
            
            {!! Form::close() !!}


            
         
         
             
            </div>
            </div>
            </div>
        </div>

     
   


 @endsection


@section('javascript')



<script type="text/javascript">

  $('#clear').click(function()
  {
      $('#name').val('');
      $('#county').val('');
      $('#phone').val('');
      $('#idnum').val('');
      $('#email').val('');
      $('#role').val('');
    
  }
  );


 </script>
    @endsection