var Traineddata = google.visualization.arrayToDataTable(jsonData['Trained']);

       var Trainedoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Trained = new google.visualization.ColumnChart(document.getElementById('Trained'));
      Trained.draw(Traineddata, Trainedoptions);

       function resizeTrained () {
      
       
           Trained.draw(Traineddata, Trainedoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeTrained, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeTrained);
    }
