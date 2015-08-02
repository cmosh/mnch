@extends('template')

@section('cdns')
 <!-- DATA TABLES -->
    <link href="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  @endsection

@section('pageinfo')

  <h2>Assessments</h2>
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
                        <th>Assessment Term</th>
                         <th>Assessor </th>
                        <th>Date </th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                       @foreach($assessments as $assessment)

            <tr >
                        <td style= "display:none;"> {{ $assessment->Assessment_ID}}</td>
                        <td style= "display:none;"> {{ $assessment->Facility_ID}}</td>

                        @if ( (substr ($assessment->Survey, 0,2)) =='CH')
                           <td> CH Survey </td>
                           @elseif ( (substr ($assessment->Survey, 0,2)) =='MN')
                              <td> MNH Survey</td>
                              @else
                                 <td> IMCI Survey </td>
                                 @endif
                     
                        <td> {{ $assessment->Assessment_Term}}</td>
                        <td> {{ $Assessors->get($assessment->Assessment_ID)->Name }}</td>
                        <td> {{ $assessment->Date}}</td>
                        <td><form action="show/{{$assessment->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW">
     
</form>



              </tr>


          @endforeach
                      
                     
               
                   
                        
                  
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style= "display:none;">Assessment ID</th>
                        <th style= "display:none;">Facility ID </th>
                        <th>Survey </th>
                        <th>Assessment Term</th>
                         <th>Assessor </th>
                        <th>Date </th>
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
    </script>

  @endsection

@section('content')