@extends('app')

@section('content')

 


   <div class="row">

            <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Facility Ownership</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

              <div id="ownership"></div>     
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       



             <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Facility Types</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                <div id="ftypes"></div>  

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        



          </div><!-- /.row -->



         <div class="row">

            <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Staff Training</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

              <div id="staff_Trained"></div>     
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       



             <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Health Services</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

              <!--   <div id="ftypes"></div>   -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        



          </div><!-- /.row -->

        
      
    

  

@endsection


@section('js')


  <!-- ChartJS 1.0.1 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js" type="text/javascript"></script>
   
             <script type="text/javascript" src="https://www.google.com/jsapi"></script>



               <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var ownershipdata = new google.visualization.DataTable();
        ownershipdata.addColumn('string', 'Owner');
        ownershipdata.addColumn('number', 'Facilities');
        ownershipdata.addRows([
          @foreach ($Ch_owners as $Ch_owner)
          ['{{$Ch_owner->Owner}}', {{$Ch_owner->Count}}],
          @endforeach          
        ]);

        // Set chart options
        var options = {
                       'width':'100%',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ownership = new google.visualization.PieChart(document.getElementById('ownership'));
        ownership.draw(ownershipdata, options);


         var ftypesdata = new google.visualization.DataTable();
        ftypesdata.addColumn('string', 'Type');
        ftypesdata.addColumn('number', 'Facilities');
        ftypesdata.addRows([
          @foreach ($Ch_types as $Ch_type)
          ['{{$Ch_type->Type}}', {{$Ch_type->Count}}],
          @endforeach          
        ]);

        // Set chart options
        var options = {
                       'width':'100%',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ftypes = new google.visualization.PieChart(document.getElementById('ftypes'));
        ftypes.draw(ftypesdata, options);
        ////

         var data = google.visualization.arrayToDataTable([



        ['No.of Staff Trained', 'Doctors', 'Nurses','R.C.0.s'],

         @foreach($Ch_staff_trainings as $Ch_staff_training) 
        ['{{$Ch_staff_training->Label}}', {{$Ch_staff_training->Doctors}}, {{$Ch_staff_training->Nurses}},{{$Ch_staff_training->RCOs}}],
        @endforeach       
      ]);

      var options = {
       
        chartArea: {width: '50%',
      'height':300},
        isStacked: true,
        hAxis: {
          minValue: 0,
        },
        vAxis: {
         
        }
      };
      var chart = new google.visualization.BarChart(document.getElementById('staff_Trained'));
      chart.draw(data, options);


      }
    </script>

    
   
@endsection