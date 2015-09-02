@extends('template')


@section('pageinfo')

 
         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Add Single User</font></div>
        <div class="panel-body">
          
   
{!! Form::open() !!}
            <div class="form-group">
              <label class="col-md-4 control-label">Name</label>
              <div class="col-md-6">
                <input class="form-control" id="name" name="name" value="" type="text">
              </div>
            </div>

            

            <div class="form-group">
              <label class="col-md-4 control-label">County</label>
              <div class="col-md-6">
                <input class="form-control" id="county" name="county" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Phone Number</label>
              <div class="col-md-6">
                <input class="form-control" id="phone" name="PhoneNumber" type="text">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">ID Number</label>
              <div class="col-md-6">
                <input class="form-control" id="idnum" name="IDNumber" type="text">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">E-Mail Address</label>
              <div class="col-md-6">
                <input class="form-control" id = "email" name="email" value="" type="email">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Role</label>
              <div class="col-md-6">
                <select id="role" class="form-control select2 "  name="role" > 
                      <option value ="systemuser" id ="filter0" >System User</option>
                       <option value ="programuser" id ="filter1" >Program User</option>
                        <option value ="dataclerk" id ="filter2" >Data Clerk</option>
                         <option value ="countyuser" id ="filter3" >County User</option>
                       </select>
              </div>
            </div>
          <br>
            <div class="box-body">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" id ="submit" class="btn btn-primary">
                Add User
                </button>
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
//  <script type="text/javascript">
// $('#submit').click( function () {

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
//         // alert(data);
     
   
// }



//  });   


       

// }
// </script>
    @endsection