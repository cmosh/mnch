

@extends('app')

@section('pageinfo')

 <h1>

             Error!

          
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
   <div class="error-page">
            <h2 class="headline text-yellow"> 403</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Sorry! You are unathorised to view this content. Contact the site administrator for more information.</h3>
             
                This action has been recorded and you will be reported.
                Meanwhile, you may <a href="{{config('app.prefix')}}/home">return to your dashboard</a>
             
              
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->

@endsection


