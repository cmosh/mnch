

@extends('app')

@section('pageinfo')

 <h1>

             Error!

          
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
   <div class="error-page">
            <h4 class="headline text-yellow">402</h4>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i>Your account has been deactivated.</h3>
             
                Please contact your direct supervisor for more details or to
               reactivate your account in case of a mistake.<a href="/">return to the homepage.</a>
             
              
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->

@endsection


