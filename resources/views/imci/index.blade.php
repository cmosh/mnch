
	@extends('imci/dashboard')
	@section('pageinfo')
<div> <h1>      Select Participant

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
                 <p>Search either by name or facility then <u>click the participant<u> to begin assessment</p> 
                </div><!-- /.box-body -->
              </div>
</div>
      </div>   
       
         
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Participants</h3>
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
                      <th aria-sort="descending" aria-label="Facility: activate to sort column ascending" style="width: 227.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting_desc">Facility</th>
                      <th aria-label="Number: activate to sort column ascending" style="width: 200.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Number</th>
                      <th aria-label="email: activate to sort column ascending" style="width: 157.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">email</th>
                      <th aria-label="Training Site: activate to sort column ascending" style="width: 112.333px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Training Site</th></tr>
                    </thead>
                    <tbody>
                   
                                       
                 @foreach($AllParticipants as $Participants)
                   <tr class="even clickable-row " data-href='/imci/survey' role="row">
                        <td class=""> {{ $Participants->Name_of_Participant}}</td>
                        <td class="sorting_1"> {{ $Participants->FacilityName}}</td>
                        <td> {{ $Participants->mobile_Number}}</td>
                        <td> {{ $Participants->email_address}}</td>
                        <td> {{ $Participants->training_site}}</td>
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

