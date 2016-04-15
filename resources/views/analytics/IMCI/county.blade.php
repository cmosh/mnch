

<div class="col-md-4">
               <div class="box box-danger">
                <div class="box-header with-border">
                  
                    

                  <h3 class="box-title">Map</h3>
                  <div class="box-tools pull-right">
                
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

              <div id="countybox"></div>     
                </div><!-- /.box-body -->

                 <div class="box-body" >   
           



                       
                       @include('analytics/IMCI/popbox')  

      <object  width="100%" id="thesvg" data= '{!!asset_path("map.svg")!!}'>
                 </object>


               
            </div><!-- /.col (LEFT) --> 

</div>
</div>


              <!-- HIDDEN / POP-UP DIV -->
   