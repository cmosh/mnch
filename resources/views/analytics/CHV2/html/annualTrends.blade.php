  <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Annual Treatment Trends
                     <small>
                   <a id="Year2Change" href="{{config('app.prefix')}}/comparison/CHV2/CHV2_annualtrends/colfullstack/{{$YearsCount}}" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                  </h3>
                 
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
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