 var tavailabilitydata = google.visualization.arrayToDataTable([



        ['Tools Availability', 'Yes', 'No', { role: 'annotation' }],

         @foreach($Ch_tavailabilities as $Ch_tavailability) 
        ["{{$Ch_tavailability->Label}}", {{$Ch_tavailability->Yes}}, {{$Ch_tavailability->No}},''],
        @endforeach       
       
      ]);

       var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var tavailability = new google.visualization.BarChart(document.getElementById('tavailability'));
      tavailability.draw(tavailabilitydata, options);