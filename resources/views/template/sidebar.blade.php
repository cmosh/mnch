
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

         

            <img src='{!!asset_path("blank.png")!!}'>
           
           

            </div>
            <div class="pull-left info">
              <p> {{ Auth::user()->name }}</p>
<p>
<small>


              @if(Auth::user()->role==0)
                      County User
                      
              @elseif(Auth::user()->role==1)
                      
                      Data Clerk
                      
                      @elseif(Auth::user()->role==2)
                      
                       Program User
                      
                       @elseif(Auth::user()->role>=3)
                      
                        System User (Admin)
                      
                        @elseif(Auth::user()->role=='')
                      
                        "Unknown"
                      


        @endif
          
            
<!--              <p> <a href="#"><i class="fa fa-circle text-success"></i> {{ Auth::user()->county}} County</a></p>
 -->          </small></p>
           </div>
           </div>


     
        
          
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" >
            <li class="header">Options</li>
            <!-- Optionally, you can add icons to the links -->
            @if((!isset($location))) <?php $location = 'Home' ?>
        @endif
          @if($location == 'Admin')
           <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
           <li class=""><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>


          @else
          @if ($location == 'Home' ) 
             <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
           <li class="active"><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>
            <!-- <li><a href="Profile"><i class="fa fa-link"></i> <span>Update Information</span></a></li> -->

            <li><a href="/assessment/CH"><i class="fa fa-link"></i> <span>CH Surveys</span></a></li>
            <li><a href="/assessment/MNH" style="overflow:none"><i class="fa fa-link"></i> <span>MNH Surveys</span></a></li>
            <li><a href="/assessment/IMCI"><i class="fa fa-link"></i> <span>IMCI Surveys</span></a></li>
           

               @if( Auth::user()->role == 2)
                <li><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif

               @if( Auth::user()->role >= 3)
                <li><a href="/usermanagement/viewusers"><i class="fa fa-link"></i> <span>User Management</span></a></li>
                <li><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif



           
           @elseif($location == 'ass' )
             <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>
           <!--  <li class="active" ><a href="#"><i class="fa fa-link"></i> <span>Assessments</span></a></li> -->

           @elseif ($location ==  'umanage' ) 


            <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li ><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>
            <!-- <li><a href="Profile"><i class="fa fa-link"></i> <span>Update Information</span></a></li> -->

            <li><a href="/assessment/CH"><i class="fa fa-link"></i> <span>CH Surveys</span></a></li>
            <li><a href="/assessment/MNH" style="overflow:none"><i class="fa fa-link"></i> <span>MNH Surveys</span></a></li>
            <li><a href="/assessment/IMCI"><i class="fa fa-link"></i> <span>IMCI Surveys</span></a></li>
             
    


               @if( Auth::user()->role == 2)
                <li><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif

               @if( Auth::user()->role >= 3)
                <li class="active"><a href="/usermanagement/viewusers"><i class="fa fa-link"></i> <span>User Management</span></a></li>
                <li><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif




           @elseif ($location ==  'preview')


            <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li ><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>
            <!-- <li><a href="Profile"><i class="fa fa-link"></i> <span>Update Information</span></a></li> -->

            <li><a href="/assessment/CH"><i class="fa fa-link"></i> <span>CH Surveys</span></a></li>
            <li><a href="/assessment/MNH" style="overflow:none"><i class="fa fa-link"></i> <span>MNH Surveys</span></a></li>
            <li><a href="/assessment/IMCI"><i class="fa fa-link"></i> <span>IMCI Surveys</span></a></li>
             
    


               @if( Auth::user()->role == 2)
                <li class="active"><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif

               @if( Auth::user()->role >= 3)
                <li ><a href="/usermanagement/viewusers"><i class="fa fa-link"></i> <span>User Management</span></a></li>
                <li class="active"><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif



                @elseif ($location ==  'pass')


            <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li ><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>
            <!-- <li><a href="Profile"><i class="fa fa-link"></i> <span>Update Information</span></a></li> -->

            <li><a href="/assessment/CH"><i class="fa fa-link"></i> <span>CH Surveys</span></a></li>
            <li><a href="/assessment/MNH" style="overflow:none"><i class="fa fa-link"></i> <span>MNH Surveys</span></a></li>
            <li><a href="/assessment/IMCI"><i class="fa fa-link"></i> <span>IMCI Surveys</span></a></li>
             
    


               @if( Auth::user()->role == 2)
                <li class=""><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif

               @if( Auth::user()->role >= 3)
                <li ><a href="/usermanagement/viewusers"><i class="fa fa-link"></i> <span>User Management</span></a></li>
                <li class=""><a href="/usermanagement/monitor"><i class="fa fa-link"></i> <span>Progress Review</span></a></li>

               @endif


 <li  class="active"><a href="/usermanagement/changepass"><i class="fa fa-link"></i> <span>Change Password</span></a></li>










           @else 

            <li class=""><a href="/"><i class="fa fa-link"></i> <span>Home</span></a></li>
             <li><a href="/home"><i class="fa fa-link"></i> <span>My Dashboard</span></a></li>

              <li class="treeview active">
              
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

           @endif
           

@if($location !=  'pass')
           <li><a href="/usermanagement/changepass"><i class="fa fa-link"></i> <span>Change Password</span></a></li>
           @endif
            <li><a href="/auth/logout"><i class="fa fa-link"></i> <span>Log Out</span></a></li>

          </ul><!-- /.sidebar-menu -->
         

        </section>
        <!-- /.sidebar -->
      </aside>
