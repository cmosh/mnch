<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="This is a national health tool that has been deployed by Clinton Health Access Intiative(CHAI) and the Ministry of Health in Kenya. Its purpose is to evaluate the effectiveness of facilities and healthworkers in administering prenatal and postnatal healthcare.">
    <meta name="keywords" content="MNCH,IMCI,MNH,CH,ChildHealth,Materanal,Neonatal,MNCHKenya,Kenya,MNCHTool,Tool,Surveys,Child,Mother">
     <link rel="shortcut icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    <link rel="icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    {!! stylesheet_link_tag('landing') !!}  
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <title>Maternal,Neonatal and Child Health Surveys Tools Kenya</title>
  </head> 
  <body class="skin-blue fixed layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" style="margin-right:0px;">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home" style="color:white">MNCH</a></div>

       
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

              <ul class="nav navbar-nav">
               
           
                 
              <li><a  href="/">Child Health Survey</a></li>
             <li><a href="/mnh">Maternal and Neonatal Health Survey</a></li>

             <li><a href="/imci">IMCI Survey</a></li>
          

             <li><a href="/rawdata">Raw Data</a></li>
          
              @if (config('app.env')=='test'||config('app.mak'))
           <li> <a href="/test/serve/"  role="button">
              <span><button  class="btn btn-block btn-success btn-xs">serve assets</button></span>  
          </a> </li>
          <li> <a href="/test/stop/"   role="button">
              <span><button  class="btn btn-block btn-danger btn-xs">stop assets</button></span>  
          </a> </li>
          @endif

              </ul>
         
            </div>
           
              <div class="navbar-custom-menu">
               
              <ul class="nav navbar-nav">
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/self/register" style="margin-right:5px;">Register</a></li>
          @else
           <li><a href="/home">My Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
              <li><a href="/usermanagement/changepass">Change Password</a></li>
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>

              </div>
          </div>
        </nav>
        <div class="title-main">
          <h2 align="middle">@yield('header')</h2>
          </div>
      </header>
    

      <div class="content-wrapper">
        <div class="container-fluid">
        
          <section class="content">
          <div class="row"><div class="title-trans"></div></div>
           @yield('content')
          </section>
        </div>
      </div>
      @include('template/footer')
    </div>

   


   {!!javascript_include_tag('landing')!!}
 

    @yield('js')
<style type="text/css">
  
  @media only screen and (min-width: 692px) and (max-width:851px) {
   .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:210px;

  } 
}
@media only screen and (min-width: 893px) and (max-width:1052px){
  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:170px;

  }

}

@media only screen and (min-width: 852px) and (max-width:892px){

  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:110px;

  }
}


  .title-main{
    width:100%;
    height:50px;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 0.7);
    margin-top: 0;
    margin-bottom: 0;
    border-bottom: medium solid #181818;
    


  }
  .title-main>h2{
    margin-top: 0;
    padding-top: 10px;
    margin-bottom: 0
  }
  .title-trans{
    background-color: transparent;
    margin-top: 0;
    margin-bottom: 0;
    width:100%;
    height:50px;

  }
  .conc{
    opacity: 0.9 !important;
  }

  #info-title{
    max-height: 70px;
    
  }
  #facilitiesBox,#info-title{
    margin:0;
  }
  #staffTraining,#healthServices{
    margin-bottom:0;
  }
  
</style>
  </body>
</html>
