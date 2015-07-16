<html>
  <head>
    <meta charset="UTF-8">
    <title>MNCH | CH</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/bower_components/admin-lte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/bower_components/admin-lte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="/bower_components/admin-lte/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>
 
    <!-- Load LocalScroll -->
    <script src="http://flesler-plugins.googlecode.com/files/jquery.localscroll-1.2.7-min.js"></script>
    
  </head>




    
    <body class="skin-blue fixed">
        <!-- header logo: style can be found in header.less -->
       
 @include('ch/header')
       
        <div class="wrapper">
            <!-- Left side column. contains the logo and sidebar -->
            @include ('ch/sidebar')
            <!-- Right side column. Contains the navbar and content of the page -->
            <!--paste here!!!! -->
            <!-- /.box-primary1 -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                 
                   @yield('pageinfo')
                


                <!-- Main content -->
                <section class="content">
                    @yield('content')







                    </section>
                    </aside>
                
              
           
            <!-- /.box-primary2 -->
        
        </div> 
        <!-- /.row -->
        <!-- /.content -->
        <!-- /.content-wrapper -->
       <script src="/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bower_components/admin-lte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/admin-lte/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/bower_components/admin-lte/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
       
      });
    </script>
 


 <script type = "text/javascript">

       jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.document.location = $(this).data("href");
    });
});

         </script>
        <!-- Morris.js charts -->
    </body>

</html>