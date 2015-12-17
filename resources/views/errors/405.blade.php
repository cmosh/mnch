

@extends('app')

@section('pageinfo')

 <h1>

             Error!

          
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
   <div class="error-page">
            <h2 class="headline text-yellow"> 405</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Sorry! You are not allowed to access this resource with this method.</h3>
             
                We do not allow this action without proper authorisation.
                Meanwhile, you may <a href="/home">return to your dashboard</a>
             
              
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->

@endsection


