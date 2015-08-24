var chsec4malariadata = google.visualization.arrayToDataTable([



        ['Malaria  Availability', 'Available', 'NotAvailable'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label; ?>

          @if($string == 'Artemether + Leumefantrine (AL)' or $string == 'Artesunate Injection' or $string == 'Injection Quinine' )
         ['{{$Ch_sec4_all->Label}}', {{$Ch_sec4_all->Available}}, {{$Ch_sec4_all->NotAvailable}}],
        @endif

        @endforeach       
      ]);

      var options = {
        width: '100%',
        height: 300,
        title: 'Availability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria = new google.visualization.ColumnChart(document.getElementById('chsec4malaria'));
      chsec4malaria.draw(chsec4malariadata, options);

var chsec4malariadata2 = google.visualization.arrayToDataTable([



        ['Malaria Reason', 'Not Ordered', 'Not Received','Expired'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label;
         $stringno=$Ch_sec4_all->NotOrdered;

          $stringnr=$Ch_sec4_all->NotReceived;

          $stringex=$Ch_sec4_all->Expired;

          ?>


          @if($string == 'Artemether + Leumefantrine (AL)' or $string == 'Artesunate Injection' or $string == 'Injection Quinine' )
         <?php 
         if($stringno=='')
              $stringno=0;
         if($stringnr=='')
               $stringnr=0;
         if($stringex=='')
           $stringex=0;
         ?>
          


         ['{{$Ch_sec4_all->Label}}', <?php echo $stringno ?>,<?php echo $stringnr ?>,<?php echo $stringex ?>],
        @endif

        @endforeach       
      ]); 

      var options = {
        width: '100%',
        height: 300,
        title: 'Reasons for Unavailability',
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: 35 },
        isStacked: 'percent'
      };

      var chsec4malaria2 = new google.visualization.ColumnChart(document.getElementById('chsec4malaria2'));
      chsec4malaria2.draw(chsec4malariadata2, options);