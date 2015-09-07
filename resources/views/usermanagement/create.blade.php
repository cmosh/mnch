@extends('template')


@section('pageinfo')

 
         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Add Single User</font></div>
        <div class="panel-body">
          
   
{!! Form::open(['url' => 'usermanagement/store']) !!}
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                     {!! Form::text('name',null,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>

            
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">County</label>
              <div class="col-md-6">
                {!! Form::text('county',null,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
<div class="box-body">
         <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>
              <div class="col-md-6">
                {!! Form::text('phone',null,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">

            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
                {!! Form::text('idnum',null,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                {!! Form::email('email',null,array('id'=>'','class'=>'form-control')) !!}
              </div>
            </div>
</div>
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                {!! Form::select('roles',['County User','Data Clerk','Program User', 'System User' ],'countyuser',['countyuser','dataclerk','programuser','systemuser'],array('id'=>'','class'=>'form-control','width'=>'100%')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
         <div class="form-group">
         
              <div class="col-md-12">
            
            {!! Form::submit('Add User',['class' => 'use-address btn btn-primary form-control']) !!}
         </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

         {!! Form::close() !!}
        </div>
      </div>
    </div>

</div>
</div>


 @endsection


@section('js')
 <script type="text/javascript">
//  $('#submit').change(function () {

//     var data = {
//           'name':$('#name').val(),
//          '_token': $('input[name=_token]').val(),
//          'county': $('#county').val(),
//          'email': $('#email').val(),
//          'idnum': $('#idnum').val(),
//          'role': $('#role').val(),
//          'phone': $('#phone').val()

//     };
 
//    $.ajax({
//       url: 'usermanagement/store',
//       type: "post",
//        data: data,
//            success: function(data){
//           alert(data);
   
// }



//  });   


       

// }); </script>
    @endsection