 var cdata = google.visualization.arrayToDataTable(jsonData);

       var coptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var c = new google.visualization.BarChart(document.getElementById(box));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           c.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }