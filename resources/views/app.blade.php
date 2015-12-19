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
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">MNCH</a></div>

       
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

              <ul class="nav navbar-nav">
               
           
                 
              <li><a  href="/">Child Health Survey</a></li>
             <li><a href="/mnh">Maternal and Neonatal Health Survey</a></li>

             <li><a href="/imci">IMCI Survey</a></li>
          

             <li><a href="/rawdata">Raw Data</a></li>
          
              

              </ul>
         
            </div>
           
              <div class="navbar-custom-menu">
               
              <ul class="nav navbar-nav">
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/self/register">Register</a></li>
          @else
           <li><a href="/home">My Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>

              </div>
          </div>
        </nav>
      </header>
    

      <div class="content-wrapper">
        <div class="container-fluid">
        
          <section class="content-header">
          @yield('header')
          </section>

         
          <section class="content">
           @yield('content')
          </section>
        </div>
      </div>
      @include('template/footer')
    </div>

   


   {!!javascript_include_tag('landing')!!}
 

    @yield('js')

  </body>
</html>
