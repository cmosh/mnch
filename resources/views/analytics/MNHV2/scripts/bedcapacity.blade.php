var bedcapacitydata = google.visualization.arrayToDataTable(jsonData['bedcapacity']);

       var bedcapacityoptions = {
        
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:80,top:25,width:'100%',height:'75%'}
      };

      var bedcapacity = new google.visualization.BarChart(document.getElementById('bedcapacity'));
      bedcapacity.draw(bedcapacitydata, bedcapacityoptions);

       function resizebedcapacity () {
      
       
           bedcapacity.draw(bedcapacitydata, bedcapacityoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizebedcapacity, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizebedcapacity);
    }
