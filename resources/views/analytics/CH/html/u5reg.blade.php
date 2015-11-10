   <div class="col-md-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Treatment Data in Under 5 Register</h3>
                  <div class="box-tools pull-right">
                    <a id="Year1Change" href="/comparison/CHV2/CHV2_u5Register/col/{{$YearsCount}}" class="btn btn-box-tool">Launch Comparison</a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

               <select class="" style="width: 100%;" name="Year1" id="Year1"> 
                       @foreach($Years as $Year)
                       <option value ="{{$YearsCount--}}">{{$Year}}-{{$Year-2}}</option>
                        @endforeach
                       </select>

              <div id="uRegister"></div>    


                </div><!-- /.box-body -->
                  <div id="u5" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->       