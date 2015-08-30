  var annualTrendsData = google.visualization.arrayToDataTable(jsonData['annualtrends']);

      var annualTrendsOptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
         isStacked: 'percent'

             };
      var annualTrends = new google.visualization.ColumnChart(document.getElementById('annual'));
      annualTrends.draw(annualTrendsData, annualTrendsOptions);

       function resizeannualTrends () {
      annualTrends.draw(annualTrendsData, annualTrendsOptions);
      
   
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeannualTrends, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeannualTrends);
    }