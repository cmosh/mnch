var EquipAvaildata = google.visualization.arrayToDataTable(jsonData['EquipAvail']);

       var EquipAvailoptions = {
         colors: ['green', 'red','#C6C6C6'],
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent',
        chartArea:{left:250,top:25,width:'50%',height:'75%'}
      };

      var EquipAvail = new google.visualization.BarChart(document.getElementById('EquipAvail'));
      EquipAvail.draw(EquipAvaildata, EquipAvailoptions);

       function resizeEquipAvail () {
      
       
           EquipAvail.draw(EquipAvaildata, EquipAvailoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeEquipAvail, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeEquipAvail);
    }
