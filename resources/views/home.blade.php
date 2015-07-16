

@extends('dashboard')


@section('pageinfo')

 <h1>

             My Dashboard

            <small> survey start page</small>
          </h1>

         
  @endsection

@section('content')
 <!-- Content Wrapper. Contains page content -->
    <div class="row">  
<div class="col-lg-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h4 class="text-center" >Welcome, {{ Auth::user()->name }}</h4>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">

                            

            <table class="table">
            <thead>
            <tr><th width="25%">
                  <div class="callout callout-danger" >
                    <h4 >County</h4>
                    <p>{{ Auth::user()->county }}  </p>
                  </div></th>
                  <th width="25%">
                  <div class="callout callout-info ">
                    <h4>Phone Number</h4>
                    <p> {{ Auth::user()->PhoneNumber }} </p>
                  </div></th>
                  <th width="25%">
                  <div class="callout callout-warning ">
                    <h4>ID Number</h4>
                    <p> {{ Auth::user()->IDNumber }} </p>
                  </div></th>
                  <th width="25%">
                  <div class="callout callout-success ">
                    <h4>email address</h4>
                    <p> {{ Auth::user()->email }}</p>
                  </div>
                  </th>
                  </tr>
                  </thead>
                  </table>
                </div>





                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
 <div class="row">
 <div class ="col-lg-12">
<div class="box box-success box-solid " >
                <div class="box-header with-border">
                  <h3 class="box-title">Tip: </h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                 <p>To start a survey, please click <u> 'begin assessment' </u>below each type of survey</p> 
                </div><!-- /.box-body -->
              </div>
</div>
      </div>        
 <div class="row">
                            <!-- left column -->
             <div class="col-lg-4 col-xs-6">              
<div class="small-box bg-green">
                <div class="inner">
                  <h3>IMCI</h3>
                  <p>Integrated Management of <br>Childhood Illness Survey</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-tux"></i>
                </div>
                <a href="imci" class="small-box-footer">Begin new assesment<i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div>
              <div class="col-lg-4 col-xs-6">
 <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>CH</h3>
                  <p>Child Health <br>Survey</p>
                </div>
                <div class="icon">
                  <i class="ion ion-social-github"></i>
                </div>
                <a href="ch" class="small-box-footer">Begin new assesment <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div>
              <div class="col-lg-4 col-xs-6">
 <div class="small-box bg-red">
                <div class="inner">
                  <h3>MNH</h3>
                  <p>Maternal and Noenatal <br>Health Survey</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-contacts"></i>
                </div>
                <a href="mnh" class="small-box-footer">Begin new assesment<i class="fa fa-arrow-circle-right"></i></a>
              </div>
             </div>
              </div>


@endsection
