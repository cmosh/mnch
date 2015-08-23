
         var chhealthservicesdata = new google.visualization.DataTable();
        chhealthservicesdata.addColumn('string', 'Owner');
        chhealthservicesdata.addColumn('number', 'Facilities');
        chhealthservicesdata.addRows([
          @foreach ($Ch_healthservices as $Ch_healthservice)
          ['{{$Ch_healthservice->Location}}', {{$Ch_healthservice->Count}}],
          @endforeach          
        ]);

        // Set chart options
        var options = {
                       'width':'100%',
                        'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chhealthservices = new google.visualization.PieChart(document.getElementById('chhealthservices'));
        chhealthservices.draw(chhealthservicesdata, options);
