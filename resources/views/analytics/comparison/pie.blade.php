  var cdata = new google.visualization.DataTable();
        cdata.addColumn('string', 'Facilities');
        cdata.addColumn('number', 'Number');
        cdata.addRows(jsonData);

        // Set chart options
        var coptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var c = new google.visualization.PieChart(document.getElementById(box));
        c.draw(cdata, coptions);

         function resizec () {
      
       
            c.draw(cdata, coptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizec, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizec);
    }