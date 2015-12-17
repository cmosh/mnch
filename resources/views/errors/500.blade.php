

@extends('app')

@section('pageinfo')

 <h1>

             Error!

          
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
   <div class="error-page">
            <h2 class="headline text-yellow"> 500</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Sorry! Internal server error, please retry the action later</h3>
             
                We could not perform the action you initiated.
                Meanwhile, you may <a href="/home">return to your dashboard</a>
             
              
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->

@endsection


