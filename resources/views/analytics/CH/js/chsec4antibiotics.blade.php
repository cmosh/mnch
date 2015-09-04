var chsec4antibioticsdata = google.visualization.arrayToDataTable(jsonData['Antibiotics']);



       
      var chsec4antibioticsoptions = {
       hAxis: {direction:-1, slantedText:true, slantedTextAngle:45 },
        width: '100%',
        height: 300,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4antibiotics = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics'));
      chsec4antibiotics.draw(chsec4antibioticsdata, chsec4antibioticsoptions);

      

var chsec4antibioticsdata2 = google.visualization.arrayToDataTable(jsonData['AntibioticsAvailability']);
      var chsec4antibiotics2options = {
       hAxis: {direction:-1, slantedText:true, slantedTextAngle:45 },
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4antibiotics2 = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics2'));
      chsec4antibiotics2.draw(chsec4antibioticsdata2, chsec4antibiotics2options);

   function resizechsec4antibiotics () {
      
        chsec4antibiotics.draw(chsec4antibioticsdata, chsec4antibioticsoptions);
          chsec4antibiotics2.draw(chsec4antibioticsdata2, chsec4antibiotics2options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizechsec4antibiotics, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizechsec4antibiotics);
    }




