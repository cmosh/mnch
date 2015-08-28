 var gjavailabilitydata = google.visualization.arrayToDataTable([



        ['Guidelines Availability', 'Yes', 'No', { role: 'annotation' }],

         @foreach($gjavailability as $gjavailabilit) 
        ['{{$gjavailabilit[0]}}', {{$gjavailabilit[1]}}, {{$gjavailabilit[2]}},''],
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