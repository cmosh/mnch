@extends('dashboard')


@section('pageinfo')



             <h2>Assessments</h2>

            <br>
            <div class="col-sm-12">
<div class="box box-primary">
<div class="box-body">


                  <table aria-describedby="example1_info" role="grid" id="example1" class="table table-bordered table-striped table-hover dataTable">
                    <thead>
                      <tr role="row">
                      <th aria-label="Assessment ID: activate to sort column ascending" style="width: 184.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Asessment ID</th>
                      <th aria-label="Facility ID: activate to sort column ascending" style="width: 227.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting_desc">Facility ID</th>
                      <th aria-label="Survey: activate to sort column ascending" style="width: 200.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Survey</th>
                      <th aria-label="Assesment Term: activate to sort column ascending" style="width: 157.667px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Assessment Term</th>
                      <th aria-label="Assessor: activate to sort column ascending" style="width: 112.333px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Assessor</th>
                       <th aria-label="Date: activate to sort column ascending" style="width: 112.333px;" colspan="1" rowspan="1" aria-controls="example1" tabindex="0" class="sorting">Date</th></tr>                  
                    </thead>
                    <tbody>
          @foreach($assessments as $assessments)

          	<tr class="even clickable-row "  role="row">
                        <td class=""> {{ $assessments->Assessment_ID}}</td>
                        <td class="sorting_1"> {{ $assessments->Facility_ID}}</td>
                        <td> {{ $assessments->Survey}}</td>
                        <td> {{ $assessments->Assessment_Term}}</td>
                        <td> {{ $assessments->Assessor}}</td>
                        <td> {{ $assessments->Date}}</td>
                        <td><button class="btn btn-primary" href="{{$assessments->Assessment_ID}}">VIEW</button></td>
              </tr>


          @endforeach

          </tbody>

</table>
</div>
</div>
</div>
         
  @endsection

@section('content')