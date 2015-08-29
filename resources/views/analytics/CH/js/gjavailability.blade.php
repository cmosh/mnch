var gjavailabilitydata = google.visualization.arrayToDataTable(jsonData['Guidelines']);

       var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent'
      };

      var gjavailability = new google.visualization.BarChart(document.getElementById('gjavailability'));
      gjavailability.draw(gjavailabilitydata, options);