var suppliesdata = google.visualization.arrayToDataTable(jsonData['supplies']);

       var suppliesoptions = {
        hAxis: {direction:-1, slantedText:true, slantedTextAngle:45 },
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var supplies = new google.visualization.ColumnChart(document.getElementById('supplies'));
      supplies.draw(suppliesdata, suppliesoptions);

       function resizesupplies () {
      
       
            supplies.draw(suppliesdata, suppliesoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizesupplies, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizesupplies);
    }