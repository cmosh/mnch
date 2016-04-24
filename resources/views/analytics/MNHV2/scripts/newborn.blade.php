 var NewBornCaredata = google.visualization.arrayToDataTable(jsonData['NewBornCare']);

       var NewBornCareoptions = {
        colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:80,top:25,width:'100%',height:'75%'}
      };

      var NewBornCare = new google.visualization.BarChart(document.getElementById('NewBornCare'));
      NewBornCare.draw(NewBornCaredata, NewBornCareoptions);

        function resizeNewBornCare () {
      
       
            NewBornCare.draw(NewBornCaredata, NewBornCareoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeNewBornCare, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeNewBornCare);
    }