@extends('dashboard')


@section('pageinfo')

 <h1>

      Start Assessment:

            <small></small>
          </h1>

         
  @endsection

@section('content')


<div class='box'>
<div class='box-body'>
{!! Form::open(['url' => 'start_assessment']) !!}
<div class="form-group">
	{!! Form::label('Assessment_ID','Assessment_ID:') !!}
	{!! Form::text('Assessment_ID',null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('Facility_ID','Facility_ID:') !!}
	{!! Form::text('Facility_ID',null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	{!! Form::label('Time','Time:') !!}
	{!! Form::text('Time',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Assessor','Assessor:') !!}
	{!! Form::text('Assessor',null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
	{!! Form::label('Date','Date') !!}
	{!! Form::text('Date',null,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
	
	{!! Form::submit('Start',['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
</div>
</div>

@endsection