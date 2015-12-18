var WeightTakendata = google.visualization.arrayToDataTable(jsonData['WeightTaken']);

       var WeightTakenoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var WeightTaken = new google.visualization.BarChart(document.getElementById('WeightTaken'));
      WeightTaken.draw(WeightTakendata, WeightTakenoptions);

       function resizeWeightTaken () {
      
       
           WeightTaken.draw(WeightTakendata, WeightTakenoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeWeightTaken, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeWeightTaken);
    }
