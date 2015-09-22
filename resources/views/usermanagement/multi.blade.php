@extends('template')


@section('pageinfo')

 
         
  @endsection


  @section('cdns')


@endsection 

@section('content')
  <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">

                  Add Multiple Users

                  </h3>
                </div> 
                <div class="box-body"> 



                <div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p style="color:red">Upload an Excel file with the user details, using the format below.</p> 
                 <p>Download the excel template <u><a href="/usermanagement/export_template">here</a></u></p> 

            </div><!-- /.box-body -->
              </div>


              <center>
              <div class="col-xs-12">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>

                     
                        
                        <th >Name</th>
                        <th>County</th>
                         <th>Phone Number</th>
                         <th>ID Number</th>
                         <th>Email</th>
                         <th>Role</th>
                    
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        
                       

                        <tr>
                        <td >Username 1</td>
                        <td >Nairobi</td>
                        <td>700100101</td>
                        <td>34342121</td>
                        <td>email1@site.com</td>
                        <td>countyuser</td>

                      
                       </tr>

                       <tr>
                        <td >Username 2</td>
                        <td >Machakos</td>
                        <td>700100102</td>
                        <td>34342122</td>
                        <td>email2@site.com</td>
                        <td>dataclerk</td>

                      
                       </tr>

                       <tr>
                        <td >Username 3</td>
                        <td >Nakuru</td>
                        <td>700100103</td>
                        <td>34342123</td>
                        <td>email3@site.com</td>
                        <td>programuser</td>

                      
                       </tr>


                       <tr>
                        <td >Username 4</td>
                        <td >Samburu</td>
                        <td>700100104</td>
                        <td>34342124</td>
                        <td>email4@site.com</td>
                        <td>systemuser</td>

                      
                       </tr>

                     
                         





   

                    

                     
                    </tbody>
                    
                  </table>

              </div> 
              </center>   
              <br>

<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
          <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <div class="secure"><b style="color:red">Upload Excel File</b></div>
        {!! Form::open(array('url'=>'usermanagement/multi_upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
          {!! Form::file('image') !!}
    <p class="errors">{!!$errors->first('image')!!}</p>
  @if(Session::has('error'))
  <p class="errors">{{$error_msg}}</p>
  @endif
        </div>
        </div>
        <div id="success"> </div>
        <p class="errors">{{$error_msg}}</p>
      {!! Form::submit('Next', array('class'=>'use-address btn btn-primary form-control')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>
</div>
</div>




  @endsection
 