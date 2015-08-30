  <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Annual Treatment Trends</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">

                   <select class="" style="width: 100%;" name="Year2" id="Year2"> 
                       @foreach($AllYears as $Year)
                       <option value ="{{$YearsCount--}}">{{$Year}}</option>
                        @endforeach
                       </select>

                <div id="annual"></div>  

                </div><!-- /.box-body -->
                  <div id ="anT" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        