var Consobsvdata = google.visualization.arrayToDataTable(jsonData['Consobsv']);

       var Consobsvoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Consobsv = new google.visualization.BarChart(document.getElementById('Consobsv'));
      Consobsv.draw(Consobsvdata, Consobsvoptions);

       function resizeConsobsv () {
      
       
           Consobsv.draw(Consobsvdata, Consobsvoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeConsobsv, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeConsobsv);
    }
