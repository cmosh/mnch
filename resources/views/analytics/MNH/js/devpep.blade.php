 var devpepdata = google.visualization.arrayToDataTable(jsonData['devpep']);

       var devpepoptions = {
        colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var devpep = new google.visualization.BarChart(document.getElementById('devpep'));
      devpep.draw(devpepdata, devpepoptions);

        function resizedevpep () {
      
       
            devpep.draw(devpepdata, devpepoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizedevpep, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizedevpep);
    }