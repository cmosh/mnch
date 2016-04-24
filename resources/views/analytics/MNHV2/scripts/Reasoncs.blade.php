  var Reasoncsdata = new google.visualization.DataTable();
        Reasoncsdata.addColumn('string', 'H1');
        Reasoncsdata.addColumn('number', 'H2');
        Reasoncsdata.addRows(jsonData['Reasoncs']);

        // Set chart options
        var Reasoncsoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300,
                        sliceVisibilityThreshold:0
                        };

        // Instantiate and draw our chart, passing in some options.
        var Reasoncs = new google.visualization.PieChart(document.getElementById('Reasoncs'));
        Reasoncs.draw(Reasoncsdata, Reasoncsoptions);

         function resizeReasoncs () {
      
       
            Reasoncs.draw(Reasoncsdata, Reasoncsoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeReasoncs, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeReasoncs);
    }