@extends('template')


@section('pageinfo')

 
         
 

@section('content')

<div class='box'>
<div class='box-body'>


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

{!! Form::open(['url' => 'usermanagement/store']) !!}


@foreach($counts as $count)
<tr>



<td>
  <div class='form-group'>
 
 
  {!! Form::text('name'.$count,null,['class' => 'form-control']) !!}
  </div>
  
</td>

<td>
  <div class='form-group'>
  
 
   {!! Form::text('email'.$count,null,['class' => 'form-control']) !!}

  </div>
</td>
<td>
  <div class='form-group'>
  
 
   {!! Form::text('county'.$count,null,['class' => 'form-control']) !!}
  
  </div>
</td>
<td>

  <div class='form-group'>

 
   {!! Form::text('phone'.$count,null,['class' => 'form-control']) !!}
  
  </div>
</td>
<td>
  <div class='form-group'>
 
 
   {!! Form::text('idnum'.$count,null,['class' => 'form-control']) !!}
  </div>
  
 </td>
 <td>
  <div class='form-group'>

 
   {!! Form::text('role'.$count,null,['class' => 'form-control']) !!}
  </div>
  
  </td>
  </tr>
  

 
   
@endforeach
</tbody>
</table>
  
  {!! Form::submit('Add Users',['class' => 'btn btn-success form-control btn-lg']) !!}
  </div>
{!! Form::close() !!}
</div>
</div>


 @endsection