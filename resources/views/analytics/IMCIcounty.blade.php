

  <div class="form-group" style="display:none;" > 
  <select class="form-control select2 " style="width: 100%;" name="County" id="County"> 
   <option value="All" selected>All Counties</option>
     @foreach($SubmittedCounties as $SubmittedCounty)
     <option value ="{{$SubmittedCounty}}" id ="box{{$SubmittedCounty}}" >{{$SubmittedCounty}}</option>
     @endforeach
     </select>
     </div>
     <div class="form-group" style="display:none;" > 
     <select class="form-control  " style="display:none;" name="Term" id="Term"> 
     <option value="Baseline">Baseline</option>
     </select>
     </div>




 <div class="col-md-3">
<!--<div > in {{count($SubmittedCounties)}} counties</div>-->
  <!-- small box -->


               <div  class="small-box bg-blue" style="margin-bottom:0px">
                <div class="inner" hidden="">
                  <h3> <p id="X">Data from {{$SubmittedCount}} healthworkers</p><sup style="font-size: 20px"></sup></h3>                                    
                 
                </div>
             
              </div>

              <div class="form-group" hidden> <select class="form-control" style="width: 100%;" name="Data" id="Data"> 
     
                   

          <option value ="1" id ="box1" >HCWs Trained and Assessed</option>
          <option value ="2" id ="box2" >Work Station Information</option>
          <option value ="3" id ="box3" >Sick Child Observation(2 months-5 yrs)</option>
          <option value ="4" id ="box4" >Sick Child Classification(2 months-5 yrs)</option>
          <option value ="5" id ="box5" >Sick Child Observation(up to 2 months)</option>
          <option value ="6" id ="box6" >Sick Child Classification(up to 2 months)</option>
          <option value ="7" id ="box7" >Weight Taken (up to 2 months)</option>
          <option value ="8" id ="box8" >Special Treatment Needs (up to 2 months)</option>
          <option value ="9" id ="box9" >Observation of Case Management</option>
          <option value ="10" id ="box10" >Consultation: Observation</option>
          <option value ="11" id ="box11" >Consultation: Certification Criteria</option>
          <option value ="12" id ="box12" >Consultation: Assesment Outcome</option>
          <option value ="13" id ="box13" >Exit Interviews: Interview Questions</option>
          <option value ="14" id ="box14" >Exit Interviews: Certification</option>

                        
                       </select></div>

<div id="Data1"></div>
</div>
              
<!-- 
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
                </div>/.box-body

                 <div class="box-body" >   
           



                       
                   

      <object  width="100%" id="thesvg" data= '{!!asset_path("map.svg")!!}'>
                 </object>


               
            </div>/.col (LEFT) 

</div>
</div> -->


              <!-- HIDDEN / POP-UP DIV -->
   
