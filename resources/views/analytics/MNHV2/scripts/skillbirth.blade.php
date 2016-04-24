var skillbirthdata = google.visualization.arrayToDataTable(jsonData['skillbirth']);

       var skillbirthoptions = {
        
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var skillbirth = new google.visualization.BarChart(document.getElementById('skillbirth'));
      skillbirth.draw(skillbirthdata, skillbirthoptions);

       function resizeskillbirth () {
      
       
           skillbirth.draw(skillbirthdata, skillbirthoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeskillbirth, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeskillbirth);
    }
