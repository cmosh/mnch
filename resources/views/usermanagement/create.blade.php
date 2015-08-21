@extends('template')


@section('pageinfo')

 
         
 

@section('content')

<div class='box'>
<div class='box-body'>



{!! Form::open(['url' => 'usermanagement/store']) !!}


@foreach($counts as $count)





  <div class='form-group'>
  <div class='col-lg-2'>
 
  {!! Form::text('name'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class='form-group'>
  <div class='col-lg-2'>
 
   {!! Form::text('email'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class='form-group'>
  <div class='col-lg-2'>
 
   {!! Form::text('county'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>


  <div class='form-group'>
  <div class='col-lg-2'>
 
   {!! Form::text('phone'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>

  <div class='form-group'>
  <div class='col-lg-2'>
 
   {!! Form::text('idnum'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>
  <div class='form-group'>
  <div class='col-lg-2'>
 
   {!! Form::text('role'.$count,null,['class' => 'form-control']) !!}
  </div>
  </div>
   <br>
  <br>

 
   
@endforeach
  
  {!! Form::submit('Add User',['class' => 'btn btn-success form-control btn-lg']) !!}
  </div>
{!! Form::close() !!}
</div>
</div>


 @endsection