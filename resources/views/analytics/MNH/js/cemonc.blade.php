var Cemoncdata = google.visualization.arrayToDataTable(jsonData['Cemonc']);

       var Cemoncoptions = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Cemonc = new google.visualization.BarChart(document.getElementById('cemonc'));
      Cemonc.draw(Cemoncdata, Cemoncoptions);

       function resizeCemonc () {
      
       
           Cemonc.draw(Cemoncdata, Cemoncoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeCemonc, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeCemonc);
    }
