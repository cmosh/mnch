var Classificationdata = google.visualization.arrayToDataTable(jsonData['Classification']);

       var Classificationoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Classification = new google.visualization.BarChart(document.getElementById('Classification'));
      Classification.draw(Classificationdata, Classificationoptions);

       function resizeClassification () {
      
       
           Classification.draw(Classificationdata, Classificationoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeClassification, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeClassification);
    }
