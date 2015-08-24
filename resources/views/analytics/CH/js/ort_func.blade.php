var ort_funcdata = google.visualization.arrayToDataTable([



        ['Ort Functionality ', 'Yes', 'No'],

         @foreach($Ch_ort_funcs as $Ch_ort_func) 

         ['{{$Ch_ort_func->Label}}', {{$Ch_ort_func->Yes}}, {{$Ch_ort_func->No}}],
        
        @endforeach 



        @foreach($Ch_ort_funcs as $Ch_ort_func) 

         ['{{$Ch_ort_func->Label}}', {{$Ch_ort_func->Yes}}, {{$Ch_ort_func->No}}],
        
        @endforeach     

      ]);

      var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var ort_func = new google.visualization.ColumnChart(document.getElementById('ort_func'));
      ort_func.draw(ort_funcdata, options);