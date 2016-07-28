<select style="width:100%" multiple name="graphs" id="graphs" hidden>
  <option selected value="CHV2_lort">CHV2_lort</option>
</select>

<select style="width:100%"  name="theyears" id="theyears" hidden>
  <option selected value="not">year1</option>
</select>

<select style="width:100%" multiple name="thetypes" id="thetypes" hidden>
  <option selected value="pie">year1</option>
</select>

  <div id="dialog" title="Dialog Title"></div>
    

                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>LOCATION OF ORT CORNER</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

   <div class="col-md-12" >
               <div class="box box-success" >
                <div class="box-header with-border">
                  <h3 class="box-title">Location
                   <small class="cmpr">
                     <a href="{{config('app.prefix')}}/comparison/CHV2/CHV2_lort/pie/" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                   <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button> 
                  </h3>
                  
                    
                </div>
                <div class="box-body">

                <div id="CHV2_lort"></div>  

                </div><!-- /.box-body -->
                  <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        