  <select style="width:100%" multiple name="graphs" id="graphs" hidden>
  <option selected value="CHV2_u5Register">CHV2_Guidelines</option>
  <option selected value="CHV2_annualtrends">CHV2_types</option>  
</select>

<select style="width:100%"  name="theyears" id="theyears" hidden>
  <option selected value="nots">year1</option>
</select>

<select style="width:100%" multiple name="thetypes" id="thetypes" hidden>
  <option selected value="col">year1</option>
  <option selected value="col">year2</option>  
</select>

  <div id="dialog" title="Dialog Title"></div>
    

                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>DOCUMENTED FACILITY LEVEL DATA (Diarrhoea)</b></h2></center>
                        <br>
                        </div>
                        </div>

            <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Treatment Data in Under 5 Register
                    <small class="cmpr">
                    <a id="Year1Change" href="{{config('app.prefix')}}/comparison/CHV2/CHV2_u5Register/col/{{$YearsCount}}" class="btn-primary btn-xs">Launch Comparison</a> 
                    </small>
                  </h3>
                  
                    <!-- <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button> -->
                </div>
                <div class="box-body">

               <select class="" style="width: 100%;" name="Year1" id="Year1"> 
                       @foreach($Years as $Year)
                       <option value ="{{$YearsCount--}}">{{$Year}}-{{$Year-2}}</option>
                        @endforeach
                       </select>

              <div id="CHV2_u5Register"></div>    


                </div><!-- /.box-body -->
                  <div id="u5" class="y1 wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       


              <div class="col-md-6" >
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Annual Treatment Trends
                     <small class="cmpr">
                   <a id="Year2Change" href="{{config('app.prefix')}}/comparison/CHV2/CHV2_annualtrends/colfullstack/{{$YearsCount}}" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                  </h3>
                 
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">
              
                   <select class="" style="width: 100%;" name="Year2" id="Year2"> 
                       @foreach($AllYears as $Year)
                       <option value ="{{$YearsCount}}">{{$Year}}</option>
                        @endforeach
                       </select>
              
                <div id="CHV2_annualtrends"></div>  
              
                </div>
                  <div id ="anT" class="y2 wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div>
                          </div> 
                          <!-- </div> -->


        