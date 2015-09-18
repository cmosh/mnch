var ownershipdata = new google.visualization.DataTable();
        ownershipdata.addColumn('string', 'Owner');
        ownershipdata.addColumn('number', 'Facilities');
        ownershipdata.addRows(jsonData['ownership']);

        // Set chart ownershipoptions
        var ownershipoptions = {
                       'width':'100%',
                        'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ownership = new google.visualization.PieChart(document.getElementById('ownership'));
        ownership.draw(ownershipdata, ownershipoptions);

          function resizeownership () {
      
       
           ownership.draw(ort_funcdata, ownershipoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeownership, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeownership);
    }