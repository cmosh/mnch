var DServicedata = google.visualization.arrayToDataTable(jsonData['DService']);

       var DServiceoptions = {

         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
         height: 80,
        legend: { position: 'top', maxLines: 3 },
         bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:20,width:'50%',height:'75%'}

      
      
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
