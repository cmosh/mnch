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
                <div class="row">
               <div class="col-xs-6">
            <canvas id="ownership" height="250"></canvas>
        </div>
        <div class="col-xs-6">
          <div id="ownershipleg"></div>
        </div>
    </div>        
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
                <div class="row">
               <div class="col-xs-6">
            <canvas id="ftypes" height="250"></canvas>
        </div>
        <div class="col-xs-6">
          <div id="ftypesleg"></div>
        </div>
    </div>        
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


                  <div class="row">
               <div class="col-xs-6">
           <canvas id="canvas" height="450" width="600"></canvas>
        </div>
        <div class="col-xs-6">
          <button id="randomizeData">Randomize Data</button>
        </div>
    </div>  



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

                <div class="row">
               <div class="col-xs-6">
           <!--  <canvas id="ftypes" height="250"></canvas> -->
        </div>
        <div class="col-xs-6">
          <!-- <div id="ftypesleg"></div> -->
        </div>
    </div>  


                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->   

          </div><!-- /.row -->
         

        
      
    

  

@endsection


@section('js')


  <!-- ChartJS 1.0.1 -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.4.0/randomColor.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/chartjs/Chart.min.js" type="text/javascript"></script>
     <script src="/bower_components/legend/src/legend.js" type="text/javascript"></script>

       <script src="/bower_components/stacked/src/Chart.StackedBar.js" type="text/javascript"></script>
          <script src="/bower_components/horizontal/Chart.HorizontalBar.js" type="text/javascript"></script>
     <script>
      $(function () {
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var ownershipCanvas = $("#ownership").get(0).getContext("2d");
        var ftypesCanvas = $("#ftypes").get(0).getContext("2d");
        
        var ftypes =new Chart(ftypesCanvas);
        var colors =  randomColor({hue: 'green', count: 100}); 
        var i = 0;

        var ftypesData = [
        @foreach ($Ch_types as $Ch_type)
              {
            value: {{$Ch_type->Count}},
            color: colors[i++],
            highlight: colors[i+=5],
            label:  "{{$Ch_type->Type}}"
          },
          @endforeach
        ];
        
        var ownership = new Chart(ownershipCanvas);
        var colors =  randomColor({hue: 'orange', count: 100}); 
        var i = 0;

        var ownershipData = [
        @foreach ($Ch_owners as $Ch_owner)
              {
            value: {{$Ch_owner->Count}},
            color: colors[i++],
            highlight: colors[i+=5],
            label:  "{{$Ch_owner->Owner}}"
          },
          @endforeach
        ];


        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 0, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: false,
          //String - A legend template
        //  legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        ownership.Pie(ownershipData, pieOptions);
        ftypes.Pie(ftypesData, pieOptions);
         legend(document.getElementById('ftypesleg'), ftypesData);
        legend(document.getElementById('ownershipleg'), ownershipData);
        

        //-------------
        //- BAR CHART -
        //-------------
      
      });
    </script>

    <script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
  var randomColorFactor = function(){ return Math.round(Math.random()*255)};

  var barChartData = {
    labels : ["January","February","March","April","May","June","July"],
    datasets : [
      {
        fillColor : "rgba(220,220,220,0.5)",
        strokeColor : "rgba(220,220,220,0.8)",
        highlightFill: "rgba(220,220,220,0.75)",
        highlightStroke: "rgba(220,220,220,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        fillColor : "rgba(151,187,205,0.5)",
        strokeColor : "rgba(151,187,205,0.8)",
        highlightFill : "rgba(151,187,205,0.75)",
        highlightStroke : "rgba(151,187,205,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      },
      {
        fillColor : "rgba(240,73,73,0.5)",
        strokeColor : "rgba(240,73,73,0.8)",
        highlightFill : "rgba(240,73,73,0.75)",
        highlightStroke : "rgba(240,73,73,1)",
        data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
      }
    ]
  };

  window.onload = function(){
    var ctx = document.getElementById("canvas").getContext("2d");
    window.myBar = new Chart(ctx).HorizontalStackedBar(barChartData, {
      responsive : true
    });

    $('#randomizeData').click(function(){
      barChartData.datasets[0].fillColor = 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
      barChartData.datasets[0].data = [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()];

      barChartData.datasets[1].fillColor = 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
      barChartData.datasets[1].data = [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()];

      window.myBar.update();
    });
  };
  </script>
   
@endsection