var chsec4diarhoeadata = google.visualization.arrayToDataTable(jsonData['DTreatmentCommodities']);

      var options = {
        width: '100%',
        height: 300,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4diarhoea = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea'));
      chsec4diarhoea.draw(chsec4diarhoeadata, options);

var chsec4diarhoeadata2 = google.visualization.arrayToDataTable(jsonData['DTreatmentCommodities']); 

      var options = {
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4diarhoea2 = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea2'));
      chsec4diarhoea2.draw(chsec4diarhoeadata2, options);


