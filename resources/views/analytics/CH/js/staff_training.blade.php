var staff_Traineddata = google.visualization.arrayToDataTable([



        ['No.of Staff Trained', 'Doctors', 'Nurses','R.C.0.s'],

         @foreach($Ch_staff_trainings as $Ch_staff_training) 
        ['{{$Ch_staff_training->Label}}', {{$Ch_staff_training->Doctors}}, {{$Ch_staff_training->Nurses}},{{$Ch_staff_training->RCOs}}],
        @endforeach       
      ]);

      var staff_Trainedoptions = {
       
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
       hAxis: {minValue: 0},
        vAxis: {minValue:0}
      };
      var staff_Trained = new google.visualization.BarChart(document.getElementById('staff_Trained'));
      staff_Trained.draw(staff_Traineddata, staff_Trainedoptions);

       function resizestaff_Trained () {
      
       
           resources.draw(staff_Traineddata, staff_Trainedoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizestaff_Trained, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizestaff_Trained);
    }