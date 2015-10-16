@extends('template')

@section('cdns')
 <!-- DATA TABLES -->
    <link href="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  @endsection

@section('pageinfo')


   {!! Form::open() !!}
  {!! Form::close() !!}


<div class="box box-primary">
@if($id=='IM')

<?php $surveyname = substr ($id, 0,4);?>
@elseif($id=='MN')
<?php $surveyname = substr ($id, 0,3);?>
@else
<?php $surveyname = substr ($id, 0,2);?>
@endif

  




<div class="box-header">
<div class="box-title">


    <b><?php echo $surveyname; ?> Assessments </b>
    </div>
    </div>
    @if($id!='IM')
    <div class="box-body">
          <p><b>County  :</b> {{$thecounty}} </p>
          <p><b>Assessment Term:</b> {{$term}}</p>


</div>
@endif
</div>
@endsection

@section('content')
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Search </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style= "display:none;">Assessment ID</th>
                        <th style= "display:none;">Facility ID </th>
                        <th>Survey </th>
                       @if ( $id !='IM') <th>Assessment Term</th>
                       @endif
                        @if ( $id =='IM') <th>Participant</th>
                         @endif
                         <th>Assessor </th>
                         <th>Date </th>
                         <th>Facility</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                  
                      
                       @foreach($Assessments as $Assessment)

            <tr >
                        <td style= "display:none;"> {{ $Assessment->AssID}}</td>
                        <td style= "display:none;"> {{ $Assessment->FacilityID}}</td>

                        @if ( (substr ($Assessment->Survey, 0,2)) =='CH')
                           <td> CH Survey </td>
                           @elseif ( (substr ($Assessment->Survey, 0,2)) =='MN')
                              <td> MNH Survey</td>
                              @else
                                 <td> IMCI Survey </td>
                                 @endif
                      @if ( $id !='IM') <td> {{ $Assessment->Term}}</td>
                       @endif
                        @if ( $id =='IM') <td>{{ $Assessment->Participant}}</td>
                         @endif
                       
                        <td> @if(isset($Assessment->AssessorName))
                        {{$Assessment->AssessorName}} 
                        @endif &nbsp; </td>
                        <td> {{ $Assessment->Date}}</td>
                        <td> {{$Assessment->FacilityName}}</td>



 @if($Assessment->Status=='Submitted')
                        <td><form action="/assessments/show/{{$Assessment->AssID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW"></form></td>

     @elseif($Assessment->Status=='Incomplete')

     	 <td><form class="theresume" AssID="{{$Assessment->AssID}}" bad="{{isset($Assessment->AssessorName)}}">
    <input class="btn btn-primary form-control" type="submit" value="RESUME"></form></td>

     @else

      <td> {{$Assessment->Status}}</td>

     @endif



              </tr>


          @endforeach
                      
                     

                   
                        
                  
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style= "display:none;">Assessment ID</th>
                        <th style= "display:none;">Facility ID </th>
                        <th>Survey </th>
                       @if ( $id !='IM') <th>Assessment Term</th>
                       @endif
                        @if ( $id =='IM') <th>Participant</th>
                         @endif
                         <th>Assessor </th>
                         <th>Date </th>
                         <th>Facility</th>
                        
                        <th>Action</th>
                       
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



           

           
         
  @endsection


  @section('javascript')

   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
 <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
       
      });


      $(".theresume").submit(function(e) { 

        var AssID = $(this).attr('AssID');
        var Bad = $(this).attr('Bad');

      

        var token = $('input[name=_token]').val();
          e.preventDefault();


            var data = {

        'action':'check',
        'AssID':AssID,
       '_token': $('input[name=_token]').val()

    };

   


     $.ajax({

    
      url: '/survey/session',
      type: "post",
       data: data,
       error: function(){

        alert('Unable to perform request');

       },
      success: function(data){

      

       

              if(!data){

             

             if(Bad) window.location = ('{{URL::asset("/assessments/resume/")}}/'+AssID);
           else window.location = ('{{URL::asset("/assessments/badresume/")}}/'+AssID);

           }else if(data){


            alert('This survey is currrently being filled, please try again a few minutes later');


           }




      }
    });




     

        


          return false;



});
    </script>

  @endsection

