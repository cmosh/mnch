var lortdata = new google.visualization.DataTable();
        lortdata.addColumn('string', 'Location');
        lortdata.addColumn('number', 'Number');
        lortdata.addRows(jsonData['lort']);

        
        var lortoptions = {
                       'width':'100%',
                        'box-sizing': 'border-box;',
                       'height':300,
                        sliceVisibilityThreshold:0};

       
        var lort = new google.visualization.PieChart(document.getElementById('chlocationortcorner'));
        lort.draw(lortdata, lortoptions);

          function resizelort () {
      
       
           lort.draw(lortdata, lortoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizelort, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizelort);
    }