var Bemoncdata = google.visualization.arrayToDataTable(jsonData['Bemonc']);

       var Bemoncoptions = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:0,width:'50%',height:'75%'}
      };

      var Bemonc = new google.visualization.BarChart(document.getElementById('bemonc'));
      Bemonc.draw(Bemoncdata, Bemoncoptions);

       function resizeBemonc () {
      
       
           Bemonc.draw(Bemoncdata, Bemoncoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeBemonc, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeBemonc);
    }
