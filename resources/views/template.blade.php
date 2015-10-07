<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
   @yield('title')
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/bower_components/admin-lte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/bower_components/admin-lte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

 <script src="/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>

      <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   




    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="/bower_components/admin-lte/dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />

       <style type="text/css">
      input.parsley-success,
      select.parsley-success,
      textarea.parsley-success {
        color: #468847;
        background-color: #DFF0D8;
        border: 3px solid #D6E9C6;
      }

      input.parsley-error,
      select.parsley-error,
      textarea.parsley-error {
        color: #FF0000;
        background-color: #F2DEDE;
        border: 3px solid #FF0000;
      }

      .parsley-errors-list {
        margin: 3px 1 4px 1;
        padding: 1;
        list-style-type: none;
        font-size: 0.9em;
        line-height: 0.9em;
        opacity: 0.2;
        -moz-opacity: 0;
        -webkit-opacity: 0;

        transition: all .3s ease-in;
        -o-transition: all .3s ease-in;
        -ms-transition: all .3s ease-in-;
        -moz-transition: all .3s ease-in;
        -webkit-transition: all .3s ease-in;
      }

      .parsley-errors-list.filled {
        opacity: 1;
      }

      #infoArea {
        color: #B94A48;
        display: none;
      }
	  
	  .parsley-custom-error-message, .parsley-required{
		 font-style:bold; 
		color: #FF0000;  
	  }
    </style>

    @yield('cdns')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
   
    <body class="skin-blue fixed">
   
    <div class="wrapper">

      <!-- Main Header -->
    @include('template/header')
      <!-- Left side column. contains the logo and sidebar -->
      <!--sidebar-->
      @include ('template/sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         @yield('pageinfo')

         
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          	@yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
   @include('template/footer')

      <!-- Control Sidebar -->
     @include('admin/menu')
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
   
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bower_components/admin-lte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/admin-lte/dist/js/app.min.js" type="text/javascript"></script>
     

     @yield('javascript')
     
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>
