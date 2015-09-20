@extends('template')


@section('pageinfo')

 
@endsection         
 

@section('content')



          
          
<div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading" style="background-color: #3C8DBC;"> <font color="#FFFFFF">Change Password</font></div>
        <div class="panel-body">
        
   <div class="box-body">
           <div class="col-md-3" style="float:right">
            
            <button  id="cancel" class="btn btn-primary form-control">Cancel Changes</button>
         </div>
   </div>
{!! Form::open(['url' => 'usermanagement/update/pass/'.$user[0]->id]) !!}
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Old Password</label>

              <div class="col-md-6">
                   
                     {!! Form::password('oldpass',null,array('id'=>'oldpass','class'=>'form-control')) !!}
                      {!! Form::password('oldpasshide',null,array('id'=>'oldpass','class'=>'form-control','style' => 'display:none;')) !!}

              </div>
            </div>
</div>
          
   
<div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">New Password</label>
              <div class="col-md-6">
                {!! Form::password('newpass', null,array('id'=>'newpass','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group">
              <label class="col-md-4 control-label">Confrirm New Password</label>
              <div class="col-md-6">
                {!! Form::password('newpasscon',null,array('id'=>'newpasscon','class'=>'form-control')) !!}
              </div>
            </div>
            </div>
            
             {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

        
  


 @endsection


@section('javascript')



<script type="text/javascript">



 </script>




@endsection