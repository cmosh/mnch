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
 

   

  </body>
</html>
