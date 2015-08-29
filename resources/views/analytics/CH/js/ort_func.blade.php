var ort_funcdata = google.visualization.arrayToDataTable(jsonData['ortf']);

      var options = {
        width: '100%',
        height: 300,
        
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var ort_func = new google.visualization.ColumnChart(document.getElementById('ort_func'));
      ort_func.draw(ort_funcdata, options);