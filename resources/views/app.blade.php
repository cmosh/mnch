<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {!! stylesheet_link_tag('landing') !!}  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
        <a class="navbar-brand" href="/home">MNCH</a>
       


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

              <ul class="nav navbar-nav">
               
                <!--  <li><a href="/home">Dashboard</a></li> -->
                 @if(isset($loc))

                
             <li><a  @if(substr($loc,0,2)=='Ch')
             class="active"
             @endif
              href="/">Child Health Survey</a></li>

             <li><a  @if(substr($loc,0,2)=='Ma')
             class="active"
             @endif 
             href="/mnh">Maternal and Neonatal Health Survey</a></li>
             

             @else
              <li><a  class="active" href="/">Child Health Survey</a></li>
             <li><a href="/mnh">Maternal and Neonatal Health Survey</a></li>
             @endif
              </ul>
         
            </div>
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
               
              <ul class="nav navbar-nav">
          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/self/register">Register</a></li>
          @else
           <li><a href="/home">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/auth/logout">Logout</a></li>
              </ul>
            </li>
          @endif
        </ul>

              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->

      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
          @yield('header')
          </section>

          <!-- Main content -->
          <section class="content">
           @yield('content')
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      @include('template/footer')
    </div><!-- ./wrapper -->

   


   {!!javascript_include_tag('landing')!!}
 

    @yield('js')

  </body>
</html>
