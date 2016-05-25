 <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Annual ORT Corner Management Trends
                    <small>
                   <a id="Year4Change" href="{{config('app.prefix')}}{{config('app.prefix')}}/comparison/CHV2/CHV2_annualtrendsN/col/{{$YearsCount}}" class="btn-primary btn-xs">Launch Comparison</a>
                    
                    </small>
                    </h3>
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">
                  <select class="" style="width: 100%;" name="Year4" id="Year4"> 
                       @foreach($AllYears as $Year)
                       <option value ="{{$YearsCount--}}">{{$Year}}</option>
                        @endforeach
                       </select>


                <div id="annualort"></div>  

                </div><!-- /.box-body -->
                  <div id="ortN" class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        