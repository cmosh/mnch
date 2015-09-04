
var commdata = google.visualization.arrayToDataTable(jsonData['comm_strategy']);

       var commoptions = {
        width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var comm = new google.visualization.ColumnChart(document.getElementById('community_strategy'));
      comm.draw(commdata, commoptions);

       function resizecomm () {
      
       
           comm.draw(commdata, commoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizecomm, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizecomm);
    }