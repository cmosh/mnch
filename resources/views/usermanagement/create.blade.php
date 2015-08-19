@extends('template')


@section('pageinfo')

 
         
 

@section('content')

<div class="box">
<div class="box-body">


{!! Form::open(['url' => 'usermanagement/store']) !!}


  <div class="form-group">
  <div class="col-lg-2">
 
  {!! Form::text('name',null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class="form-group">
  <div class="col-lg-2">
 
   {!! Form::text('email',null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class="form-group">
  <div class="col-lg-2">
 
   {!! Form::text('county',null,['class' => 'form-control']) !!}
  </div>
  </div>


  <div class="form-group">
  <div class="col-lg-2">
 
   {!! Form::text('phone',null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class="form-group">
  <div class="col-lg-2">
 
   {!! Form::text('idnum',null,['class' => 'form-control']) !!}
  </div>
  </div>
  <div class="form-group">
  <div class="col-lg-2">
 
   {!! Form::text('role',null,['class' => 'form-control']) !!}
  </div>
  </div>
   <br>
  <br>


    
  <br>
  <br>

  
  {!! Form::submit('Add User',['class' => 'btn btn-success form-control btn-lg']) !!}
  </div>
{!! Form::close() !!}
</div>
</div>


 @endsection