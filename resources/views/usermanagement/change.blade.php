@extends('template')


@section('pageinfo')

 
@endsection   



@section('cdns')

  <!-- Select2 -->
    <link href ="/bower_components/parsleyjs/src/parsley.css"  rel="stylesheet" type="text/css" />  
    

@endsection       
 

@section('content')



          
<div class="row">
    <div class="col-md-6 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Change Password</font></div>
        <div class="panel-body">





        
   @if($error_message!='ok')




<div class="box-body">
<center><span style="color:red">{{$error_message}}</span></center>
@foreach($errors->all() as $errors)

<li style="color:red">{{$errors}}</li>




@endforeach


<center>
   {!! Form::open(['url' => 'usermanagement/update/pass/'.Auth::user()->id,'id'=>'demo-form']) !!}     

 <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
<label for="password">Old Password :</label>
<br>
<input type="password" id="password"  name="old_password" data-parsley-trigger="keyup" data-parsley-minlength="6" required/>
</div></div></div>

 <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
<label for="new_password">New Password :</label>
<br>
<input type="password" id="new_password" name="new_password" data-parsley-trigger="keyup" data-parsley-minlength="6" required/>
  </div></div></div>  

 <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
<label for="new_password_confirmation">Confirm New Password :</label>
<br>
<input type="password" id="new_password_confirmation" name="new_password_confirmation" data-parsley-equalto="#new_password"  data-parsley-trigger="keyup" data-parsley-minlength="6" required/>
</div>
</div>
</div>




 <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
              <input type="submit" value="CHANGE PASSWORD" class="use-address btn btn-primary form-control">
         </div>
            </div>
            </div>
            
             {!! Form::close() !!}


</center>

           

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

<script src="/bower_components/parsleyjs/dist/parsley.js" type="text/javascript"></script>


<script type="text/javascript">

  $('#demo-form').parsley();



 </script>




@endsection