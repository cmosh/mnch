var SpecialNeedsdata = new google.visualization.DataTable();
        SpecialNeedsdata.addColumn('string', 'Special Needs');
        SpecialNeedsdata.addColumn('number', 'Cases');
        SpecialNeedsdata.addRows(jsonData['SpecialNeeds']);

        // Set chart SpecialNeedsoptions
        var SpecialNeedsoptions = {
                       'width':'100%',
                       sliceVisibilityThreshold:0,
                        'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var SpecialNeeds = new google.visualization.PieChart(document.getElementById('SpecialNeeds'));
        SpecialNeeds.draw(SpecialNeedsdata, SpecialNeedsoptions);

          function resizeSpecialNeeds () {
      
       
           SpecialNeeds.draw(ort_funcdata, SpecialNeedsoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizeSpecialNeeds, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizeSpecialNeeds);
    }