
   <div class="row">

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




 <div class="col-md-12">
<!--<div > in {{count($SubmittedCounties)}} counties</div>-->
  <!-- small box -->
               <div class="small-box bg-blue">
                <div class="inner">
                  <h3> <p id="X">Data from {{$SubmittedCount}} healthworkers</p><sup style="font-size: 20px"></sup></h3>
                 
                </div>
             
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
   
