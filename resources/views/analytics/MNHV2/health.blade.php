<select style="width:100%" multiple name="graphs" id="graphs" hidden>
  <option selected value="MNHV2_HMan">CHV2_ownership</option>
</select>

<select style="width:100%"  name="theyears" id="theyears" hidden>
  <option selected value="not">year1</option>
</select>

<select style="width:100%" multiple name="thetypes" id="thetypes" hidden>
  <option selected value="barfullstack">year1</option>
</select>

  <div id="dialog" title="Dialog Title"></div>
    

                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>FACILITY INFORMATION</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

   <div class="col-md-12" >
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Health Facility Management 
                    <small class="cmpr">
                   <a href="{{config('app.prefix')}}{{config('app.prefix')}}/comparison/MNHV2/MNHV2_HMan/colfullstack/" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                  </h3>
                  
                     <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">

              <div id="MNHV2_HMan"></div>     
                </div><!-- /.box-body -->
                  <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
                
              </div>

              <!-- /.box -->
            </div>
            </div>