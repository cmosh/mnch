var ClassificationBdata = google.visualization.arrayToDataTable(jsonData['ClassificationB']);

       var ClassificationBoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var ClassificationB = new google.visualization.BarChart(document.getElementById('ClassificationB'));
      ClassificationB.draw(ClassificationBdata, ClassificationBoptions);

       function resizeClassificationB () {
      
       
           ClassificationB.draw(ClassificationBdata, ClassificationBoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeClassificationB, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeClassificationB);
    }
