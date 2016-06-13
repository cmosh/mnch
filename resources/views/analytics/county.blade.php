

<div class="col-md-3">
               <div class="box box-danger">
                <div class="box-header with-border">
                  
                    

                  <h3 class="box-title">Data</h3>
                  
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
                      @foreach($SubmittedCounties as $SubmittedCounty)

          <option value ="{{$SubmittedCounty}}" id ="box{{$SubmittedCounty}}" >{{$SubmittedCounty}}</option>
                        @endforeach
                       </select></div>



                        <div class="form-group" > <select class="form-control select2 " style="width:100%;" name="Term" id="Term"> 
                      
                       @foreach($terms as $term)

          <option value ="{{$term}}">{{$term}}</option>
                        @endforeach

                
                  
                    
                     
                       </select></div>

  <div class="form-group" > <select class="form-control select2 " style="width: 100%;" name="Data" id="Data"> 
        <option value="{{array_keys($links)[0]}}" selected>{{array_shift($links)}}</option>
                      @foreach($links as $key => $link)

          <option value ="{{$key}}" id ="box{{$key}}" >{{$link}}</option>
                        @endforeach
                       </select></div>



                     

      


               
            </div><!-- /.col (LEFT) --> 

</div>


               <div class="box box-danger" >
                <div class="box-header with-border">
                  <h3 class="box-title">Map</h3>
                <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>  
                </div>
                <div class="box-body">
<object  width="50%" class="center"  id="thesvg" data= '{!!asset_path("map.svg")!!}' >
                 </object>
                  @include('analytics/popbox') 
                </div><!-- /.box-body -->
                 
              </div><!-- /.box -->
</div>



              <!-- HIDDEN / POP-UP DIV -->
   


   <div class="col-md-9" >

   <div id="facilitiesBox" class="small-box bg-blue">
   <div class="inner">
   <h3> <p id="X">Data from {{$SubmittedCount}} facilities in {{count($SubmittedCounties)}} counties</p><sup style="font-size: 20px"></sup></h3>
   <span><button id="fcbtn" class="btn btn-block btn-warning btn-xs">View</button></span>
   </div>
   </div>

   <div id="chartmaker">
    <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title">Please Wait
                  
                  </h3>
                  
                
                </div>
                <div class="box-body">

             
                </div><!-- /.box-body -->

                 <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>

              </div><!-- /.box -->
     </div>
     </div>
   

