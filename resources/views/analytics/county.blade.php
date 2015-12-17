

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

                       
                      

      <object  width="100%" id="thesvg" data= "http://41.89.6.233:8000/assets/map.svg" >
                 </object>


               
            </div><!-- /.col (LEFT) --> 

</div>
</div>


              <!-- HIDDEN / POP-UP DIV -->
   