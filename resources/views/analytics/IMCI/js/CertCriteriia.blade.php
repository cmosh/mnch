var CertCriteriiadata = google.visualization.arrayToDataTable(jsonData['CertCriteriia']);

       var CertCriteriiaoptions = {
       colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var CertCriteriia = new google.visualization.BarChart(document.getElementById('CertCriteriia'));
      CertCriteriia.draw(CertCriteriiadata, CertCriteriiaoptions);

       function resizeCertCriteriia () {
      
       
           CertCriteriia.draw(CertCriteriiadata, CertCriteriiaoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeCertCriteriia, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeCertCriteriia);
    }
