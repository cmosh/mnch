@extends('template')
@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
   
@endsection 
@section('content')

<section class="invoice">


          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-globe"></i> Global Command Control Panel
                <small class="pull-right">Date: {{Carbon\Carbon::now()}}</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
             
             <div id="locationres"class="checkbox">
                        <label>
                        Choose Site: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <input id="thecheker" type="checkbox">
                          Internal IP?
                        </label>
                      </div>
              <select id="siteresolver" class="form-control select2">
              	<option>live</option>
              	<option>test</option>
              </select>
              
           
             	   
           
      
               <address>
              
              
                
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
                  <a command="optimise" class="btn btn-app">
                    
                    <i class="fa fa-heart-o"></i> Optimise
                  </a>
                  </td>
                  <td>
                  <a command="clearcache" class="btn btn-app">
                    <i class="fa fa-bomb"></i> Clear Cache
                  </a>
                  </td>
                  <td>
                  <a command="clearresets" class="btn btn-app">
                    <i class="fa fa-bug"></i> Clear Resets
                  </a>
                  </td>
                  <td>
                  <a command="cacheconfig" class="btn btn-app">
                    <i class="fa fa-coffee"></i> Cache Config
                  </a>
                 </td>
                 <td>
                  <a command="clearconfig" class="btn btn-app">
                    <i class="fa fa-futbol-o"></i> Clear Config
                  </a>
                  </td>
                  <td>
                  <a command="routecache" class="btn btn-app">
                   
                    <i class="fa fa-bullhorn"></i> Route Cache
                  </a>
                  </td>
                  <td>

                  <a command="routeclear" class="btn btn-app">
                  
                    <i class="fa fa-cog"></i> Route Clear
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
                      <a command="{{env('APP_ENV')}}rootfolder" class="btn btn-app">
                    <i class="fa fa-folder"></i> Root Folder
                  </a>
                  	</td>
                  <td>
                  <a command="{{env('APP_ENV')}}storage" class="btn btn-app">
                    
                    <i class="fa fa-fire"></i> Storage 
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}uploads" class="btn btn-app">
                    <i class="fa fa-magnet"></i> Uploads
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}memcache" class="btn btn-app">
                    <i class="fa fa-life-ring"></i> Memcached
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}redmin" class="btn btn-app">
                    <i class="fa fa-money"></i> Redmin
                  </a>
                 </td>
                 <td>
                  <a command="{{env('APP_ENV')}}cron" class="btn btn-app">
                    <i class="fa fa-genderless"></i>Cron
                  </a>
                 </td>
                
                  </tr>


                   <tr>
                  <td  style="vertical-align:middle">
                   <i class="menu-icon fa fa-github fa-4x "  style="color:purple"></i>
                  Github
                  </td>
                  	<td>
                      <a command="{{env('APP_ENV')}}update" class="btn btn-app">
                    <i class="fa fa-upload"></i> Update Site
                  </a>
                  	</td>
                  <td>
                  <a command="{{env('APP_ENV')}}reset" class="btn btn-app">
                    
                    <i class="fa fa-recycle"></i> Git Reset
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}branch" class="btn btn-app">
                    <i class="fa fa-chain-broken"></i> Check Branch
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}push" class="btn btn-app">
                    <i class="fa fa-play"></i> Git Push
                  </a>
                  </td>
                  <td>
                  <a command="{{env('APP_ENV')}}testgit" class="btn btn-app">
                    <i class="fa fa-repeat"></i> Test SSH
                  </a>
                 </td>
</tr>

				<tr>
                 <td  style="vertical-align:middle">
                    <i class="fa fa-music fa-4x"  style="color:magenta"></i>
                  Composer &amp; <br>
                  Maintenance
                  </td>
                    <td>
                      <a command="composerinstall" class="btn btn-app">
                    <i class="fa fa-volume-off"></i> Install
                  </a>
                    </td>
                <td>
                      <a command="composerupdate" class="btn btn-app">
                    <i class="fa fa-volume-up"></i> Update
                  </a>
                    </td>

                    <td>
                      <a command="shutdown" class="btn btn-app">
                    <i class="fa fa-pause"></i> Shutdown
                  </a>
                  	</td>
                  	<td>
                      <a command="shutup" class="btn btn-app">
                    <i class="fa fa-bolt"></i> Bring Up
                  </a>
                  	</td>


                  </tr>

                   <tr>
                <td  style="vertical-align:middle">
                    <i class="fa fa-xing fa-4x"  style="color:green"></i>
                  Nginx

                  </td>

                    <td>
                      <a command="nginxtools" class="btn btn-app">
                    <i class="fa fa-cutlery"></i> Tools Setup
                  </a>
                    </td>



                    <td>
                      <a command="nginxrestart" class="btn btn-app">
                    <i class="fa fa-refresh"></i> Restart
                  </a>
                    </td>
                   
        
                    <td>
                      <a command="nginxreload" class="btn btn-app">
                    <i class="fa fa-retweet"></i> Reload
                  </a>
                    </td>

                     <td>
                      <a command="{{env('APP_ENV')}}ndown" class="btn btn-app">
                    <i class="fa fa-retweet"></i> Shutdown Site
                  </a>
                    </td>

                      <td>
                      <a command="{{env('APP_ENV')}}nup" class="btn btn-app">
                    <i class="fa fa-retweet"></i> Serve Site
                  </a>
                    </td>

                    </tr>

                           <tr>
                 <td  style="vertical-align:middle">
                    <i class="fa fa-cubes fa-4x"  style="color:red"></i>
                  Redis Monitor

                  </td>

              
                    <td>
                      <a command="{{env('APP_ENV')}}redis" class="btn btn-app">
                    <i class="fa fa-cubes" style="color:blue"></i> Setup &amp; Start
                  </a>
                    </td>

                      <td>
                      <a command="{{env('APP_ENV')}}redisremove" class="btn btn-app">
                    <i class="fa fa-cubes" style="color:orange"></i> Pause 
                  </a>
                    </td>

                      <td>
                      <a command="{{env('APP_ENV')}}redisreset" class="btn btn-app">
                    <i class="fa fa-cubes" style="color:green"></i> Resume
                  </a>
                    </td>
                 
                
                  </tr>

                   <tr>
                 <td  style="vertical-align:middle">
                    <i class="fa fa-medium fa-4x"  style="color:grey"></i>
                  emcached
                  </td>
                    <td>
                      <a command="MemcachedFlush" class="btn btn-app">
                    <i class="fa fa-eye-slash"></i>(Force Flush)
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

  <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>

<script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();});
</script>

   
   <script type="text/javascript">



function sendcommand(cmd) {

  
 $('#output').html('<i class="fa fa-refresh fa-spin"></i>');
	var env = "{{env('APP_ENV')}}";

		if(env=='local'){
	 if(window.checked) var a ='local_GubanSchool';
	 else var a = 'local_Guban';
	}
	else{

		var a = 'SiteGuban';
	}
	 

	  var data = {
	  	  'connection':a,
          'cmd':cmd,
          'appenv':$('#siteresolver').val(),
         '_token': $('input[name=_token]').val()
       

    };
 
   $.ajax({
      url: '/admin/globcmd',
      type: "post",
       data: data,
           success: function(data){
   	
 			$('#output').html(data);

      }
 
   });   


       

}

$("#thecheker").change(function(){

	 checked = $(this).is(":checked");
	
});

 $('.btn').click(function(){

 	var cmd = $(this).attr('command');

   sendcommand(cmd);
   
   });

   </script>

    
   
@endsection