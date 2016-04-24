 var tavailabilitydata = google.visualization.arrayToDataTable(jsonData['Tools']);

       var tavailabilityoptions = {
        colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var tavailability = new google.visualization.BarChart(document.getElementById('tavailability'));
      tavailability.draw(tavailabilitydata, tavailabilityoptions);

        function resizetavailability () {
      
       
            tavailability.draw(tavailabilitydata, tavailabilityoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizetavailability, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizetavailability);
    }