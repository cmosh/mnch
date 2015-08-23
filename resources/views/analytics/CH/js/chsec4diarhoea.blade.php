var chsec4diarhoeadata = google.visualization.arrayToDataTable([



        ['Diarhoea Treatment Availability', 'Available', 'NotAvailable'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label; ?>

          @if($string == 'Low Osmolarity Oral Rehydration Salts (ORS)' or $string == 'RESOMAL' or $string == 'Vitamin A' or $string == 'Zinc Sulphate' or $string == 'ORS & Zinc Co-pack' or $string == 'Rota Virus Vaccine')
         ['{{$Ch_sec4_all->Label}}', {{$Ch_sec4_all->Available}}, {{$Ch_sec4_all->NotAvailable}}],
        @endif

        @endforeach       
      ]);

      var options = {
        width: '100%',
        height: 300,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var chsec4diarhoea = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea'));
      chsec4diarhoea.draw(chsec4diarhoeadata, options);

var chsec4diarhoeadata2 = google.visualization.arrayToDataTable([



        ['Diarhoea Treatment Reason', 'Not Ordered', 'Not Received','Expired'],

         @foreach($Ch_sec4_alls as $Ch_sec4_all) 

         <?php $string=$Ch_sec4_all->Label;
         $stringno=$Ch_sec4_all->NotOrdered;

          $stringnr=$Ch_sec4_all->NotReceived;

          $stringex=$Ch_sec4_all->Expired;





          ?>


          @if($string == 'Low Osmolarity Oral Rehydration Salts (ORS)' or $string == 'RESOMAL' or $string == 'Vitamin A' or $string == 'Zinc Sulphate' or $string == 'ORS & Zinc Co-pack' or $string == 'Rota Virus Vaccine')
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
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: 'percent'
      };

      var chsec4diarhoea2 = new google.visualization.ColumnChart(document.getElementById('chsec4diarhoea2'));
      chsec4diarhoea2.draw(chsec4diarhoeadata2, options);


