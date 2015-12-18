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
     {!! stylesheet_link_tag('template') !!}  
    

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
    @if(!isset($TheFacility)) {!!javascript_include_tag('template-944623347bd11ea0c378512f08446ba2')!!}
    @else {!!javascript_include_tag('survey_t-d881b20b9826002ef9254acd390d5004')!!}
    @endif
    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
   
    <!-- Bootstrap 3.3.2 JS -->
  

     @yield('javascript')
     
    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>
