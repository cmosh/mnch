var Observationdata = google.visualization.arrayToDataTable(jsonData['Observation']);

       var Observationoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Observation = new google.visualization.BarChart(document.getElementById('Observation'));
      Observation.draw(Observationdata, Observationoptions);

       function resizeObservation () {
      
       
           Observation.draw(Observationdata, Observationoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeObservation, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeObservation);
    }
