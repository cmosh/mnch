var staff_Traineddata = google.visualization.arrayToDataTable(jsonData['CHV2_staff_trained']);

      var staff_Trainedoptions = {
       
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '50%' },
        isStacked: true,
       hAxis: {minValue: 0},
        vAxis: {minValue:0},
        chartArea:{left:400,top:25,width:'50%',height:'75%'}
      };
      var staff_Trained = new google.visualization.BarChart(document.getElementById('staff_Trained'));
      staff_Trained.draw(staff_Traineddata, staff_Trainedoptions);

       function resizestaff_Trained () {

           staff_Trained.draw(staff_Traineddata, staff_Trainedoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizestaff_Trained, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizestaff_Trained);
    }
