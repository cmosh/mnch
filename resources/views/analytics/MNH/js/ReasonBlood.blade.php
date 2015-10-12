  var ReasonBlooddata = new google.visualization.DataTable();
        ReasonBlooddata.addColumn('string', 'H1');
        ReasonBlooddata.addColumn('number', 'H2');
        ReasonBlooddata.addRows(jsonData['ReasonBlood']);

        // Set chart options
        var ReasonBloodoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300,
                        sliceVisibilityThreshold:0};

        // Instantiate and draw our chart, passing in some options.
        var ReasonBlood = new google.visualization.PieChart(document.getElementById('ReasonBlood'));
        ReasonBlood.draw(ReasonBlooddata, ReasonBloodoptions);

         function resizeReasonBlood () {
      
       
            ReasonBlood.draw(ReasonBlooddata, ReasonBloodoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeReasonBlood, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeReasonBlood);
    }