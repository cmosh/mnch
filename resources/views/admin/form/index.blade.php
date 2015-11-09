@extends('template')

@section('content')
	
	

<div class="box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Edit or create surveys</h4>
                </div>
                <div class="box-body">
                  <!-- the events -->
                

                  @foreach($Surveys as $Survey)

                   <a href="/admin/surveys/{{$Survey->surveyID}}"  role="button">
              <span>

	 <button class="btn btn-block btn-info">{{$Survey->Name}} {{$Survey->Version}}</button>

	 </span>  
          </a> 
	@endforeach
                
             <button class="btn btn-block btn-success">Add Survey</button>     
                  
                </div><!-- /.box-body -->
              </div>
 



@endsection




@section('js')


    
   
@endsection