var chsec4malariadata = google.visualization.arrayToDataTable(jsonData['CHV2_Malaria']);

      var chsec4malariaoptions = {
        width: '100%',
        height: 300,
        colors: ['green', 'red','#C6C6C6'],
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria = new google.visualization.ColumnChart(document.getElementById('chsec4malaria'));
      chsec4malaria.draw(chsec4malariadata, chsec4malariaoptions);

var chsec4malariadata2 = google.visualization.arrayToDataTable(jsonData['CHV2_MalariaAvaialability']); 

      var chsec4malaria2options = {
      colors: ['#3366CC', '#DC3912', '#FF9900','#C6C6C6'],
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria2 = new google.visualization.ColumnChart(document.getElementById('chsec4malaria2'));
      chsec4malaria2.draw(chsec4malariadata2, chsec4malaria2options);

      function resizechsec4malaria () {
      
         chsec4malaria.draw(chsec4malariadata, chsec4malariaoptions);
           chsec4malaria2.draw(chsec4malariadata2, chsec4malaria2options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizechsec4malaria, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizechsec4malaria);
    }