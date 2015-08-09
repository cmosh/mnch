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
                        
                         <th>Autosaved On</th>
                        <th>Assessment Date</th>                   
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                  
                      
                       @foreach($Auto as $to)

            <tr >
                        <td style= "display:none;"> {{ $to->AssID}}</td>
                        <td style= "display:none;"> {{ $to->FacilityCode}}</td>

                       
                       
                        <td> {{$to->Survey}} </td>
                        <td> {{ $to->AutosavedOn}}</td>
                        <td> {{$to->Date}}</td>



 

     	 <td><form action="/assessments/edit/{{$to->AssID}}">
    <input class="btn btn-primary form-control" type="submit" value="RESUME"></form></td>

    


              </tr>


          @endforeach
                      
                     
               
                   
                        
                  
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th style= "display:none;">Assessment ID</th>
                        <th style= "display:none;">Facility ID </th>
                        <th>Survey </th>
                        
                         <th>Autosaved On</th>
                        <th>Assessment Date</th>                   
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

