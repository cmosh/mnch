

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
           

<div class="form-group" > <select class="form-control select2 " style="width: 100%;" name="County" id="County"> 
        <option value="All" selected>All Counties</option>
                      @foreach($SubmittedCounties as $SubmittedCountie)

                       <option value ="{{$SubmittedCountie->County}}" id ="box{{$SubmittedCountie->County}}" >{{$SubmittedCountie->County}}</option>
                        @endforeach
                       </select></div>



                        <div class="form-group" > <select class="form-control select2 " style="width:100%;" name="Term" id="Term"> 
                      
                     <option value="Baseline">Baseline</option>
                     <option value="Midterm">Midterm</option>
                     <option value="Endterm">Endterm</option>
                    
                     
                       </select></div>

                        <div id="pop-up" style="height:80px; width:60%;">
     

                     <p class="text-center" id="countyname">
                        
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Surveyed Facilities</span>
                        <span class="progress-number" id="svFa"></span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" id="svFaBar" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    
                    </div>
                      

      <object  width="100%" id="thesvg" data="/img/map.svg">
                 </object>


               
            </div><!-- /.col (LEFT) --> 

</div>
</div>

                        <!-- HIDDEN / POP-UP DIV -->
   