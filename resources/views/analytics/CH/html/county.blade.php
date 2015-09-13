

<div class="col-md-12">
               <div class="box box-danger">
                <div class="box-header with-border">

                  <h3 class="box-title">Counties</h3>
                  <div class="box-tools pull-right">
                
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

              <div id="countybox"></div>     
                </div><!-- /.box-body -->

                 <div class="box-body" >

                 <div class="col-md-4">
                 <object  width="100%" id="thesvg" data="/img/map.svg">
                 </object>


     


                 </div>

             <div class="col-md-8">     

<div class="form-group" > <select class="form-control select2 " style="width: 100%;" name="County" id="County"> 
        <option value="All" selected>All Counties</option>
                      @foreach($SubmittedCHCounties as $SubmittedCHCountie)

                       <option value ="{{$SubmittedCHCountie->County}}" id ="box{{$SubmittedCHCountie->County}}" >{{$SubmittedCHCountie->County}}</option>
                        @endforeach
                       </select></div>



                        <div class="form-group" > <select class="form-control select2 " style="width:100%;" name="Term" id="Term"> 
                       <option value="All" selected>All Terms</option>
                     <option value="Baseline">Baseline</option>
                     <option value="Midterm">Midterm</option>
                     <option value="Endterm">Endterm</option>
                    
                     
                       </select></div>



                  <table class="table table-striped">
                    <tbody><tr>
                    
                      <th>County</th>
                      <th>Term</th>
                      <th>Completed Surveys</th>
                      <th >Incomplete Surveys</th>
                       <th>Facilities</th>
                    </tr>
                     @foreach ($SurveysDone as $Survey)
                    <tr>
                     
                      <td>{{$Survey->County}}</td>
                      <td>{{$Survey->Assessment_Term}}</td>
                      <td>{{$Survey->Submitted}}</td>
                      <td>{{$Survey->Not_Submitted}}</td>
                       <td>{{$Survey->Total_Facilities}}</td>
                    </tr>
                    @endforeach
                   
                   
                   
                  </tbody></table>
              </div>
              <!-- /.box -->
            </div><!-- /.col (LEFT) --> 

</div>
</div>

                        <!-- HIDDEN / POP-UP DIV -->
    <div id="pop-up">
     

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