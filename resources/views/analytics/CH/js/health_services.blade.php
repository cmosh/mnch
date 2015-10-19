
         var chhealthservicesdata = new google.visualization.DataTable();
        chhealthservicesdata.addColumn('string', 'Location');
        chhealthservicesdata.addColumn('number', 'Number');
        chhealthservicesdata.addRows(jsonData['CHV2_genopd']);

       
        var chhealthservicesoptions = {
                       'width':'100%',
                        'box-sizing': 'border-box;',
                       'height':300,
                       sliceVisibilityThreshold:0
                       };

       
        var chhealthservices = new google.visualization.PieChart(document.getElementById('chhealthservices'));
        chhealthservices.draw(chhealthservicesdata, chhealthservicesoptions);
 
 function resizechhealthservices () {
      
       
           chhealthservices.draw(chhealthservicesdata, chhealthservicesoptions);

    }

    if (window.addEventListener) {
        window.addEventListener('resize', resizechhealthservices, false);
    }
    else if (window.attachEvent) {
        window.attachEvent('onresize', resizechhealthservices);
    }