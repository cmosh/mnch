@extends('template')

@section('content')

<section class="invoice">


          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Command Control Panel
                <small class="pull-right">Date: {{Carbon\Carbon::now()}}</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
             
              <address>
                <strong>{{env('APP_ENV')}} site</strong><br>
                SSH Connection<br>
                Authentication: private key<br>
                
              </address>
            </div><!-- /.col -->
            <div class="col-sm-8 ">
             <div style="width: 100% height: 100%;" class="alert alert-info alert">                   
                     <h4><i class="icon fa fa-outdent"></i> Output</h4>
                   <p id="output"> SSH Output</p>
                  </div>
          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
               
                <tbody>
                  <tr>
                  <td  style="vertical-align:middle">
                    <i class="menu-icon fa fa-adn fa-4x" style="color:orange"></i>
                  Artisan
                  </td>
                  	<td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-pause"></i> Shutdown
                  </a>
                  	</td>
                  <td>
                  <a command="optimise" class="btn btn-app">
                    
                    <i class="fa fa-heart-o"></i> Optimise
                  </a>
                  </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-edit"></i> Clear Cache
                  </a>
                  </td>
                  <td>
                  <a command="clearresets" class="btn btn-app">
                    <i class="fa fa-play"></i> Clear Resets
                  </a>
                  </td>
                  <td>
                  <a command="cacheconfig" class="btn btn-app">
                    <i class="fa fa-repeat"></i> Cache Config
                  </a>
                 </td>
                 <td>
                  <a command="clearconfig" class="btn btn-app">
                    <i class="fa fa-save"></i> Clear Config
                  </a>
                  </td>
                  <td>
                  <a command="routecache" class="btn btn-app">
                   
                    <i class="fa fa-bullhorn"></i> Route Cache
                  </a>
                  </td>
                  <td>

                  <a command="routeclear" class="btn btn-app">
                  
                    <i class="fa fa-barcode"></i> Route Clear
                  </a>
                  </td>
                  <td>
                  </tr>
                 
                 	 <tr>
                  <td  style="vertical-align:middle">
                    <i class="fa fa-pinterest-p fa-4x"  style="color:black"></i>
                  Set Permissions
                  </td>
                  	<td>
                      <a command="rootfolder" class="btn btn-app">
                    <i class="fa fa-pause"></i> Root Folder
                  </a>
                  	</td>
                  <td>
                  <a command="storage" class="btn btn-app">
                    
                    <i class="fa fa-heart-o"></i> Storage 
                  </a>
                  </td>
                  <td>
                  <a command="uploads" class="btn btn-app">
                    <i class="fa fa-edit"></i> Uploads
                  </a>
                  </td>
                  <td>
                  <a command="memcache" class="btn btn-app">
                    <i class="fa fa-play"></i> Memcached
                  </a>
                  </td>
                  <td>
                  <a command="redmin" class="btn btn-app">
                    <i class="fa fa-repeat"></i> Redmin
                  </a>
                 </td>
                
                  </tr>


                   <tr>
                  <td  style="vertical-align:middle">
                   <i class="menu-icon fa fa-github fa-4x "  style="color:purple"></i>
                  Github
                  </td>
                  	<td>
                      <a command="update" class="btn btn-app">
                    <i class="fa fa-pause"></i> Update Site
                  </a>
                  	</td>
                  <td>
                  <a command="reset" class="btn btn-app">
                    
                    <i class="fa fa-heart-o"></i> Git Reset
                  </a>
                  </td>
                  <td>
                  <a command="branch" class="btn btn-app">
                    <i class="fa fa-edit"></i> Check Branch
                  </a>
                  </td>
                  <td>
                  <a command="push" class="btn btn-app">
                    <i class="fa fa-play"></i> Git Push
                  </a>
                  </td>
                  <td>
                  <a command="testgit" class="btn btn-app">
                    <i class="fa fa-repeat"></i> Test SSH
                  </a>
                 </td>
</tr>
                   <tr>
                 <td  style="vertical-align:middle">
                    <i class="fa fa-database fa-4x"  style="color:yellow"></i>
                  My SQL
                  </td>
                  	<td>
                      <a command="mysqldump" class="btn btn-app">
                    <i class="fa fa-pause"></i> Dump Mysql
                  </a>
                  	</td>
                
                  </tr>

                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

         

        
        </section>
    
 {!! Form::open() !!}
       


                         {!! Form::close() !!}




@endsection




@section('javascript')

   
   <script type="text/javascript">



function sendcommand(cmd) {

	 
	  var data = {
          'cmd':cmd,
         '_token': $('input[name=_token]').val(),
       

    };
 
   $.ajax({
      url: '/admin/docmd',
      type: "post",
       data: data,
           success: function(data){
   	
 			$('#output').html(data);

      }
 
   });   


       

}


 $('.btn').click(function(){

 	var cmd = $(this).attr('command');

   sendcommand(cmd);
   
   });

   </script>

    
   
@endsection