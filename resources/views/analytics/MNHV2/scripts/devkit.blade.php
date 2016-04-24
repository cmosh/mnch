var devkitdata = google.visualization.arrayToDataTable(jsonData['devkit']);

       var devkitoptions = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:80,top:25,width:'100%',height:'75%'}
      };

      var devkit = new google.visualization.BarChart(document.getElementById('devkit'));
      devkit.draw(devkitdata, devkitoptions);

       function resizedevkit () {
      
       
           devkit.draw(devkitdata, devkitoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizedevkit, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizedevkit);
    }
