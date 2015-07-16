
	@extends('mnh/dashboard')
	@section('pageinfo')
<div> <h1>      Select Facility

            </h1>
</div>
         
  @endsection

@section('content')

    <div class="row">
 <div class ="col-lg-12">
<div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p>Search either by name or county then <u>click the facility<u> to begin assessment</p> 
                </div><!-- /.box-body -->
              </div>
</div>
      </div>   
       
         
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Facilities</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="dataTables_wrapper form-inline dt-bootstrap" id="example1_wrapper">
                  <div class="row">
                  <div class="col-sm-6">
                  <div id="example1_length" class="dataTables_length">
                 
                  </div></div>
                  <div class="col-sm-6">
                  <div class="dataTables_filter" id="example1_filter">
                  
                  </div></div>
                  </div><div class="row">
                  <div class="col-sm-12">
                  <table aria-describedby="example1_info" role="grid" id="example1" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                      <tr role="row">
                      <th aria-label="Name: activate to sort column ascending" style="width: 184.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Name</th>
                      <th aria-sort="descending" aria-label="Name: activate to sort column ascending" style="width: 227.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting_desc">Code</th>
                      <th aria-label="County: activate to sort column ascending" style="width: 200.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">County</th>
                      <th aria-label="Type: activate to sort column ascending" style="width: 157.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Type</th>
                      <th aria-label="Owner: activate to sort column ascending" style="width: 112.333px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Owner</th></tr>
                    </thead>
                    <tbody>
                   
                                       
                 @foreach($AllFacilities as $Facilities)
                   <tr class="even clickable-row " data-href='/mnh/survey' role="row">
                        <td class=""> {{ $Facilities->FacilityName}}</td>
                        <td class="sorting_1"> {{ $Facilities->FacilityCode}}</td>
                        <td> {{ $Facilities->County}}</td>
                        <td> {{ $Facilities->Type}}</td>
                        <td> {{ $Facilities->Owner}}</td>
                      </tr>

                         @endforeach

                     </tbody>


                    <tfoot>
                      <tr><th colspan="1" rowspan="1">Name</th>
                      <th colspan="1" rowspan="1">Code</th>
                      <th colspan="1" rowspan="1">County</th>
                      <th colspan="1" rowspan="1">Type</th>
                      <th colspan="1" rowspan="1">Owner</th></tr>
                    </tfoot>
                  </table></div></div>
                  <div class="row">
                  <div class="col-sm-5">
                  
                  </div><div class="col-sm-7">
                  <div id="example1_paginate" class="dataTables_paginate paging_simple_numbers">
                  <ul class="pagination">
                  <li id="example1_previous" class="paginate_button previous disabled">
                  
                  </li></ul></div></div></div></div></div></div>
                      
                      
                   
              
                    
                 
     





                    @endsection

