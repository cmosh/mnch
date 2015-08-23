  var ftypesdata = new google.visualization.DataTable();
        ftypesdata.addColumn('string', 'Type');
        ftypesdata.addColumn('number', 'Facilities');
        ftypesdata.addRows([
          @foreach ($Ch_types as $Ch_type)
          ['{{$Ch_type->Type}}', {{$Ch_type->Count}}],
          @endforeach          
        ]);

        // Set chart options
        var options = {
                       'width':'100%',
                       'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ftypes = new google.visualization.PieChart(document.getElementById('ftypes'));
        ftypes.draw(ftypesdata, options);