   <!-- Left side column. contains the logo and sidebar -->
      <style>

      x50{ 
      	width: 10px;
      	word-wrap: break-word;}

      </style>
      <aside class="main-sidebar" >

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/bower_components/admin-lte/dist/img/blank.png" class="img-circle" />

            </div>
            <div class="pull-left info">
              <p> {{ Auth::user()->name }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->county}} County</a>
            </div>
          </div>

     
        
          
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" >
            <li class="header">Options</li>
            <!-- Optionally, you can add icons to the links -->
          
            @if ($location == 'Home') 

           <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Home</span></a></li>
            <!-- <li><a href="Profile"><i class="fa fa-link"></i> <span>Update Information</span></a></li> -->
            <li><a href="assessment/CH"><i class="fa fa-link"></i> <span>CH Surveys</span></a></li>
            <li><a href="assessment/MNG" style="overflow:none"><i class="fa fa-link"></i> <span>MNH Surveys</span></a></li>
            <li><a href="assessment/IMCI"><i class="fa fa-link"></i> <span>IMCI Surveys</span></a></li>



           
           @elseif($location == 'ass')

             <li><a href="/home"><i class="fa fa-link"></i> <span>Home</span></a></li>
            <li class="active" ><a href="#"><i class="fa fa-link"></i> <span>Assessments</span></a></li>



           @else 


             <li><a href="/home"><i class="fa fa-link"></i> <span>Home</span></a></li>

              <li class="treeview Active">
                            <a href="#">
                               
                                <span>{{$title}}</span>
                                                            </a>

                            <ul  class="treeview-menu" style="overflow:auto">


                            	@foreach ($secs as $sec)
                            	 <li  class="" >
                                    <a  href="#{{$sec->identifier}}"><x50>{{$sec->name}}</x50></a>
                                </li>
                            	@endforeach
                               
                                                               
                            </ul>
                        </li>


           @endif



            <li><a href="/auth/logout"><i class="fa fa-link"></i> <span>Log Out</span></a></li>
          </ul><!-- /.sidebar-menu -->
         

        </section>
        <!-- /.sidebar -->
      </aside>
