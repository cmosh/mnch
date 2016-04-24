 var HIVTestdata = google.visualization.arrayToDataTable(jsonData['HIVTest']);

       var HIVTestoptions = {
        colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var HIVTest = new google.visualization.BarChart(document.getElementById('HIVTest'));
      HIVTest.draw(HIVTestdata, HIVTestoptions);

        function resizeHIVTest () {
      
       
            HIVTest.draw(HIVTestdata, HIVTestoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeHIVTest, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeHIVTest);
    }