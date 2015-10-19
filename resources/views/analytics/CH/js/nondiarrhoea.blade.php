  var NonDiarrhoeaData = google.visualization.arrayToDataTable(jsonData['CHV2_u5RegisterN']);

      var NonDiarrhoeaOPtions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 }

             };
      var NonDiarrhoea = new google.visualization.ColumnChart(document.getElementById('NonDiarrhoea'));
      NonDiarrhoea.draw(NonDiarrhoeaData, NonDiarrhoeaOPtions);

       function resizeNonDiarrhoea () {
      NonDiarrhoea.draw(NonDiarrhoeaData, NonDiarrhoeaOPtions);
      
   
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeNonDiarrhoea, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeNonDiarrhoea);
    }