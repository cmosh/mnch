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
{!! Form::open(['url' => 'usermanagement/update/'.$user[0]->id]) !!}
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>

              <div class="col-md-6">
                     {!! Form::text('name',$user[0]->name,array('id'=>'name','class'=>'form-control')) !!}
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
                {!! Form::text('phone', $user[0]->PhoneNumber,array('id'=>'phone','class'=>'form-control')) !!} <span style="color:blue"> ( 0700100100 )</span>
              </div>
            </div>
            </div>
   
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
                {!! Form::text('idnum', $user[0]->IDNumber,array('id'=>'idnum','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                {!! Form::email('email',  $user[0]->email,array('id'=>'email','class'=>'form-control')) !!}<span style="color:blue"> ( example@site.com )</span>
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
    <input class="btn btn-primary form-control" type="submit" value="Cancel and go back"></form>         </div>
   </div>
   </div>
            </div>
        </div>
      </div>
    </div>
  </div>

        
  


 @endsection


@section('javascript')






@endsection