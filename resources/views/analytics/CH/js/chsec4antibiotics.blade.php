var chsec4antibioticsdata = google.visualization.arrayToDataTable([



        ['Antibiotics  Availability', 'Available', 'NotAvailable'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label; ?>

          @if($string == 'Tablet Metronidazole' or $string == 'Syrup Metronidazole' or $string == 'Syrup Amoxicillin' or $string == 'Syrup Cotrimoxazole' or $string == 'Tablet Amoxicillin' or $string == 'Tablet Paed Cotrimoxazole')
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

      var chsec4antibiotics = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics'));
      chsec4antibiotics.draw(chsec4antibioticsdata, options);

var chsec4antibioticsdata2 = google.visualization.arrayToDataTable([



        ['Antibiotics Reason', 'Not Ordered', 'Not Received','Expired'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label;
         $stringno=$Ch_sec4_all->NotOrdered;

          $stringnr=$Ch_sec4_all->NotReceived;

          $stringex=$Ch_sec4_all->Expired;





          ?>


          @if($string == 'Tablet Metronidazole' or $string == 'Syrup Metronidazole' or $string == 'Syrup Amoxicillin' or $string == 'Syrup Cotrimoxazole' or $string == 'Tablet Amoxicillin' or $string == 'Tablet Paed Cotrimoxazole')
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

      var chsec4antibiotics2 = new google.visualization.ColumnChart(document.getElementById('chsec4antibiotics2'));
      chsec4antibiotics2.draw(chsec4antibioticsdata2, options);






