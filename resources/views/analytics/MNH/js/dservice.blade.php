var DServicedata = google.visualization.arrayToDataTable(jsonData['DService']);

       var DServiceoptions = {
        width: '100%',
        height: 150,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:0,width:'50%',height:'75%'}
      };

      var DService = new google.visualization.BarChart(document.getElementById('dservice'));
      DService.draw(DServicedata, DServiceoptions);

       function resizeDService () {
      
       
           DService.draw(DServicedata, DServiceoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeDService, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeDService);
    }
