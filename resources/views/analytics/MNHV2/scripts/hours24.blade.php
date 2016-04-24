var hours24data = google.visualization.arrayToDataTable(jsonData['hours24']);

       var hours24options = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:80,top:25,width:'100%',height:'75%'}
      };

      var hours24 = new google.visualization.BarChart(document.getElementById('hours24'));
      hours24.draw(hours24data, hours24options);

       function resizehours24 () {
      
       
           hours24.draw(hours24data, hours24options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizehours24, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizehours24);
    }
