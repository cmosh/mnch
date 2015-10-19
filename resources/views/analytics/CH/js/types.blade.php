  var ftypesdata = new google.visualization.DataTable();
        ftypesdata.addColumn('string', 'Type');
        ftypesdata.addColumn('number', 'Facilities');
        ftypesdata.addRows(jsonData['CHV2_types']);

        // Set chart options
        var ftypesoptions = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ftypes = new google.visualization.PieChart(document.getElementById('ftypes'));
        ftypes.draw(ftypesdata, ftypesoptions);

         function resizeftypes () {
      
       
            ftypes.draw(ftypesdata, ftypesoptions);
    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeftypes, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeftypes);
    }