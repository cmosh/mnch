var kangaroo1data = google.visualization.arrayToDataTable(jsonData['Kangaroo1']);



       
      var kangaroo1options = {
      

    // hAxis: {direction:-1, slantedText:true, slantedTextAngle:45 },
        width: '100%',
        colors: ['green', 'red','#C6C6C6'],
        height: 320,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
       bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var kangaroo1 = new google.visualization.BarChart(document.getElementById('kangaroo1'));
      kangaroo1.draw(kangaroo1data, kangaroo1options);

      

var kangaroo2data = google.visualization.arrayToDataTable(jsonData['Kangaroo2']);
      var kangaroo2options = kangaroo1options;
      kangaroo2options['title'] = 'Facilities With Designated Space'

      var kangaroo2 = new google.visualization.BarChart(document.getElementById('kangaroo2'));
      kangaroo2.draw(kangaroo2data, kangaroo2options);

   function resizekangaroo () {
      
        kangaroo1.draw(kangaroo1data, kangaroo1options);
          kangaroo2.draw(kangaroo2data, kangaroo2options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizekangaroo, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizekangaroo);
    }




