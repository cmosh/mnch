
var resourcesdata = google.visualization.arrayToDataTable(jsonData['resources']);

       var options = {
        width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var resources = new google.visualization.ColumnChart(document.getElementById('resources'));
      resources.draw(resourcesdata, options);