@extends('template')


@section('pageinfo')

 <h1>

             Error!

          
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
   <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
             
                We could not find the page you were looking for.
                Meanwhile, you may <a href="/home">return to dashboard</a>
             
              
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->

@endsection


