     <select style="width:100%" multiple name="graphs" id="graphs" hidden>
  <option selected value="CHV2_DTreatmentCommodities">CHV2_Guidelines</option>
  <option selected value="CHV2_DTreatmentAvailability">CHV2_types</option>  
</select>

<select style="width:100%"  name="theyears" id="theyears" hidden>
  <option selected value="not">year1</option>
</select>

<select style="width:100%" multiple name="thetypes" id="thetypes" hidden>
  <option selected value="colfullstack">year1</option>
  <option selected value="colfullstack">year2</option>  
</select>

  <div id="dialog" title="Dialog Title"></div>
    

                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>DIARRHOEA TREATMENT COMMODITIES</b></h2></center>
                        <br>
                        </div>
                        </div>

            <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Commodities
                   <small class="cmpr">
                      <a href="{{config('app.prefix')}}{{config('app.prefix')}}/comparison/CHV2/CHV2_DTreatmentCommodities/colfullstack/" class="btn-primary btn-xs">Launch Comparison</a>
                    
                    </small>
                  </h3>
                  
                  <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">

              <div id="CHV2_DTreatmentCommodities"></div>     
                </div><!-- /.box-body -->

                 <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>

              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       

                 <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Availability</h3>
                  <small class="cmpr">
                   <a href="{{config('app.prefix')}}{{config('app.prefix')}}/comparison/CHV2/CHV2_DTreatmentAvailability/colfullstack/" class="btn-primary btn-xs">Launch Comparison</a>
                    
                    </small>
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">

                <div id="CHV2_DTreatmentAvailability"></div>  

                </div><!-- /.box-body -->
                  <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        
</div>

