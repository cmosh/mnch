
@extends('surveytemp')

@section('content')
   
                 




    




				{!! Form::open(['url' => 'survey']) !!}

				<?php echo $Mel?>


				{!! Form::submit('Save',['class' => 'btn btn-primary form-control'])!!}

				{!! Form::close() !!}


                   
                      
                        
                       





   





@endsection