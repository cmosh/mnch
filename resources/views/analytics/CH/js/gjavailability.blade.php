var gjavailabilitydata = google.visualization.arrayToDataTable(jsonData['CHV2_Guidelines']);

       var gjavailabilityoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var gjavailability = new google.visualization.BarChart(document.getElementById('gjavailability'));
      gjavailability.draw(gjavailabilitydata, gjavailabilityoptions);

       function resizegjavailability () {
      
       
           gjavailability.draw(gjavailabilitydata, gjavailabilityoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizegjavailability, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizegjavailability);
    }
