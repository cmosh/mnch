var suppliesdata = google.visualization.arrayToDataTable(jsonData['supplies']);

       var options = {
        width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var supplies = new google.visualization.ColumnChart(document.getElementById('supplies'));
      supplies.draw(suppliesdata, options);