  var u5Registerdata = google.visualization.arrayToDataTable(jsonData['uRegister']);

      var u5Registeroptions = {
       
       width: '100%',
        height: 300,
       
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 }

             };
      var u5Register = new google.visualization.ColumnChart(document.getElementById('uRegister'));
      u5Register.draw(u5Registerdata, u5Registeroptions);

       function resizeHandler () {
      u5Register.draw(u5Registerdata, u5Registeroptions);
      
   
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeHandler, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeHandler);
    }