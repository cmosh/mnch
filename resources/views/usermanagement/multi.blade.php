@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')


@endsection 

@section('content')
  <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  Add Multiple Users

                  </h3>
                </div> 
                <div class="box-body"> 



                <div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p>Upload an Excel file with the user details, using the format below:</p> 

                </div><!-- /.box-body -->
              </div>


              <center>
              <div class="col-xs-12">
                <img src="/img/excelformat.jpg">
              </div> 
              </center>   
              <br>

<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <div class="secure"><b style="color:red">Upload Excel File</b></div>
        {!! Form::open(array('url'=>'usermanagement/multi_upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          {!! Form::file('image') !!}
    <p class="errors">{!!$errors->first('image')!!}</p>
  @if(Session::has('error'))
  <p class="errors">{!! Session::get('error') !!}</p>
  @endif
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'use-address btn btn-primary form-control')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
</div>




  @endsection
 