   <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Non Diarrhoea Cases Treated with Zinc + ORS
                  <small>
                     <a id="Year3Change" href="{{config('app.prefix')}}/comparison/CHV2/CHV2_u5RegisterN/col/{{$YearsCount}}" class="btn-primary btn-xs">Launch Comparison</a>
                    
                    </small>
                  </h3>
                  
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">
                    <select class="" style="width: 100%;" name="Year3" id="Year3"> 
                       @foreach($Years as $Year)
                       <option value ="{{$YearsCount--}}">{{$Year}}-{{$Year-2}}</option>
                        @endforeach
                       </select>


              <div id="NonDiarrhoea"></div>     
                </div><!-- /.box-body -->
                  <div id="u5N" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       