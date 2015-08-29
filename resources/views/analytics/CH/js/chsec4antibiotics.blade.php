var chsec4antibioticsdata = google.visualization.arrayToDataTable(jsonData['Antibiotics']);



       
      var options = {
        width: '100%',
        height: 300,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4antibiotics = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics'));
      chsec4antibiotics.draw(chsec4antibioticsdata, options);

var chsec4antibioticsdata2 = google.visualization.arrayToDataTable(jsonData['Antibiotics']);
      var options = {
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4antibiotics2 = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics2'));
      chsec4antibiotics2.draw(chsec4antibioticsdata2, options);






