var ort_funcdata = google.visualization.arrayToDataTable([



        ['Ort Functionality ', 'Yes', 'No'],

         @foreach($Ch_ort_funcs as $Ch_ort_func) 

         ['{{$Ch_ort_func->Label}}', {{$Ch_ort_func->Yes}}, {{$Ch_ort_func->No}}],
        
        @endforeach 



       

         ['{{$Ch_ort_funcs_combs->Label}}', {{$Ch_ort_funcs_combs->Yes}}, {{$Ch_ort_funcs_combs->No}}]
        
           

      ]);

      var options = {
        width: '100%',
        height: 300,
     
        legend: { position: 'top', maxLines: 3 },
      
        isStacked: 'percent',
        hAxis: {minValue: 0},
        vAxis: {minValue:0}


      };

      var ort_func = new google.visualization.ColumnChart(document.getElementById('ort_func'));
      ort_func.draw(ort_funcdata, options);