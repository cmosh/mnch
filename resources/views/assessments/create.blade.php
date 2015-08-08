@extends('template')


@section('pageinfo')
<div class="box box-primary">

@if($loc=='IM')

<?php $surveyname = substr ($id, 0,4);?>
@else
<?php $surveyname = substr ($id, 0,2);?>
@endif



<div class="box-header">
<div class="box-title">


    Start <?php echo $surveyname; ?> Assessment:
    </div>
    </div>
    @if($loc!='IM')
    <div class="box-body">

          <p><b>County  :</b> {{$thecounty}} </p>
          <p><b>Date    :</b> {{$thedate}} </p>
      
          <p><b>Assessment Term:</b> {{$theterm}}</p>


</div>
@endif
</div>
          

         
  @endsection

  @section('cdns')
 <!-- DATA TABLES -->
    <link href="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  @endsection

@section('content')

 <div id="tip" class="row">
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
       <div id = "thebox"class="info-box" style='display:none;'>
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="" id="chs" ><b>(Please select below)</b></span>
                
                    {!! Form::open(['url' => 'assessments/'.$id]) !!}
<div class="form-group">
  {!! Form::text('Assessment_ID',null,['class' => 'form-control','Value'=> Auth::user()->id.'ASS'.$countID, 'style' => 'display:none;']) !!}
  </div>


  <div class="form-group">
  {!! Form::label('Facility_ID','x',['style'=>'display:none;']) !!}
  {!! Form::text('Facility_ID',null,['class' => 'form-control','style'=>'display:none;' ]) !!}
  </div>

  <div class="form-group">
  {!! Form::label('Assessment_Term','Assessment Term:',['style' => 'display:none;']) !!}
 
   {!! Form::text('Assessment_Term',null,['class' => 'form-control','Value'=> $theterm ,'style' => 'display:none;']) !!}
  </div>
  
  <div class="form-group">
  {!! Form::label('Date','Date',['style' => 'display:none;']) !!}
  {!! Form::text('Date',null,['class' => 'form-control', 'Value'=> $thedate ,'style' => 'display:none;']) !!}
  </div>
  <div class="form-group">
  {!! Form::text('UserId',null,['class' => 'form-control','Value'=>Auth::user()->id , 'style' => 'display:none;']) !!}
   {!! Form::text('Status',null,['class' => 'form-control','Value'=>'In progress', 'style' => 'display:none;']) !!}
  </div>
  <div class="form-group" >
  
  {!! Form::submit('Start Assessment',['class' => 'btn btn-success form-control btn-lg']) !!}
  </div>
{!! Form::close() !!}
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->


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

                          @if($DoneAss == null || $DoneAss->get($al->FacilityCode) == null)   
                        <td> <button type="button" class="use-address btn btn-primary form-control" /> Select </button> </td>
                          @else
                          <td> {{($DoneAss->get($al->FacilityCode)->Status)}} </td>
                          @endif
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
       
        
      
                   
                                       
              

                     







@endsection

  @section('javascript')

  <script type="text/javascript">

    $(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text();
   var $rrr = $row.find(".rr").text();

     // Find the text
    
    // Let's test it out
    $('#tip').hide();
    $('#thebox').show();
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