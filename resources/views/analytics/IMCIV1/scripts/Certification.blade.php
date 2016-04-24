var Certificationdata = google.visualization.arrayToDataTable(jsonData['Certification']);

       var Certificationoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var Certification = new google.visualization.BarChart(document.getElementById('Certification'));
      Certification.draw(Certificationdata, Certificationoptions);

       function resizeCertification () {
      
       
           Certification.draw(Certificationdata, Certificationoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeCertification, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeCertification);
    }
