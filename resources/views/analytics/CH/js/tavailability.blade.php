 var tavailabilitydata = google.visualization.arrayToDataTable(jsonData['Tools']);

       var tavailabilityoptions = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
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