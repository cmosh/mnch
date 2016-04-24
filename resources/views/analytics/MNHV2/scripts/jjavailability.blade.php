var jjavailabilitydata = google.visualization.arrayToDataTable(jsonData['jaids']);

       var jjavailabilityoptions = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var jjavailability = new google.visualization.BarChart(document.getElementById('jjavailability'));
      jjavailability.draw(jjavailabilitydata, jjavailabilityoptions);

       function resizejjavailability () {
      
       
           jjavailability.draw(jjavailabilitydata, jjavailabilityoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizejjavailability, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizejjavailability);
    }
