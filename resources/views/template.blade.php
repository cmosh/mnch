<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
   @yield('title')
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Maternal,Neonatal and Child Health Surveys Tools Kenya">
    <meta name="keywords" content="MNCH,IMCI,MNH,CH,ChildHealth,Materanal,Neonatal,MNCHKenya,Kenya,MNCHTool,Tool,Surveys,Child,Mother">
    {!! stylesheet_link_tag('template') !!}    
    <link rel="shortcut icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    <link rel="icon" href='{!!asset_path("favicon.ico")!!}' type="image/x-icon">
    @yield('cdns')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue fixed">   
    <div class="wrapper">
    @include('template/header')
      @include ('template/sidebar')
      <div class="content-wrapper">
        <section class="content-header">
         @yield('pageinfo')
        </section>
        <section class="content">
          	@yield('content')
        </section>
      </div>
   @include('template/footer')
     @include('admin/menu')
    </div>
    @if(!isset($Mel)) {!!javascript_include_tag('template')!!}
    @else {!!javascript_include_tag('survey_t')!!}
    @endif
    @yield('javascript')
  </body>
</html>
