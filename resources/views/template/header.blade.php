 <header class="main-header header-cont" style="position:fixed" >

        <!-- Logo -->
        <a href="#" class="logo">


        @if ($location == 'Home') 
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">MNCH Surveys</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">MNCH Surveys</span>
        @elseif($location == 'ass' || $location == 'umanage' || $location == 'preview')
            <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">{{$title}} </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">{{$title}} </span>

        @else

           <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">{{$title}} Survey</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">{{$title}} Survey</span>


        @endif

        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          @if ($location == 'Home')
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>
          </a>
           @elseif($location == 'ass')
           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>
          </a>
           @elseif($location == 'MN'||$location == 'IM'||$location == 'CH')
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span>OPEN/CLOSE MENU</span>   <span id = "autosavetext" class="logo-lg"></span>
          </a>
    
           
               
           
           @endif
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            
            <ul class="nav navbar-nav navbar-right">
          @if (Auth::guest())
            <li><a href="/auth/login">Login</a></li>
            <li><a href="/auth/register">Register</a></li>
          @else

           @if (isset($AssID)==true)
               @if($location == 'MN'||$location == 'IM'||$location == 'CH')
		
				
            <li> <a href="/assessments/cancel/{{$AssID}}"  role="button">
              <span><button id="cancelbt" class="btn btn-block btn-warning btn-xs">Cancel and Discard</button></span>  
          </a> </li>
           
           <li> <a href="/status/save/{{$AssID}}"  role="button">
              <span><button id="savebt" class="send-btn btn btn-block btn-info btn-xs">Save and Resume Later</button></span>  
          </a> </li>

           
               @endif
               @endif
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                   
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    
                  <p>  {{ Auth::user()->email }}  </p> 

                    


                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="Profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="/auth/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
</li>
                    
                  

                
                </ul>

                 
              </li>
              @endif
       
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar" style="display:none"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>