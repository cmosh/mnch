 var cdata = google.visualization.arrayToDataTable(jsonData);

       var coptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
         isStacked: 'percent'

             };
             
     var c = new google.visualization.ColumnChart(document.getElementById(box));
      c.draw(cdata, coptions);

       function resizec () {
      
       
           staff_Trained.draw(cdata, coptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }