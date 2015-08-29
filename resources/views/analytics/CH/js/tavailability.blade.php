 var tavailabilitydata = google.visualization.arrayToDataTable(jsonData['Tools']);

       var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var tavailability = new google.visualization.BarChart(document.getElementById('tavailability'));
      tavailability.draw(tavailabilitydata, options);