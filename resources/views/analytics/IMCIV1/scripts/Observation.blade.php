var ObservationBdata = google.visualization.arrayToDataTable(jsonData['ObservationB']);

       var ObservationBoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var ObservationB = new google.visualization.BarChart(document.getElementById('ObservationB'));
      ObservationB.draw(ObservationBdata, ObservationBoptions);

       function resizeObservationB () {
      
       
           ObservationB.draw(ObservationBdata, ObservationBoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeObservationB, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeObservationB);
    }
