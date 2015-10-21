@extends('template')


@section('pageinfo')

 
@endsection         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Edit User</font></div>
        <div class="panel-body">
        
   <div class="box-body">
           <div class="col-md-3" style="float:right">

         </div>
   </div>

   {!! Form::open(['url' => 'usermanagement/update/'.$user[0]->id,'id'=>'form-edit']) !!}

<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
              <input placeholder="Enter Name" id="name" class="form-control" value="{{$user[0]->name}}" name="name" type="text" required/>
              </div>
            </div>
</div>
          <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">County</label>
              <div class="col-md-6">

              <?php 
                $x=array();
                foreach ($counties as $county) {
                 $x[]=$county->Name;
                  
                }
   foreach ($x as $county)
   {
      if($county==$user[0]->county)
                  {
                      $county_index=key($x)-1;

                  }
}
          
                  


              ?>



                {!! Form::select('county',$x, $county_index ,array('id'=>'county','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">

         <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>
              <div class="col-md-6">
<input placeholder="Enter Mobile Number ( 07xxxxxxxx )" data-parsley-type="digits" id="phone" value="{{$user[0]->PhoneNumber}}" data-parsley-length="[10, 10]"  class="form-control" name="PhoneNumber" type="text"  required/>

              </div>
            </div>
            </div>
   
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
<input placeholder="Enter ID Number" data-parsley-type="digits" value="{{$user[0]->IDNumber}}" data-parsley-minlength="4" id="IDNumber" class="form-control" name="idnum" type="text" required/> 
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
<input placeholder="Enter Email address ( example@site.com )"  id="email" parsley-type="email" value="{{$user[0]->email}}" class="form-control" name="email" type="email" required />
              </div>
            </div>
            </div>
            <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                {!! Form::select('roles',['County User','Data Clerk','Program User', 'System User' ], $user[0]->role ,array('id'=>'role','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
        
            <div class="box-body">
         <div class="form-group">
              <div class="col-md-6">
            
            {!! Form::submit('Save Changes',['class' => 'use-address btn btn-primary form-control']) !!}
         </div>
            
             {!! Form::close() !!}


           <div class="col-md-6" >
            
<form action="/usermanagement/viewusers">
    <input class="btn btn-primary form-control"  value="Cancel and go back"></form>         </div>
   </div>
   </div>
            </div>
        </div>
      </div>
    </div>
  </div>

        
  


 @endsection


@section('javascript')

<script src="/bower_components/parsleyjs/dist/parsley.js" type="text/javascript"></script>


<script type="text/javascript">

  $('#form-edit').parsley();



 </script>






@endsection