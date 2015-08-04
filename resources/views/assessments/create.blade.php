@extends('template')


@section('pageinfo')

 <h1>

      Start Assessment:

            <small></small>
          </h1>

         
  @endsection

  @section('cdns')
 <!-- DATA TABLES -->
    <link href="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  @endsection

@section('content')

 <div class="row">
 <div class ="col-lg-12">
<div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p>Search then <u>click select <u> to choose</p> 
                </div><!-- /.box-body -->
              </div>
</div>
      </div>  


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">@if($loc=='IM')
                  Participants
                  @else
                  Facilities
                  @endif


                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                      @if($loc=='IM')
                        <th>Name</th>
                        <th>Facility</th>
                         <th>Facility Code</th>
                        <th>Training Site</th>
                        <th>ID Number</th>
                        <th>Action</th>
                        
                  @else
                  <th>Name</th>
                        <th>Code</th>
                        <th>County</th>
                        <th>Type</th>
                        <th>Owner</th>
                        <th>Action</th>
                  @endif
                       
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      @if($loc!='IM')

                        @foreach($All as $al)
                        <tr>
                        <td class="rr"> {{ $al->FacilityName}}</td>
                        <td class="nr"><span>{{ $al->FacilityCode}}</span>  </td>
                        <td> {{ $al->County}}</td>
                        <td> {{ $al->Type}}</td>
                        <td> {{ $al->Owner}}</td>
                        <td> <button type="button" class="use-address btn btn-primary form-control" /> Select </button> </td>
                      </tr>

                         @endforeach
                  @else

                           @foreach($All as $al)
                        <tr>
                        <td class="rr"> {{ $al->Name_of_Participant}}</td>
                        <td><span>{{ $al->FacilityName}}</span>  </td>
                         <td class="nr"><span>{{ $al->mfl_code}}</span>  </td>
                        <td> {{ $al->training_site}}</td>
                        <td> {{ $al->id_Number}}</td>

                       
                        <td> <button type="button" class="use-address btn btn-primary form-control" /> Select </button> </td>
                      </tr>

                         @endforeach
                  @endif


                     
                    </tbody>
                    <tfoot>
                      <tr>
                         @if($loc=='IM')
                        <th>Name</th>
                        <th>Facility</th>
                         <th>Facility Code</th>
                        <th>Training Site</th>
                        <th>ID Number</th>
                        
                  @else
                  <th>Name</th>
                        <th>Code</th>
                        <th>County</th>
                        <th>Type</th>
                        <th>Owner</th>
                        <th>Action</th>
                  @endif
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box --> 
       
         <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="" font ="10"><b>You Have Chosen:</b></span>
                  <span class="info-box-number" id="chs">(Please select above)</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
      
                   
                                       
              

                     
<div class='box'>

<div class='box-body'>
{!! Form::open(['url' => 'assessments/'.$id]) !!}
<div class="form-group">
	{!! Form::text('Assessment_ID',null,['class' => 'form-control','Value'=> Auth::user()->id.'ASS'.$countID, 'style' => 'display:none;']) !!}
	</div>


	<div class="form-group">
	{!! Form::label('Facility_ID','x',['style'=>'display:none;']) !!}
	{!! Form::text('Facility_ID',null,['class' => 'form-control','style'=>'display:none;' ]) !!}
	</div>

	<div class="form-group">
	{!! Form::label('Assessment_Term','Assessment Term:') !!}
  {!! Form::select('Assessment_Term', ['Baseline' => 'Baseline','Midterm' => 'Midterm','Endterm' => 'Endterm'],null,['class' => 'form-control']) !!}
	
	</div>
	
	<div class="form-group">
	{!! Form::label('Date','Date') !!}
	{!! Form::text('Date',null,['class' => 'form-control', 'data-inputmask' => '\'alias\': \'yyyy-mm-dd\'', 'data-mask'=>'' ]) !!}
  </div>
  <div class="form-group">
  {!! Form::text('UserId',null,['class' => 'form-control','Value'=>Auth::user()->id , 'style' => 'display:none;']) !!}
  </div>
	<div class="form-group">
	
	{!! Form::submit('Start',['class' => 'btn btn-primary form-control']) !!}
	</div>
{!! Form::close() !!}
</div>
</div>

@endsection

  @section('javascript')

  <script type="text/javascript">

    $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text();
   var $rrr = $row.find(".rr").text();

     // Find the text
    
    // Let's test it out
    $('#chs').text($rrr);
    $('#Facility_ID').val($text);

});
  </script>



 
   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

 <!-- DATA TABLES -->
  <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
       
      });
    </script>
 


 <script type = "text/javascript">

       jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});

         </script>

          <script type="text/javascript"> 
      $(function () {
        //Initialize Select2 Elements
       
         $("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        });
    </script>
  @endsection