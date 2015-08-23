var ownershipdata = new google.visualization.DataTable();
        ownershipdata.addColumn('string', 'Owner');
        ownershipdata.addColumn('number', 'Facilities');
        ownershipdata.addRows([
          @foreach ($Ch_owners as $Ch_owner)
          ['{{$Ch_owner->Owner}}', {{$Ch_owner->Count}}],
          @endforeach          
        ]);

        // Set chart options
        var options = {
                       'width':'100%',
                        'box-sizing': 'border-box;',
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var ownership = new google.visualization.PieChart(document.getElementById('ownership'));
        ownership.draw(ownershipdata, options);