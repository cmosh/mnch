var cdata = google.visualization.arrayToDataTable(jsonData);

      var coptions = {
       
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: true,
       hAxis: {minValue: 0},
        vAxis: {minValue:0},
        chartArea:{left:40,top:25,width:'100%',height:'75%'}
      };
      var c = new google.visualization.BarChart(document.getElementById('canvas'+window.bx));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           staff_Trained.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }