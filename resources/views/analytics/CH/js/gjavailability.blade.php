 var gjavailabilitydata = google.visualization.arrayToDataTable([



        ['Guidelines Availability', 'Yes', 'No', { role: 'annotation' }],

         @foreach($Ch_guidlines as $Ch_guidline) 
        ['{{$Ch_guidline->Label}}', {{$Ch_guidline->Yes}}, {{$Ch_guidline->No}},''],
        @endforeach       
       
      ]);

       var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var gjavailability = new google.visualization.BarChart(document.getElementById('gjavailability'));
      gjavailability.draw(gjavailabilitydata, options);