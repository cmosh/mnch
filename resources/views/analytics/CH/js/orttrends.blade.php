  var orttrendsData = google.visualization.arrayToDataTable(jsonData['annualtrendsN']);

      var orttrendsOptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
         

             };
      var orttrends = new google.visualization.ColumnChart(document.getElementById('annualort'));
      orttrends.draw(orttrendsData, orttrendsOptions);

       function resizeorttrends () {
      orttrends.draw(orttrendsData, orttrendsOptions);
      
   
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeorttrends, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeorttrends);
    }