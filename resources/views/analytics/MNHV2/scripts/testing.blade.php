var testingdata = google.visualization.arrayToDataTable(jsonData['testing']);

       var testingoptions = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:80,top:25,width:'100%',height:'75%'}
      };

      var testing = new google.visualization.BarChart(document.getElementById('testing'));
      testing.draw(testingdata, testingoptions);

       function resizetesting () {
      
       
           testing.draw(testingdata, testingoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizetesting, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizetesting);
    }
