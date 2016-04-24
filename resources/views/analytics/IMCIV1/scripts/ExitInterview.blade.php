var ExitInterviewdata = google.visualization.arrayToDataTable(jsonData['ExitInterview']);



       
      var ExitInterviewoptions = {
      

      
        width: '100%',
        colors: ['green', 'red','#C6C6C6'],
        height: 300,
        title: 'Interview Questions',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var ExitInterview = new google.visualization.BarChart(document.getElementById('ExitInterview'));
      ExitInterview.draw(ExitInterviewdata, ExitInterviewoptions);

      

var ExitInterviewBdata2 = google.visualization.arrayToDataTable(jsonData['ExitInterviewB']);
      var ExitInterviewB2options = {
        colors: ['#ffc34d','#00e673','#ff5500','#00e5e6','#3366CC', '#DC3912', '#FF9900','#C6C6C6'],
      
        width: '100%',
        height: 300,
        title: 'Who Advised Caregivers to Seek Professional Help',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var ExitInterviewB2 = new google.visualization.BarChart(document.getElementById('ExitInterviewB'));
      ExitInterviewB2.draw(ExitInterviewBdata2, ExitInterviewB2options);

   function resizeExitInterview () {
      
        ExitInterview.draw(ExitInterviewdata, ExitInterviewoptions);
          ExitInterviewB2.draw(ExitInterviewBdata2, ExitInterviewB2options);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeExitInterview, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeExitInterview);
    }




