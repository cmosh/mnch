
var resourcesdata = google.visualization.arrayToDataTable(jsonData['resources']);

       var resourcesoptions = {
        width: '100%',
        height: 300,
       colors: ['green', 'red','#C6C6C6'],
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var resources = new google.visualization.ColumnChart(document.getElementById('resources'));
      resources.draw(resourcesdata, resourcesoptions);

       function resizeresources () {
      
       
           resources.draw(resourcesdata, resourcesoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeresources, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeresources);
    }