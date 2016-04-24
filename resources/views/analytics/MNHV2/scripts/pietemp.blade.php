  var namedata = new google.visualization.DataTable();
        namedata.addColumn('string', 'H1');
        namedata.addColumn('number', 'H2');
        namedata.addRows(jsonData['name']);

        // Set chart options
        var nameoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var name = new google.visualization.PieChart(document.getElementById('name'));
        name.draw(namedata, nameoptions);

         function resizename () {
      
       
            name.draw(namedata, nameoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizename, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizename);
    }