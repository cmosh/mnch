var sec3data = google.visualization.arrayToDataTable(jsonData['Sec_3']);

       var sec3options = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var sec3 = new google.visualization.BarChart(document.getElementById('sec3'));
      sec3.draw(sec3data, sec3options);

       function resizesec3 () {
      
       
           sec3.draw(sec3data, sec3options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizesec3, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizesec3);
    }
