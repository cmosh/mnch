var chsec4malariadata = google.visualization.arrayToDataTable(jsonData['Malaria']);

      var options = {
        width: '100%',
        height: 300,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria = new google.visualization.ColumnChart(document.getElementById('chsec4malaria'));
      chsec4malaria.draw(chsec4malariadata, options);

var chsec4malariadata2 = google.visualization.arrayToDataTable(jsonData['Malaria']); 

      var options = {
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria2 = new google.visualization.ColumnChart(document.getElementById('chsec4malaria2'));
      chsec4malaria2.draw(chsec4malariadata2, options);