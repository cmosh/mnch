  var dserviceconductdata = new google.visualization.DataTable();
        dserviceconductdata.addColumn('string', 'Reason');
        dserviceconductdata.addColumn('number', 'Facilities');
        dserviceconductdata.addRows(jsonData['dserviceconduct']);

        // Set chart options
        var dserviceconductoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300,
                        sliceVisibilityThreshold:0};

        // Instantiate and draw our chart, passing in some options.
        var dserviceconduct = new google.visualization.PieChart(document.getElementById('dserviceconduct'));
        dserviceconduct.draw(dserviceconductdata, dserviceconductoptions);

         function resizedserviceconduct () {
      
       
            dserviceconduct.draw(dserviceconductdata, dserviceconductoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizedserviceconduct, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizedserviceconduct);
    }