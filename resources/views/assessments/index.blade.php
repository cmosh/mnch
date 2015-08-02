@extends('template')


@section('pageinfo')

 <h1>

      Start Assessment:

            <small></small>
          </h1>

         
  @endsection

  @section('cdns')
 <!-- DATA TABLES -->
   
  @endsection

@section('content')


<div class="col-md-12">
              <div class="box box-default">
                <div class="box-header with-border">
                 <h3 class="box-title">Surveys</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                   @foreach ($Surveys as $Survey)
            <?php $loc = substr ($Survey->surveyID, 0,2) ?>
              
              @if ($loc == 'CH')
                    <div class="small-box bg-red">
              @elseif ($loc == 'MN')
    <div class="small-box bg-yellow">
@else
    <div class="small-box bg-green">
@endif
             
                <div class="inner">
                  <h2>{{$Survey->Name}} Survey</h2>
                  <p>Runtime: {{$Survey->Runtime}}<br>Verion {{$Survey->Version}} </p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="assessments/{{$Survey->surveyID}}" class="small-box-footer">Click here to begin this assessment <i class="fa fa-arrow-circle-right"></i></a>
              </div>
          
              @endforeach
                 
                 
                  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

</div>




            

           
           
         
               



@endsection

  @section('javascript')


  
  @endsection