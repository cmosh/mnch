var WorkingLocationdata = google.visualization.arrayToDataTable(jsonData['WorkingLocation']);

       var WorkingLocationoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var WorkingLocation = new google.visualization.BarChart(document.getElementById('WorkingLocation'));
      WorkingLocation.draw(WorkingLocationdata, WorkingLocationoptions);

       function resizeWorkingLocation () {
      
       
           WorkingLocation.draw(WorkingLocationdata, WorkingLocationoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeWorkingLocation, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeWorkingLocation);
    }
