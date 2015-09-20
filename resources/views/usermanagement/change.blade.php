@extends('template')


@section('pageinfo')

 
@endsection         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Change Password</font></div>
        <div class="panel-body">
        
   @if($error_message!='ok')


{!! Form::open(['url' => 'usermanagement/update/pass/'.Auth::user()->id]) !!}

<div class="box-body">
<center><span style="color:red">{{$error_message}}</span></center>
@foreach($errors->all() as $errors)

<li style="color:red">{{$errors}}</li>

@endforeach
</div>
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Old Password</label>

              <div class="col-md-6">
                   
                     
                     {!! Form::password('old_password',null,array('id'=>'oldpass','class'=>'form-control')) !!}

              </div>
            </div>
</div>
          
   
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">New Password</label>
              <div class="col-md-6">
                {!! Form::password('new_password', null,array('id'=>'newpass','class'=>'form-control')) !!}

              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Confrirm New Password</label>
              <div class="col-md-6">
                {!! Form::password('new_password_confirmation',null,array('id'=>'newpasscon','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
            {!! Form::submit('Change Password',['class' => 'use-address btn btn-primary form-control']) !!}
         </div>
            </div>
            </div>
            
             {!! Form::close() !!}


             @else



              <div class="small-box bg-green">
                <div class="inner">
                  <h3><sup style="font-size: 20px"></sup></h3>
                  <p>Password Changed Successfully!</p>
                </div>
                <div class="icon">
                 
                </div>
              
              </div>






             @endif
        </div>
      </div>
    </div>
  </div>

        
  


 @endsection


@section('javascript')



<script type="text/javascript">



 </script>




@endsection