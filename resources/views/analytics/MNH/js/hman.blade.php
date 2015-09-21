var Hmandata = google.visualization.arrayToDataTable(jsonData['HMan']);

       var Hmanoptions = {
        width: '100%',
        height: 150,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:0,width:'50%',height:'75%'}
      };

      var Hman = new google.visualization.BarChart(document.getElementById('hman'));
      Hman.draw(Hmandata, Hmanoptions);

       function resizeHman () {
      
       
           Hman.draw(Hmandata, Hmanoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeHman, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeHman);
    }
